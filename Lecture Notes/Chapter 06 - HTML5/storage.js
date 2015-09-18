
function doit(){
 
 var button=document.getElementById("button");
 button.addEventListener("click", saveit, false);
 
}

function saveit(){
  
  var one = document.getElementById("one").value;
  var two = document.getElementById("two").value;
  sessionStorage.setItem(one, two);
  
  display(one);
}

function display(one){
  
  var rightbox = document.getElementById("rightbox");
  var two = sessionStorage.getItem(one);
  rightbox.innerHTML = "The variable name is:" + one + "<br /> and the value is: " + two;
}

window.addEventListener("load", doit, false);