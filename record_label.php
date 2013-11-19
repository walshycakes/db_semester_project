<html>
	<a href="./"><< home &nbsp;&nbsp;</a><?php require_once('preheader.php'); include('ajaxCRUD.class.php'); include("select_box.php"); ?>
<head>
	<link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
</head>
<body>
	<h1> Record Labels </h1>
	<br><br>
		 <?php 
        $record_label = new ajaxCRUD("Record label", "record_label", "id"); //crud table view
        $record_label->omitPrimaryKey();
        $record_label->displayAs("name", "Record label");
        $record_label->displayAs("city", "City");
        $record_label->displayAs("state", "State");
        $record_label->addAjaxFilterBoxAllFields(); //filter box for searching
        $record_label->showTable(); //show the table
    ?>
</body>
</html>