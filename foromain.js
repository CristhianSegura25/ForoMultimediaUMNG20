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

cerrarforo.addEventListener("click",function(b){
	b.preventDefault();
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

let cerrarforo1=document.querySelectorAll(".closeforo1")[0];
let abrirforo1=document.querySelectorAll(".ctaforo1")[0];
let modalforo1=document.querySelectorAll(".modalforo1")[0];
let modalCforo1=document.querySelectorAll(".modalcontainerforo1")[0];

abrirforo1.addEventListener("click",function(b){
	b.preventDefault();
	modalCforo1.style.opacity="1";
	modalCforo1.style.visibility="visible";
	modalforo1.classList.toggle("modalcloseforo1");
});

cerrarforo1.addEventListener("click",function(b){
	b.preventDefault();
	modalforo1.classList.toggle("modalcloseforo1");
	setTimeout(function(){
	modalCforo1.style.visibility="hidden";
	modalCforo1.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCforo1){
		modalforo1.classList.toggle("modalcloseforo1");

	setTimeout(function(){
	modalCforo1.style.visibility="hidden";
	modalCforo1.style.opacity="0";
	},1000);
	}
});

// let cerrarforo=document.querySelectorAll(".closeforo")[0];
// let abrirforo=document.querySelectorAll(".ctaforo")[0];
// let modalforo=document.querySelectorAll(".modalforo")[0];
// let modalCforo=document.querySelectorAll(".modalcontainerforo")[0];

// abrirforo.addEventListener("click",function(b){
// 	b.preventDefault();
// 	modalCforo.style.opacity="1";
// 	modalCforo.style.visibility="visible";
// 	modalforo.classList.toggle("modalcloseforo");
// });

// cerrarforo.addEventListener("click",function(b){
// 	b.preventDefault();
// 	modalforo.classList.toggle("modalcloseforo");
// 	setTimeout(function(){
// 	modalCforo.style.visibility="hidden";
// 	modalCforo.style.opacity="0";
// 	},1000)
// });

// window.addEventListener("click",function(b){
// 	console.log(b.target);
// 	if(b.target==modalCforo){
// 		modalforo.classList.toggle("modalcloseforo");

// 	setTimeout(function(){
// 	modalCforo.style.visibility="hidden";
// 	modalCforo.style.opacity="0";
// 	},1000);
// 	}
// });
// let cerrarforo=document.querySelectorAll(".closeforo")[0];
// let abrirforo=document.querySelectorAll(".ctaforo")[0];
// let modalforo=document.querySelectorAll(".modalforo")[0];
// let modalCforo=document.querySelectorAll(".modalcontainerforo")[0];

// abrirforo.addEventListener("click",function(b){
// 	b.preventDefault();
// 	modalCforo.style.opacity="1";
// 	modalCforo.style.visibility="visible";
// 	modalforo.classList.toggle("modalcloseforo");
// });

// cerrarforo.addEventListener("click",function(b){
// 	b.preventDefault();
// 	modalforo.classList.toggle("modalcloseforo");
// 	setTimeout(function(){
// 	modalCforo.style.visibility="hidden";
// 	modalCforo.style.opacity="0";
// 	},1000)
// });

// window.addEventListener("click",function(b){
// 	console.log(b.target);
// 	if(b.target==modalCforo){
// 		modalforo.classList.toggle("modalcloseforo");

// 	setTimeout(function(){
// 	modalCforo.style.visibility="hidden";
// 	modalCforo.style.opacity="0";
// 	},1000);
// 	}
// });