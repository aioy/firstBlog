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
                    
                    $_SESSION['users'] = $row[name];
                
                    echo 'true';
                    
                    return true;
            
                } else {
                    
                    echo 'false';
                
                    return false;
                }
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }
    
}

