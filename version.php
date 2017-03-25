<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>AT:AK SVG Version Control</title>
	<link href='http://fonts.googleapis.com/css?family=Averia+Libre:400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php include('menu.html'); ?>
	
	<H1>AT:AK SVG Version Control</h1>
	
	<h3>Features & Notes</h3>
	<p>01. In order for this application to be user friendly, there must be UI to manage the tag, status color, and text values.  Without it, this application can only be used by advanced users and developers.  Currently I am recommending that you use PhpMyAdmin or some similar tools to manage the data until this feature is implemented.</p>
	<p>02. The menu is hard-coded.  It would be nice to manage it also with possibly the database so that newly added content will auto generate the menu items.</p>
	<p>03. An easier interface to upload/download the SVG files.  The reason why I am hesitant to implement this is that there are too many security risk associated with this feature.  Since I dont want to continually patch for security holes, I'm not motivated to provide this feature.</p>
	<p></p>
	<hr>
	
	<h3>Version 0.2</h3>
	<p>
	01. Convert MySQL extension to MySQLi since The PHP function mysql_num_rows() has been deprecated and will be removed from future versions.  This will break any new implementation. [Files involved: dbconnect, dbclose, index.php]<br>
	02. All table names had to be lowercase and added the underscore because my server hosted by the third party was case sensitive with the table name yet the XAMPP was not.<br>
	03. To accommodate for color blindness users, it would be great if either the shape changes according to the status or blink the path to give better alertness.  Well I was able to accomplish the blinking feature.  That's good enough for me. Also we cannot force the users to comply to any particular shape for their status.  Most would chose a shape to represent the node/component.[colorMod.js]</p>
	</p>
	
    <h3>Version 0.1</h3>
	<p>The initial version includes the following features:</p>
	<p>
	01. Change the fill color based on the color stored in the database associated with the element name. [colorMod.js]<br>
	02. Change the text content based on the value stored in the database associated with the element name. [valueMod.js]<br>
	03. Provided basic examples and template to help the users should they like to use them.<br>
	04. The red color is special by changing the element style with the "thicker dashed-line" defined by the stroke-dasharray and the stroke-width is set to 1.  Keep in mind that in javascript, the hyphen is not accepted; therefore, camel case is used instead.  I really hate javascript for their inconsistencies. [colorMod.js]<br>
	05. Ensured that both tag result and element exist to ensure proper display and replacement.
	</p>
	
	

  </body>

</html>