
function setNewImage_1(){
	document.getElementById("img_1").src = "https://s3.gifyu.com/images/Logo_Animacion_14_s.gif"
}

function setOldImage_1(){
	document.getElementById("img_1").src = "images/Ilustraciones/Logo_Animacion.png"
}

function setNewImage_2(){
	document.getElementById("img_2").src = "https://s3.gifyu.com/images/Logo_Guiones_18_s.gif"
}

function setOldImage_2(){
	document.getElementById("img_2").src = "images/Ilustraciones/Logo_Guiones.png"
}

function setNewImage_3(){
	document.getElementById("img_3").src = "https://s3.gifyu.com/images/Logo_Modelado_16_s.gif"
}

function setOldImage_3(){
	document.getElementById("img_3").src = "images/Ilustraciones/Logo_Modelado.png"
}

function setNewImage_4(){
	document.getElementById("img_4").src = "https://s3.gifyu.com/images/Logo_Programacion_18_s.gif"
}

function setOldImage_4(){
	document.getElementById("img_4").src = "images/Ilustraciones/Logo_Programacion.png"
}

function setNewImage_5(){
	document.getElementById("img_5").src = "https://s3.gifyu.com/images/Logo_Render_19_s.gif"
}

function setOldImage_5(){
	document.getElementById("img_5").src = "images/Ilustraciones/Logo_Render.png"
}

function generateTime() {
    // Capturamos la hora actual mediante la creación de una nueva instancia del objeto Date
    let timeNow = new Date();
    // Queremos que la hora se muestre siempre con 2 dígitos. Para eso, hacemos lo siguiente:
    // Usamos un ternario para saber si el número de digitos es menor que 2
    let hours = timeNow.getHours().toString().length < 2 ? "0" + timeNow.getHours() : timeNow.getHours();
    let minutes = timeNow.getMinutes().toString().length < 2 ? "0" + timeNow.getMinutes() : timeNow.getMinutes();
    let seconds = timeNow.getSeconds().toString().length < 2 ? "0" + timeNow.getSeconds() : timeNow.getSeconds();

    //  Concatenando variables | Usando ES5 
    // let mainTime = hours + ":" + minutes + ":" + seconds;
     //  Concatenando variables | Usando ES6: Template Strings (Template literals) 
    let mainTime = `${hours}:${minutes}:${seconds}`;
    // Escribo la hora en el elemento h1 con id="time"
    document.getElementById("time").innerHTML = mainTime;
  
}

// Si quiero que el efecto del reloj se vea correctamente, tengo que usar un setInterval de 1000
// setInterval - ES6 - Javascript Moderno
setInterval(() => {
    generateTime();
}, 1000);

// setInterval - ES5 - Manera tradicional
// setInterval(function() {
//     generateTime();
// }, 1000);