function delayRedirect(){
    document.getElementById('delayMsg').innerHTML = 'Please wait you ll be redirected after <span id="countDown">18</span> seconds....';
    var count = 18;
    setInterval(function(){
        count--;
        if (count == 0) {
            window.location = 'home.php'; 
        }
    },1000);
}

document.getElementById("demo").innerHTML = window.delayRedirect(); 
