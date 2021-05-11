
let cerrarrender1=document.querySelectorAll(".closerender1")[0];
let abrirrender1=document.querySelectorAll(".logoinfo")[0];
let modalrender1=document.querySelectorAll(".modalrender1")[0];
let modalCrender1=document.querySelectorAll(".modalcontainerrender1")[0];

abrirrender1.addEventListener("click",function(b){
	b.preventDefault();
	modalCrender1.style.opacity="1";
	modalCrender1.style.visibility="visible";
	modalrender1.classList.toggle("modal-closerender1");
});
cerrarrender1.addEventListener("click",function(){
	modalrender1.classList.toggle("modal-closerender1");

	setTimeout(function(){
	modalCrender1.style.visibility="hidden";
	modalCrender1.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCrender1){
		modalrender1.classList.toggle("modal-closerender1");

	setTimeout(function(){
	modalCrender1.style.visibility="hidden";
	modalCrender1.style.opacity="0";
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

  function funcion_cambio(n){
	var trabajo_cambio =  document.getElementById("trabajo_render");
	if(n==0){
	trabajo_cambio.src="images/trabajo_render_3/1.jpg";
    }else if(n==1){
		trabajo_cambio.src="images/trabajo_render_3/2.jpg";
		}else if(n==2){
			trabajo_cambio.src="images/trabajo_render_3/3.jpg";
			}else if(n==3){
				trabajo_cambio.src="images/trabajo_render_3/4.jpg";
				}
}

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