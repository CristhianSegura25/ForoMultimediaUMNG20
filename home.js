let cerrar=document.querySelectorAll(".close")[0];
let abrir=document.querySelectorAll(".logoinicio")[0];
let modal=document.querySelectorAll(".modal")[0];
let modalC=document.querySelectorAll(".modalcontainer")[0];

let cerrar1=document.querySelectorAll(".close1")[0];
let abrir1=document.querySelectorAll(".cta")[0];
let modal1=document.querySelectorAll(".modal1")[0];
let modalC1=document.querySelectorAll(".modal-container1")[0];

abrir.addEventListener("click",function(e){
	e.preventDefault();
	modalC.style.opacity="1";
	modalC.style.visibility="visible";
	modal.classList.toggle("modal-close");
});

cerrar.addEventListener("click",function(){
	modal.classList.toggle("modal-close");
	setTimeout(function(){
	modalC.style.visibility="hidden";
	modalC.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(e){
	console.log(e.target);
	if(e.target==modalC){
		modal.classList.toggle("modal-close");

	setTimeout(function(){
	modalC.style.visibility="hidden";
	modalC.style.opacity="0";
	},1000);
	}
});

abrir1.addEventListener("click",function(e){
	e.preventDefault();
	modalC1.style.opacity="1";
	modalC1.style.visibility="visible";
	modal1.classList.toggle("modal-close1");
});

cerrar1.addEventListener("click",function(){
	modal1.classList.toggle("modal-close1");
	setTimeout(function(){
	modalC1.style.visibility="hidden";
	modalC1.style.opacity="0";
	},1000)
});

window1.addEventListener("click",function(e){
	console.log(e.target);
	if(e.target==modalC1){
		modal1.classList.toggle("modal-close1");

	setTimeout(function(){
	modalC1.style.visibility="hidden";
	modalC1.style.opacity="0";
	},1000);
	}
});