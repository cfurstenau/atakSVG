<!DOCTYPE html PUBLIC"-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>AT:AK SVG Installation</title>
	<link href='http://fonts.googleapis.com/css?family=Averia+Libre:400,700' rel='stylesheet' type='text/css'>
	<link href="css/style.css" type="text/css" rel="stylesheet" />
  </head>
  <body>
    <?php include('menu.html'); ?>
	
	<H1>AT:AK SVG Installation</h1>
	
    <h3>Concept</h3>
	<p>The fill color of the SVG element will change based on the color associated to it which is stored in the database.  The text content can be changed on the fly to current value to display relavent information about the particular node.  In practical use, you would have an application that collects health and status of an operating system, network, infrastructure, or application then apply an overall status of that element then set the color based on the severity or whatever you wish to do with this.</p>
	<p>This application is meant to be generic and extremely simple in design to assist the developers in the integration with other products.</p>
	<p>I would also want to acknowledge that this was not my original idea and would like to give credit to the "SlackKey Originals" whom I had great pleasure to work with.</p>
	
	<h3>Prerequisite</h3>
	<p>These are the development environment recommendation only.
	<li>Apache Webserver: 2.4.10</li>
	<li>PHP: 5.6.3 with mysqli extension</li>
	<li>MySQL Community Server: 5.6.21</li>
	</p>
	
	<h3>Installation</h3>
	<p><a href="dl/atakSvg.tar"><img src="img/download.png" align="right"></a>
	01. Download this current version. <br>
	Only the latest 3 version will be kept online.  Older versions: 
		x, y, z</p>
	<p>02. Extract it to your webserver DocumentRoot directory [typically /var/www/html for Apache Web Server].  </p>
	<small><b>tar -C /var/www/html -zxvf atakSvg.tgz</b></small>
	<p>03. Install MySQL database</p>
	<small>Run the SQL script located [dl/ataksvg.sql] against your database server.<br>
	There is no security implementation at all so you need to apply them separately.  Also I am making a few assumptions that the installer is somewhat technical and knows how to setup MySQL and webserver.</small>
	
	
    <h3>SVG file</h3>
	<p>If the SVG file does not exist, you will get nothing on screen except the menu. </p>
	<p>Within the SVG file, set the elementID to the name within the database and set a color or change the text content.</p>
	
	<h3>Database</h3>
	<p>Insert into the status table with element name and color [either html color name or hex value will work].</p>
	<p>Insert into the value table with element name and value to be replaced on load.</p>
	<p>The tag table contains the tag name and a list of statusID [separated by commas]</p>
	<p>When the index.php loads, it will look for the tag parameter in the URL then filter the result.  If the tag is not used, you will not get any color changing effect nor text content replacement since the query result will not be initiated.  The reason for this is that we don't want the users to break the database for overzealous queries.  The SVG file will still load but that's it.</p>
	

  </body>

</html>