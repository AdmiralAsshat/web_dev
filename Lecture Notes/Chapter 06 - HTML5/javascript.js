
function bringit(){
	document.querySelector('#first').onclick=say;
}

function say(){
	alert('You clicked something. There were no survivors.');
}

window.onload=bringit;