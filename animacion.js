let cerrar=document.querySelectorAll(".close")[0];
let abrir=document.querySelectorAll(".cta")[0];
let modal=document.querySelectorAll(".modal")[0];
let modalc=document.querySelectorAll(".modal-container")[0];

let cerrarmodelado1=document.querySelectorAll(".closemodelado1")[0];
let abrirmodelado1=document.querySelectorAll(".logoinfo")[0];
let modalmodelado1=document.querySelectorAll(".modalmodelado1")[0];
let modalCmodelado1=document.querySelectorAll(".modalcontainermodelado1")[0];

abrir.addEventListener("click", function(e) {
    e.preventDefault();
    modalc.style.opacity="1";
    modalc.style.visibility="visible";
    modal.classList.toggle("modal-close");
});

cerrar.addEventListener("click",function(){
	modal.classList.toggle("modal-close");
	setTimeout(function(){
	modalc.style.visibility="hidden";
	modalc.style.opacity="0";
	},550)
});

window.addEventListener("click",function(e){
	console.log(e.target);
	if(e.target==modalC){
		modal.classList.toggle("modal-close");

	setTimeout(function(){
	modalc.style.visibility="hidden";
	modalc.style.opacity="0";
	},550);
	}
});

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

//

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

$('#modal1').on('hidden.bs.modal', function (e) {
	// do something...
	$('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
  });
  
  $('#modal6').on('hidden.bs.modal', function (e) {
	// do something...
	$('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
  });
  
  $('#modal4').on('hidden.bs.modal', function (e) {
	// do something...
	$('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
  });