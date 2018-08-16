window.onload = function(){
    
    function get(url) {
        return new Promise((resolve, reject) => {
          const xhr = new XMLHttpRequest();
          xhr.open("GET", url);
          xhr.onload = () => resolve(xhr.responseText);
          xhr.onerror = () => reject(xhr.statusText);
          xhr.send();
        });
      }

    let promise = get('/users');

    document.getElementById('register').addEventListener('submit', () => {
        promise.then((name) => {
            console.log(name);
        });
    });
}