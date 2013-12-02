

<html>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
            <title></title>
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
            <?php require_once('preheader.php');?>
	</head>

	<body>

		<div class="span12" style="float:left" id="header">
		<h1> DB Semester Project: <i>Music Information Tracker</i></h1>
        <p><i>by: Bryan Walsh, Marcus Rosti, Ben Nowak<i></p>
   		</div>

		<div class="span12" style="float:left" id="table_nav">
			<h3><u> Information Editor </u></h3>
			<p><i>Add music information below.<br>
				 Select a table to modify </i></p>
			<?php include('select_box.php'); ?>
		</div>

		<div class="span12" style="float:left" id="explore_artists">
			<h3><u>Explore Artists</u></h3>
			<p><i>Select the name of an artist to explore.
				Includes albums, songs, recent tours, performances, and more!</i></p>
			<!--insert text box and submit button-->

			<form method="post">
				<select name="artist_choice" id="artist_choice">
				 	<option selected="selected"><b>---- Choose an Artist ----</b></option>
				 	<?php $result=mysql_query('SELECT * FROM band');?>
					<?php while($row=mysql_fetch_assoc($result)){?>
						<option value="<?php echo htmlspecialchars($row['name']);?>"> 
            			<?php echo htmlspecialchars($row['name']); ?> 
        			</option> 
    				<?php } ?> 
				</select>
				<br>
				<input class="btn btn-success" type="submit" name='explore_artist' value="Explore Artist"/>
			</form>
			
			<?php
				if(isset($_POST['explore_artist']) && $_POST['artist_choice'] != '---- Choose an Artist ----'){
					$artist = $_POST['artist_choice'];
					include('explore_artist.php');
				}
				?>

		</div>

		<div class="span12" style="float:left" id="explore_songs">
			<h3><u>Discover New Music</u></h3>
			<p><i>Select a genre from the dropdown and you'll receive
				a playlist of 5 random songs to discover!</i></p>
				<!--insert dropdown of genres, submit button-->
			<form method="post">
			<select name="genre_choice" id="genre_choice">
				<option selected="selected"><b>---- Choose a Genre ----</b></option>
				<?php $result=mysql_query('SELECT * FROM genre');?>
				<?php while($row=mysql_fetch_assoc($result)){?>
				<option value="<?php echo htmlspecialchars($row['name']);?>"> 
            	<?php echo htmlspecialchars($row['name']); ?> 
        	</option> 
    			<?php } ?> 
			</select>
			<br>
			<input class="btn btn-primary" type="submit" name='generate_playlist' value="Generate Playlist"/>
		</form>
			
			<?php
				if(isset($_POST['genre_choice']) && $_POST['genre_choice'] != '---- Choose a Genre ----'){
					$genre = $_POST['genre_choice'];
					include('random_playlist.php');
				};?>
			</div>
		
		<div class="span12" style="float:left; padding-bottom: 50px" id="xml_buttons">
			<h3><u> Export Options (XML) </u></h3>
			<p style="padding-bottom: 20px"><i>Export either the data or just the schema in XML format.
				File displays in a new tab. Hit Ctrl+S to save the .xml file </i></p>

			<button type="submit" class="btn btn-info" onClick="window.open('./xml_out.php')">Export data</button>
			<button type="submit" class="btn btn-warning" onClick="window.open('./xml_schema_out.php')">Export schema</button>
		</div>
		</tr>
</table>
	</body>

</html>
