<html>
	<a href="./"><< home &nbsp;&nbsp;</a><?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1> Songs </h1>
	<br><br>
		<?php 
	        $song = new ajaxCRUD("Song", "song", "id"); //crud table view
	        $song->omitPrimaryKey(); 
	        $song->displayAs("name", "Song name");
	        $song->displayAs("album", "Album");
	        $song->displayAs("band", "Band");
	        $song->displayAs("genre", "Genre");
	        $song->addAjaxFilterBoxAllFields(); //filter box for searching
	        $song->showTable(); //show the table
    	?>
</body>
</html>