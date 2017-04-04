function colorMod(name,color){ 
	  var element = Snap.select("#"+name); 
	  if (element !== null) {
		element.attr({fill:color});
		if (color == "red") {
		  element.attr({stroke:"black", strokeWidth:"1", strokeDasharray:"3,1"});
		  
		  
		  //leaving in John's animate here
                  var ani = document.createElementNS("http://www.w3.org/2000/svg","animate");
		  ani.setAttribute("attributeName","opacity");
		  ani.setAttribute("repeatCount","indefinite");
		  ani.setAttribute("from","0");
		  ani.setAttribute("to","1");
		  ani.setAttribute("dur","2s");
		  document.getElementById(name).appendChild(ani);

		}
                if (color == "teal") {
                  
                  var pathLength = Snap.path.getTotalLength(element);
                  if (pathLength > 80){
                    var runner = canvas.circle(25,25,5).attr({fill:"teal"});
                    Snap.animate(0, (pathLength*30), function( value ) {
                        var movePoint = Snap.path.getPointAtLength( element, (value%pathLength) );
                        runner.attr({ cx: movePoint.x, cy: movePoint.y });
                    }, 60000);
                  }
                }
                if (color == "gold") {
                  
                  var pathLength = Snap.path.getTotalLength(element);
                  if (pathLength > 80){
                    var runner = canvas.circle(25,25,5).attr({fill:"gold"});
                    Snap.animate(0, (pathLength*10), function( value ) {
                        var movePoint = Snap.path.getPointAtLength( element, (value%pathLength) );
                        runner.attr({ cx: movePoint.x, cy: movePoint.y });
                    }, 60000);
                  }
                }
	  }
} 
