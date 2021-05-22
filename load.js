function delayRedirect(){
    var count = 5;
    setInterval(function(){
        count--;
        if (count == 0) {
            window.location = 'home.php'; 
        }
    },1000);
}

document.getElementById("demo").innerHTML = window.delayRedirect(); 
