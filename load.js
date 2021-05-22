function delayRedirect(){
    document.getElementById('delayMsg').innerHTML = 'Please wait you ll be redirected after <span id="countDown">10</span> seconds....';
    var count = 10;
    setInterval(function(){
        count--;
        document.getElementById('countDown').innerHTML = count;
        if (count == 0) {
            window.location = 'home.php'; 
        }
    },1000);
}

document.getElementById("demo").innerHTML = window.delayRedirect(); 
