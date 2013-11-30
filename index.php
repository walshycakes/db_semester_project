<?php
	// if ($user_login == false){
	// 	header('Location: ./login.php');
	// }
	?>

<html>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
            <title></title>
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
            
	</head>

	<body>
		<h1> DB Semester Project </h1>
        <h2> Music Information Tracker </h2>
		<div class="span4" style="float:left" id="table_nav">
			<h3><u> Information Editor </u></h3>
			<p><i>Add music information below.<br>
				 Select a table to modify </i></p>
			<?php include('select_box.php'); ?>
		</div>

		<div class="row-fluid span4" style="float:left" id="xml_buttons">
			<h3><u> Export Options (XML) </u></h3>
			<p style="padding-bottom: 20px"><i>Export either the data or just the schema in XML format. <br>
				File displays in a new tab. Hit Ctrl+S to save as the .xml file </i></p>

			<button type="submit" class="btn btn-info span2" onClick="window.open('./xml_out.php')">Export data</button>
			<button type="submit" class="btn btn-warning span2" onClick="window.open('./xml_schema_out.php')">Export schema</button>
		</div>

		<div class=span


	</body>
</html>