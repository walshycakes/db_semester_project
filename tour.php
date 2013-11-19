<html>
	
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
</head>
<body>
    <a href="./"><< home &nbsp;&nbsp;</a>
	<h1> Tours </h1>
	<br><br>
		<?php 
        $tour = new ajaxCRUD("Tour", "tour", "id"); //crud table view
        $tour->omitPrimaryKey(); 
        $tour->displayAs("name", "Tour");
        $tour->displayAs("band", "Band");
        $tour->displayAs("year", "Year");
        $tour->addAjaxFilterBoxAllFields(); //filter box for searching
        $tour->showTable(); //show the table
    ?>
</body>
</html>