let cerrar=document.querySelectorAll(".close")[0];
let abrir=document.querySelectorAll(".cta")[0];
let modal=document.querySelectorAll(".modal")[0];
let modalc=document.querySelectorAll(".modal-container")[0];

let cerraranimacion1=document.querySelectorAll(".closeanimacion1")[0];
let abriranimacion1=document.querySelectorAll(".logoinfo")[0];
let modalanimacion1=document.querySelectorAll(".modalanimacion1")[0];
let modalCanimacion1=document.querySelectorAll(".modalcontaineranimacion1")[0];


abrir.addEventListener("click",function(b){
	b.preventDefault();
	modalc.style.opacity="1";
	modalc.style.visibility="visible";
	modal.classList.toggle("modal-close");
});

cerrar.addEventListener("click",function(){
	modal.classList.toggle("modal-close");

	setTimeout(function(){
	modalc.style.visibility="hidden";
	modalc.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalc){
		modal.classList.toggle("modal-close");

	setTimeout(function(){
	modalc.style.visibility="hidden";
	modalc.style.opacity="0";
	},1000);
	}
});


abriranimacion1.addEventListener("click",function(b){
	b.preventDefault();
	modalCanimacion1.style.opacity="1";
	modalCanimacion1.style.visibility="visible";
	modalanimacion1.classList.toggle("modal-closeanimacion1");
});
cerraranimacion1.addEventListener("click",function(){
	modalanimacion1.classList.toggle("modal-closeanimacion1");

	setTimeout(function(){
	modalCanimacion1.style.visibility="hidden";
	modalCanimacion1.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCanimacion1){
		modalanimacion1.classList.toggle("modal-closeanimacion1");

	setTimeout(function(){
	modalCanimacion1.style.visibility="hidden";
	modalCanimacion1.style.opacity="0";
	},1000);
	}
});


//


$('#modal1').on('hidden.bs.modal', function (b) {
	// do something...
	$('#modal1 iframe').attr("src", $("#modal1 iframe").attr("src"));
  });
  
  $('#modal6').on('hidden.bs.modal', function (b) {
	// do something...
	$('#modal6 iframe').attr("src", $("#modal6 iframe").attr("src"));
  });
  
  $('#modal4').on('hidden.bs.modal', function (b) {
	// do something...
	$('#modal4 iframe').attr("src", $("#modal4 iframe").attr("src"));
  });

  function setNewImage_foro(){
	document.getElementById("foro").src = "images/Ilustraciones/Logo_Foro.gif"
}

function setOldImage_foro(){
	document.getElementById("foro").src = "images/Ilustraciones/Logo_Foro.png"
}

function setNewImage_logo_20(){
	document.getElementById("logo_20").src = "images/Ilustraciones/Logo_20.gif"
}

function setOldImage_logo_20(){
	document.getElementById("logo_20").src = "images/Ilustraciones/Logo_20.png"
}

