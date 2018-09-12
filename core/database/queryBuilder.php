<?php

class QueryBuilder {

    protected $pdo;

    public function __construct($pdo) {

        $this->pdo = $pdo;

    }

    public function selectAll($table) {

        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
  
        $statement->execute();
      
        return $statement->fetchAll(PDO::FETCH_OBJ);

    }

    public function insert($table, $parameters){

        $sql = sprintf(
          
            'insert into %s (%s) values (%s)',
           
            $table,
            
            implode(', ', array_keys($parameters)),
           
            ':' . implode(', :', array_keys($parameters))
        
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
       
        }   catch (Exception $e) {

            die('something went wrong');

        }

    }

    public function login($username, $password){

        try {
            $statement = $this->pdo->prepare("SELECT * FROM users WHERE name = :name");

            $statement->execute(array('name' => $username));

            foreach ($statement as $row){
                //succesful login
                if (password_verify($password,$row[password])){
                    
                    session_start();

                    $_SESSION['username'] = $row[name];
                
                    header("location:/");
                    
                    return true;
            
                } else {

                    session_start();

                    echo 'failed';
                    
                    $_SESSION['loginError'] = 'username or password is incorrect';
    
                    header("location:/loginForm");

                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function nameTaken($username){

        $statement = $this->pdo->prepare('SELECT count(*) FROM users WHERE name = :name');

        $statement->execute(array('name' => $username));

        $res = $statement->fetch(PDO::FETCH_NUM);

        $exists = array_pop($res);

        if ($exists > 0) {
            
            return true;
        
        } else {
            //name can be made
            return false;
        }
    }
    
}

