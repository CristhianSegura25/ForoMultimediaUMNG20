
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