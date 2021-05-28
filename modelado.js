
let cerrarmodelado1=document.querySelectorAll(".closemodelado1")[0];
let abrirmodelado1=document.querySelectorAll(".logoinfo")[0];
let modalmodelado1=document.querySelectorAll(".modalmodelado1")[0];
let modalCmodelado1=document.querySelectorAll(".modalcontainermodelado1")[0];

abrirmodelado1.addEventListener("click",function(b){
	b.preventDefault();
	modalCmodelado1.style.opacity="1";
	modalCmodelado1.style.visibility="visible";
	modalmodelado1.classList.toggle("modal-closemodelado1");
});

cerrarmodelado1.addEventListener("click",function(){
	modalmodelado1.classList.toggle("modal-closemodelado1");

	setTimeout(function(){
	modalCmodelado1.style.visibility="hidden";
	modalCmodelado1.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCmodelado1){
		modalmodelado1.classList.toggle("modal-closemodelado1");

	setTimeout(function(){
	modalCmodelado1.style.visibility="hidden";
	modalCmodelado1.style.opacity="0";
	},1000);
	}
});



$('#showhide').on('click', function(e){
    $("#info_modelo").toggle();    
});

$('#showhide_2').on('click', function(e){
    $("#info_modelo_2").toggle();    
});

$('#showhide_3').on('click', function(e){
    $("#info_modelo_3").toggle();    
});

$('#showhide_4').on('click', function(e){
    $("#info_modelo_4").toggle();    
});

$('#showhide_5').on('click', function(e){
    $("#info_modelo_5").toggle();    
});

$('#showhide_6').on('click', function(e){
    $("#info_modelo_6").toggle();    
});

$('#showhide_7').on('click', function(e){
    $("#info_modelo_7").toggle();    
});

$('#showhide_8').on('click', function(e){
    $("#info_modelo_8").toggle();    
});

$('#showhide_9').on('click', function(e){
    $("#info_modelo_9").toggle();    
});

$('#showhide_10').on('click', function(e){
    $("#info_modelo_10").toggle();    
});

$('#showhide_11').on('click', function(e){
    $("#info_modelo_11").toggle();    
});

$('#showhide_12').on('click', function(e){
    $("#info_modelo_12").toggle();    
});

$('#showhide_13').on('click', function(e){
    $("#info_modelo_13").toggle();    
});

$('#showhide_14').on('click', function(e){
    $("#info_modelo_14").toggle();    
});

$('#showhide_15').on('click', function(e){
    $("#info_modelo_15").toggle();    
});

$('#showhide_16').on('click', function(e){
    $("#info_modelo_16").toggle();    
});


function setNewImage_1(){
	document.getElementById("img1").src = "images/Modelos/Primer_Modelo_2.gif"
}

function setOldImage_1(){
	document.getElementById("img1").src = "images/Modelos/Primer_Modelo.png"
}

function setNewImage_2(){
	document.getElementById("img2").src = "images/Modelos/Segundo_Modelo.gif"
}

function setOldImage_2(){
	document.getElementById("img2").src = "images/Modelos/Segundo_Modelo.png"
}

function setNewImage_3(){
	document.getElementById("img3").src = "images/Modelos/Tercer_Modelo.gif"
}

function setOldImage_3(){
	document.getElementById("img3").src = "images/Modelos/Tercer_Modelo.png"
}

function setNewImage_4(){
	document.getElementById("img4").src = "images/Modelos/Cuarto_Modelo.gif"
}

function setOldImage_4(){
	document.getElementById("img4").src = "images/Modelos/Cuarto_Modelo.png"
}

function setNewImage_5(){
	document.getElementById("img5").src = "images/Modelos/Quinto_Modelo.gif"
}

function setOldImage_5(){
	document.getElementById("img5").src = "images/Modelos/Quinto_Modelo.png"
}

function setNewImage_6(){
	document.getElementById("img6").src = "images/Modelos/Sexto_Modelo.gif"
}

function setOldImage_6(){
	document.getElementById("img6").src = "images/Modelos/Sexto_Modelo.png"
}

function setNewImage_7(){
	document.getElementById("img7").src = "images/Modelos/Septimo_Modelo.gif"
}

function setOldImage_7(){
	document.getElementById("img7").src = "images/Modelos/Septimo_Modelo.png"
}

function setNewImage_8(){
	document.getElementById("img8").src = "images/Modelos/Octavo_Modelo.gif"
}

function setOldImage_8(){
	document.getElementById("img8").src = "images/Modelos/Octavo_Modelo.png"
}

function setNewImage_foro(){
	document.getElementById("foro").src = "https://i.ibb.co/vQVqyYy/Logo-Foro.gif"
}

function setOldImage_foro(){
	document.getElementById("foro").src = "images/Ilustraciones/Logo_Foro.png"
}

function setNewImage_logo_20(){
	document.getElementById("logo_20").src = "https://i.ibb.co/djdfZ2p/Logo-20.gif"
}

function setOldImage_logo_20(){
	document.getElementById("logo_20").src = "images/Ilustraciones/Logo_20.png"
}