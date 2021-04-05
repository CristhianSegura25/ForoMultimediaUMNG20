// const app = new Vue({
// 	el:'#app',
// 	data:{
// 		numeros:['0','1','2','3']
// 	}
// })

let cerrar=document.querySelectorAll(".close")[0];
let abrir=document.querySelectorAll(".logoinicio")[0];
let modal=document.querySelectorAll(".modal")[0];
let modalC=document.querySelectorAll(".modalcontainer")[0];

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