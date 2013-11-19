<html>
	<a href="./"><< home &nbsp;&nbsp;</a><?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1> Awards </h1>
	<br><br>
		 <?php 
        $award = new ajaxCRUD("Award", "award", "id"); //crud table view
        $award->omitPrimaryKey(); 
        $award->displayAs("award", "Award");
        $award->displayAs("band", "Band");
        $award->displayAs("year", "Year");
        $award->addAjaxFilterBoxAllFields(); //filter box for searching
        $award->showTable(); //show the table
    ?>
</body>
</html>