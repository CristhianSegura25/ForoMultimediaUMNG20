// const app = new Vue({
// 	el:'#app',
// 	data:{
// 		numeros:['0','1','2','3']
// 	}
// })

let cerrarpro=document.querySelectorAll(".closepro")[0];
let abrirpro=document.querySelectorAll(".logoiconito")[0];
let modalpro=document.querySelectorAll(".modalpro")[0];
let modalCpro=document.querySelectorAll(".modalcontainerpro")[0];

abrirpro.addEventListener("click",function(b){
	b.preventDefault();
	modalCpro.style.opacity="1";
	modalCpro.style.visibility="visible";
	modalpro.classList.toggle("modal-closepro");
});

cerrarpro.addEventListener("click",function(){
	modalpro.classList.toggle("modal-closepro");

	setTimeout(function(){
	modalCpro.style.visibility="hidden";
	modalCpro.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCpro){
		modalpro.classList.toggle("modal-closepro");

	setTimeout(function(){
	modalCpro.style.visibility="hidden";
	modalCpro.style.opacity="0";
	},1000);
	}
});
