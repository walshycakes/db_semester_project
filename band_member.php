<html>
	
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
</head>
<body>
    <a href="./"><< home &nbsp;&nbsp;</a>
	<h1> Band Members </h1>
	<br><br>
		<?php 
        $band_member = new ajaxCRUD("Band member", "band_member", "id"); //crud table view
        $band_member->omitPrimaryKey(); 
        $band_member->displayAs("first_name", "First name");
        $band_member->displayAs("last_name", "Last name");
        $band_member->displayAs("band", "Band");
        $band_member->addAjaxFilterBoxAllFields(); //filter box for searching
        $band_member->showTable(); //show the table
    ?>
</body>
</html>