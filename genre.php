<html>
	
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
</head>
<body>
    <a href="./"><< home &nbsp;&nbsp;</a>
	<h1> Genres </h1>
	<br><br>
	<?php  
        $genre = new ajaxCRUD("Genre", "genre", "id"); //crud table view
        $genre->omitPrimaryKey();
        $genre->displayAs("name", "Genre");
        $genre->displayAs("info", "Description");
        $genre->addAjaxFilterBoxAllFields(); //filter box for searching
        $genre->showTable(); //show the table
    ?>
</body>
</html>