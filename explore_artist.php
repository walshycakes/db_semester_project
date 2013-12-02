<html>
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
            <title></title>
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
            <?php require_once('preheader.php');
            	  $artist = htmlspecialchars($_POST['artist_choice']);
            	   ?>
	</head>

	<body class="span12">

		<h3><u> Artist:  <font color="red">
				<?php echo $artist; ?></h3></font></u>
		<h6> Genre <h4><h6><font color="blue">
				<?php $query="SELECT genre FROM band WHERE name='".$artist."'";
						  $result = mysql_query($query);
						  while ($row = mysql_fetch_assoc($result)){
						  	extract($row);
						  	echo $genre;
						  } ?></h6></font>
		<h4>Record Label</h4><h6> <font color="blue">
				<?php $query="SELECT record_label FROM band WHERE name='".$artist."'";
						  $result = mysql_query($query);
						  while ($row = mysql_fetch_assoc($result)){
						  	extract($row);
						  	echo $record_label;
						  } ?></h6></font>
		<h4>Band Members </h4><font color="blue">
				<?php $query="SELECT first_name, last_name FROM band_member WHERE band='".$artist."'";
					  $result = mysql_query($query);
					  while ($row = mysql_fetch_assoc($result)){
					  	?><h6><?php
					  	extract($row);
					  	echo $first_name." ".$last_name; ?></h6><?php
					  }?></font>
		<h4>Albums</h4><font color="blue">
				<?php $query="SELECT name, year, genre FROM album WHERE band='".$artist."'";
					  $result = mysql_query($query);
					  while ($row = mysql_fetch_assoc($result)){
					  	?><h6><?php
					  	extract($row);
					  	echo $name."  -  ".$year."  -  ".$genre;?></h6><?php
					  }?></font>
		<h4>Songs</h4><font color="blue">
				<?php $query="SELECT name, album, genre FROM song WHERE band='".$artist."'";
					  $result = mysql_query($query);
					  while ($row = mysql_fetch_assoc($result)){
					  	?><h6><?php
					  	extract($row);
					  	echo "\"".$name."\""."  from  ";?> <i><?php echo $album;?></i><?php echo "  -  ".$genre;?></h6><?php
					  }?></font>
		<h4>Awards</h4><font color="blue">
				<?php $query="SELECT award, year FROM award WHERE band='".$artist."'";
					$result = mysql_query($query);
					while ($row = mysql_fetch_assoc($result)){
						?><h6><?php
						extract($row);
						echo $award.", ".$year;?></h6><?php
					}?></font>
		<h4>Performances</h4><font color="blue">
				<?php $query="SELECT venue, day, month, year, tour FROM performance WHERE band='".$artist."'";
					$result = mysql_query($query);
					while ($row = mysql_fetch_assoc($result)){
						?><h6><?php
						extract($row);
						echo $venue.": ";
						echo $day."/".$month."/".$year;
						if ($tour != "" || $tour != null){
							echo " as part of the " . $tour . " tour";
						}?>
						</h6><?php
					}?></font>
		<h4>Tours</h4><font color="blue">
				<?php $query="SELECT name, year FROM tour WHERE band='".$artist."'";
				$result = mysql_query($query);
					while ($row = mysql_fetch_assoc($result)){
						?><h6><?php
						extract($row);
						echo $name.", ".$year;?></h6><?php
					}?></font>
	</body>

</html>