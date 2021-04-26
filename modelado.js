
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

function setNewImage_1(){
	document.getElementById("img1").src = "images/Modelos/Primer_Modelo.gif"
}

function setOldImage_1(){
	document.getElementById("img1").src = "images/Modelos/Primer_Modelo.png"
}

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
