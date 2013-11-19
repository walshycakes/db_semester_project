<html>
	<a href="./"><< home &nbsp;&nbsp;</a><?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1> Bands </h1>
	
	<br><br>
		<?php
			$band = new ajaxCRUD("band", "band", "id"); //crud table view
	        $band->omitPrimaryKey(); 
	        $band->displayAs("name", "band name");
	        $band->displayAs("genre", "genre");
	        $band->displayAs("record_label", "record label");
	        $band->addAjaxFilterBoxAllFields(); //filter box for searching
	        $band->showTable(); //show the table
			?>
</body>
</html>