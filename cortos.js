let cerrarcortos=document.querySelectorAll(".closecortos")[0];
let abrircortos=document.querySelectorAll(".logoacercade")[0];
let modalcortos=document.querySelectorAll(".modalcortos")[0];
let modalCcortos=document.querySelectorAll(".modalcontainercortos")[0];

let cerrarcortos1=document.querySelectorAll(".closecortos1")[0];
let abrircortos1=document.querySelectorAll(".logoinfo")[0];
let modalcortos1=document.querySelectorAll(".modalcortos1")[0];
let modalCcortos1=document.querySelectorAll(".modalcontainercortos1")[0];

abrircortos.addEventListener("click",function(b){
	b.preventDefault();
	modalCcortos.style.opacity="1";
	modalCcortos.style.visibility="visible";
	modalcortos.classList.toggle("modal-closecortos");
});

cerrarcortos.addEventListener("click",function(){
	modalcortos.classList.toggle("modal-closecortos");

	setTimeout(function(){
	modalCcortos.style.visibility="hidden";
	modalCcortos.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCcortos){
		modalcortos.classList.toggle("modal-closecortos");

	setTimeout(function(){
	modalCcortos.style.visibility="hidden";
	modalCcortos.style.opacity="0";
	},1000);
	}
});

abrircortos1.addEventListener("click",function(b){
	b.preventDefault();
	modalCcortos1.style.opacity="1";
	modalCcortos1.style.visibility="visible";
	modalcortos1.classList.toggle("modal-closecortos1");
});
cerrarcortos1.addEventListener("click",function(){
	modalcortos1.classList.toggle("modal-closecortos1");

	setTimeout(function(){
	modalCcortos1.style.visibility="hidden";
	modalCcortos1.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCcortos1){
		modalcortos1.classList.toggle("modal-closecortos1");

	setTimeout(function(){
	modalCcortos1.style.visibility="hidden";
	modalCcortos1.style.opacity="0";
	},1000);
	}
});

$(document).ready(function() {
	var $magic = $(".magic"),
		magicWHalf = $magic.width() / 2;
	$(document).on("mousemove", function(e) {
	  $magic.css({"left": e.pageX - magicWHalf, "top": e.pageY - magicWHalf});
	});
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