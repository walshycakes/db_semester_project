<html>
	
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
</head>
<body>
    <a href="./"><< home &nbsp;&nbsp;</a>
	<h1> Performances </h1>
	<br><br>
		<?php 
        $performance = new ajaxCRUD("Performance", "performance", "id"); //crud table view
        $performance->omitPrimaryKey(); 
        $performance->displayAs("day", "Day");
        $performance->displayAs("month", "Month");
        $performance->displayAs("year", "Year");
        $performance->displayAs("venue", "Venue");
        $performance->displayAs("band", "Band");
        $performance->displayAs("tour", "Tour");
        $performance->addAjaxFilterBoxAllFields(); //filter box for searching
        $performance->showTable(); //show the table
    ?>
</body>
</html>