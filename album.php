<html>
	
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
</head>
<body>
	<a href="./"><< home &nbsp;&nbsp;</a>
	<h1> Albums </h1>
	<br><br>
		<?php 
	        $song = new ajaxCRUD("Albums", "album", "id"); //crud table view
	        $song->omitPrimaryKey(); 
	        $song->displayAs("name", "Album");
	        $song->displayAs("band", "Band");
	        $song->displayAs("year", "Year");
	        $song->displayAs("genre", "Genre");
	        $song->addAjaxFilterBoxAllFields(); //filter box for searching
	        $song->showTable(); //show the table
    	?>
</body>
</html>