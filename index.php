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
		<div class="span12" style="float:left" id="table_nav">
			<h3><u> Information Editor </u></h3>
			<p><i> Select a table to modify </i></p>
			<?php include('select_box.php'); ?>
		</div>

		<div class="row-fluid span4" style="float:left" id="xml_buttons">
			<h3><u> Export Options (XML) </u></h3>
			<button type="submit" class="btn btn-info span2" onClick="location.href = './xml_out.php'">Export data</button>
			<button type="submit" class="btn btn-warning span2" onClick="location.href = './xml_schema_out.php'">Export schema</button>
		</div>


	</body>
</html>