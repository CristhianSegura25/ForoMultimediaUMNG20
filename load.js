function delayRedirect(){
    var count = 5;
    setInterval(function(){
        count--;
        document.getElementById('countDown').innerHTML = count;
        if (count == 0) {
            window.location = 'https://www.google.com'; 
        }
    },1000);
}

document.getElementById("demo").innerHTML = window.delayRedirect(); 
