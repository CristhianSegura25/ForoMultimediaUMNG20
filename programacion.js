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

let cerrarpro1=document.querySelectorAll(".closepro1")[0];
let abrirpro1=document.querySelectorAll(".letracompilar2")[0];
let modalpro1=document.querySelectorAll(".modalpro1")[0];
let modalCpro1=document.querySelectorAll(".modalcontainerpro1")[0];

abrirpro1.addEventListener("click",function(b){
	b.preventDefault();
	modalCpro1.style.opacity="1";
	modalCpro1.style.visibility="visible";
	modalpro1.classList.toggle("modal-closepro1");
});

cerrarpro1.addEventListener("click",function(){
	modalpro1.classList.toggle("modal-closepro1");

	setTimeout(function(){
	modalCpro1.style.visibility="hidden";
	modalCpro1.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCpro1){
		modalpro1.classList.toggle("modal-closepro1");

	setTimeout(function(){
	modalCpro1.style.visibility="hidden";
	modalCpro1.style.opacity="0";
	},1000);
	}
});
