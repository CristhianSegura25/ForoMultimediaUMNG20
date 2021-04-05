// const app = new Vue({
// 	el:'#app',
// 	data:{
// 		numeros:['0','1','2','3']
// 	}
// })

let cerrarp=document.querySelectorAll(".closep")[0];
let abrirp=document.querySelectorAll(".recuadro3")[0];
let modalp=document.querySelectorAll(".modalp")[0];
let modalCp=document.querySelectorAll(".modalcontainerp")[0];

abrirp.addEventListener("click",function(e){
	e.preventDefault();
	modalCp.style.opacity="1";
	modalCp.style.visibility="visible";
	modalp.classList.toggle("modal-closep");
});

cerrarp.addEventListener("click",function(){
	modalp.classList.toggle("modal-closep");
	setTimeout(function(){
	modalCp.style.visibility="hidden";
	modalCp.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(e){
	console.log(e.target);
	if(e.target==modalCp){
		modalp.classList.toggle("modal-closep");

	setTimeout(function(){
	modalCp.style.visibility="hidden";
	modalCp.style.opacity="0";
	},1000);
	}
});