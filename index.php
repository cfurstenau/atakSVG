
<html>
  <head>
    <title>AT:AK SVG</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta http-equiv="refresh" content="60" />
	
	<link href="css/style.css" type="text/css" rel="stylesheet" />
	
	<!--Function to change out the colors and text content value pair-->
    <script src='js/colorMod.js'></script>
	<script src='js/valueMod.js'></script>

  </head>
  
  <body>
  <?php 
  
  	/* Menu and refresh timer*/
	include('menu.html');
	include('timer.html');
	
	/* Get SVG file name from url and display only if it exist*/
    if ((isset($_REQUEST['file'])) && (file_exists('svg/'.$_REQUEST['file']))){
	  $file= $_REQUEST['file'];
	  include('svg/'.$file); 
	}
	
	/* -------------------------------------- */
	/* DB connection and query filtered by tag*/
	if (isset($_REQUEST['tag'])) {
      include('dbconnect.php');
	  
	  /* Get status from tag */
	  $tag= $_REQUEST['tag'];
	  $sqltag = 'select statusID from tagStatus where tag="'.$tag.'"';
	  $resulttag = mysql_query($sqltag);
	  $num_results = mysql_num_rows($resulttag); 
	  
	  /* Get colors from status IDs */
	  while ($rowtag = mysql_fetch_array($resulttag)) {
	    $sql = "select name,color from status where id in (".$rowtag['statusID'].")";
	    $result = mysql_query($sql);
	  }
	  
	  /* Get value pair from tag  for text content replacement*/
	  $sqltag2 = 'select valueID from tagValue where tag="'.$tag.'"';
	  $resulttag2 = mysql_query($sqltag2);
	  $num_results2 = mysql_num_rows($resulttag2); 
	  	 
	  
	  /* Call colorMod and valueMod function call through a list of elements by name with specified tag with some result */
	  echo "<script>";
	  
	  if ( $num_results > 0 ) {
	    while ($row = mysql_fetch_array($result)) {
	      echo "colorMod('".$row['name']."','".$row['color']."');";
	    }
	  }
	  
	  /* Get value from value IDs */
	  if ( $num_results2 > 0 ) {
	    while ($rowtag2 = mysql_fetch_array($resulttag2)) {
	      $sql2 = "select name,value from value where id in (".$rowtag2['valueID'].")";
	      $result2 = mysql_query($sql2);
	    }
	    while ($row2 = mysql_fetch_array($result2)) {
	      echo "valueMod('".$row2['name']."','".$row2['value']."');";
	    }
	  }
	     
	  echo "</script>";
	  
	  include('dbclose.php');
	
	}
	/* -------------------------------------- */

  ?>
  
    
  </body>

</html>