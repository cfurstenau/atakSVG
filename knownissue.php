<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>AT:AK SVG Known Issues</title>
	<link href='http://fonts.googleapis.com/css?family=Averia+Libre:400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php include('menu.html'); ?>
	<H1>AT:AK SVG Known Issues</h1>
	
	<h3>Menu</h3>
	<p>I'm trying to automate this but yet again, I'm not sure if that is such a good idea since now I have to develop a frontend mechanism to manage the menu.  As of now, just modify the menu.html file.  I'm still having problem with setting the current item; until then, the current menu item is not working.</p>
	
	<h3>Fonts</h3>
	<p>SVG Display non-system-installed fonts weird.  The recommendation is to use Arial and Times New Roman since every system in the world should at a minimum have these two fonts.</p>
	
	<h3>Page Load Error</h3>
	<p>While using XAMPP for my web stack needs, everything works great.  With that said, I have experienced some really strange behavior after loading the same code to my server which is hosted by a third party.  An error relating to a non-compliant character coding as follows: <br>
	<small>The character encoding of the HTML document was not declared. The document will render with garbled text in some browser configurations if the document contains characters from outside the US-ASCII range. The character encoding of the page must be declared in the document or in the transfer protocol.</small></p>
	<p>For clarification, I created my SVG files with Inkscape to generate the code but it included a XML declaration at the beginning of my SVG's which was preventing the PHP to include it somehow.  Not sure if this is accurate but this was my situation.  After removing the first line of the SVG, it worked as expected.</p>
	<p>The line to remove was:  <pre>&lt;&#63;xml version="1.0" encoding="UTF-8" standalone="no"&#63;&gt;</pre></p>
  </body>

</html>