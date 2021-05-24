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

let cerrarforo2=document.querySelectorAll(".closeforo2")[0];
let abrirforo2=document.querySelectorAll(".ctaforo2")[0];
let modalforo2=document.querySelectorAll(".modalforo2")[0];
let modalCforo2=document.querySelectorAll(".modalcontainerforo2")[0];

abrirforo2.addEventListener("click",function(b){
	b.preventDefault();
	modalCforo2.style.opacity="1";
	modalCforo2.style.visibility="visible";
	modalforo2.classList.toggle("modalcloseforo2");
});

cerrarforo2.addEventListener("click",function(b){
	b.preventDefault();
	modalforo2.classList.toggle("modalcloseforo2");
	setTimeout(function(){
	modalCforo2.style.visibility="hidden";
	modalCforo2.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCforo2){
		modalforo2.classList.toggle("modalcloseforo2");

	setTimeout(function(){
	modalCforo2.style.visibility="hidden";
	modalCforo2.style.opacity="0";
	},1000);
	}
});

let cerrarforo3=document.querySelectorAll(".closeforo3")[0];
let abrirforo3=document.querySelectorAll(".ctaforo3")[0];
let modalforo3=document.querySelectorAll(".modalforo3")[0];
let modalCforo3=document.querySelectorAll(".modalcontainerforo3")[0];

abrirforo3.addEventListener("click",function(b){
	b.preventDefault();
	modalCforo3.style.opacity="1";
	modalCforo3.style.visibility="visible";
	modalforo3.classList.toggle("modalcloseforo3");
});

cerrarforo3.addEventListener("click",function(b){
	b.preventDefault();
	modalforo3.classList.toggle("modalcloseforo3");
	setTimeout(function(){
	modalCforo3.style.visibility="hidden";
	modalCforo3.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCforo3){
		modalforo3.classList.toggle("modalcloseforo3");

	setTimeout(function(){
	modalCforo3.style.visibility="hidden";
	modalCforo3.style.opacity="0";
	},1000);
	}
});

let cerrarforo4=document.querySelectorAll(".closeforo4")[0];
let abrirforo4=document.querySelectorAll(".ctaforo4")[0];
let modalforo4=document.querySelectorAll(".modalforo4")[0];
let modalCforo4=document.querySelectorAll(".modalcontainerforo4")[0];

abrirforo4.addEventListener("click",function(b){
	b.preventDefault();
	modalCforo4.style.opacity="1";
	modalCforo4.style.visibility="visible";
	modalforo4.classList.toggle("modalcloseforo4");
});

cerrarforo4.addEventListener("click",function(b){
	b.preventDefault();
	modalforo4.classList.toggle("modalcloseforo4");
	setTimeout(function(){
	modalCforo4.style.visibility="hidden";
	modalCforo4.style.opacity="0";
	},1000)
});

window.addEventListener("click",function(b){
	console.log(b.target);
	if(b.target==modalCforo3){
		modalforo4.classList.toggle("modalcloseforo4");

	setTimeout(function(){
	modalCforo4.style.visibility="hidden";
	modalCforo4.style.opacity="0";
	},1000);
	}
});