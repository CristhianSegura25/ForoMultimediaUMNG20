// window.onload = () => {
// 	const transition_el = document.querySelector('.transition');
// 	const anchors = document.querySelectorAll('a'); 

// 	setTimeout(() => {
// 		transition_el.classList.remove('is-active');
// 	}, 500);

// 	for (let i = 0; i < anchors.length; i++){
// 		const anchor = anchors[i];

// 		anchor.addEventListener('click', e => {
// 			e.preventDefault();
// 			let target = e.target.href;

// 			transition_el.classList.add('is-active');

// 			setTimeout(() => {
// 				window.location.href = target;
// 			}, 500);
// 		});
// 	}
// }

let cerrarforo=document.querySelectorAll(".closeforo")[0];
let abrirforo=document.querySelectorAll(".ctaforo")[0];
let modalforo=document.querySelectorAll(".modalforo")[0];
let modalCforo=document.querySelectorAll(".modalcontainerforo")[0];

abrirforo.addEventListener("click",function(b){
	b.preventDefault();
	modalCforo.style.opacity="1";
	modalCforo.style.visibility="visible";
	modalforo.classList.toggle("modalcloseforo");
});

cerrarforo.addEventListener("click",function(){
	modalforo.classList.toggle("modalcloseforo");

	setTimeout(function(){
	modalCforo.style.visibility="hidden";
	modalCforo.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCforo){
		modalforo.classList.toggle("modalcloseforo");

	setTimeout(function(){
	modalCforo.style.visibility="hidden";
	modalCforo.style.opacity="0";
	},1000);
	}
});