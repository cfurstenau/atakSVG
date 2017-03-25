function colorMod(name,color){ 
	  var element = document.getElementById(name); 
	  if (element !== null) {
		element.style.fill=color;
		if (color == "red") {
		  element.style.stroke="black";
		  element.style.strokeWidth="1";
		  element.style.strokeDasharray="3,1";
		  
		  var ani = document.createElementNS("http://www.w3.org/2000/svg","animate");
		  ani.setAttribute("attributeName","opacity");
		  ani.setAttribute("repeatCount","indefinite");
		  ani.setAttribute("from","0");
		  ani.setAttribute("to","1");
		  ani.setAttribute("dur","2s");
		
		  element.appendChild(ani);

		}
	  }
} 
