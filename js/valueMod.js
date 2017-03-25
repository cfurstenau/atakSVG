function valueMod(name,value){ 
	  var element = document.getElementById(name); 
	  if (element !== null) {
		element.textContent=value.toString();
	  }
} 