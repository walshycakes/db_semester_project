<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
            <title></title>
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
            <?php require_once('preheader.php');
            		$genre = $_POST['genre_choice'];?>
	</head>

	<body class="span12">
		<h6><u><?php echo $genre; ?> Mini-Playlist</u><br></h6>
		<ol>
			<?php $query="SELECT name, album, band, genre FROM song WHERE genre='".$genre."'"." ORDER BY RAND() LIMIT 5";
					
					  $result = mysql_query($query);
					  while ($row = mysql_fetch_assoc($result)){
					  	?><li style="font-size:12px"><?php
					  	extract($row);
					  	echo "\"".$name."\""." by ".$band." from "; ?><i><?php echo $album;?></i><?php
					  	?></li><br><?php
					  }?>
		</ol>

	</body>

</html>