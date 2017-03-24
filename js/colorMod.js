function colorMod(name,color){ 
	  var element = document.getElementById(name); 
	  if (element !== null) {
		element.style.fill=color;
		if (color == "red") {
		  element.style.stroke="black";
		  element.style.strokeWidth="1";
		  element.style.strokeDasharray="3,1";
		}
	  }
} 
