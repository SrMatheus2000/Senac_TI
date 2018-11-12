function soma(){
	let campo1 = document.getElementById("campo1").value;
	
	let campo2 = document.getElementById("campo2").value;
	
	//alert(campo1+campo2);
	
	document.getElementById("resultado").innerHTML=parseFloat(campo1)+parseFloat(campo2);
	// innerHTML
	// setAttribute
	// value
}

function diminuicao(){
	let campo1 = document.getElementById("campo1").value;
	
	let campo2 = document.getElementById("campo2").value;
	
	document.getElementById("resultado").innerHTML=parseFloat(campo1)-parseFloat(campo2);
}

function multiplicacao(){
	let campo1 = document.getElementById("campo1").value;
	
	let campo2 = document.getElementById("campo2").value;

	document.getElementById("resultado").innerHTML=parseFloat(campo1)*parseFloat(campo2);
}

function divisao(){
	let campo1 = document.getElementById("campo1").value;
	
	let campo2 = document.getElementById("campo2").value;

	document.getElementById("resultado").innerHTML=parseFloat(campo1)/parseFloat(campo2);
}


function bhaskcara(){
	let a = document.getElementById("a").value;
	let b = document.getElementById("b").value;
	let c = document.getElementById("c").value;
	
	let x1 = (-b+Math.sqrt(b*b-4*a*c))/(2*a);
	
	let x2 = (-b-Math.sqrt(b*b-4*a*c))/(2*a);
	
	document.getElementById("x1").innerHTML="X1 = " + x1;
	document.getElementById("x2").innerHTML="X2 = " + x2;
}	