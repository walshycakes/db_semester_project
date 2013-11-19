<html>
    <head>
            <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
            <title></title>
            <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/css/bootstrap-combined.min.css" rel="stylesheet">
            <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
            <script src="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    </head>
    <body>
    
        <select name="table_choice" id="table_choice" style="span3">
            <options>
            <option selected="selected"><b>---- Choose a table ----</b></option>
            <option value="band">Bands</option>
            <option value="band_member">Band members</option>
            <option value="album">Albums</option>
            <option value="song">Songs</option>
            <option value="record_label">Record labels</option>
            <option value="award">Awards</option>
            <option value="performance">Performances</option>
            <option value="tour">Tours</option>
            <option value="venue">Venues</option>
            <option value="genre">Genres</option>
         </select>

    <script type="text/javascript">
    $(function(){
        $('#table_choice').on('change',function(event){
            if(this.value == 'band'){
                window.location = "./band.php";
            }
            else if(this.value == 'band_member'){
               window.location = "./band_member.php";
            }
            else if(this.value == 'album'){
                window.location = "./album.php";
            }
            else if(this.value == 'song'){
                window.location = "./song.php";
            }
            else if(this.value == 'record_label'){
                window.location = "./record_label.php";
            }
            else if(this.value == 'award'){
                window.location = "./award.php";
            }
            else if(this.value == 'performance'){
                window.location = "./performance.php";
            }
            else if(this.value == 'tour'){
                window.location = "./tour.php";
            }
            else if(this.value == 'venue'){
                window.location = "./venue.php";
            }
            else if(this.value == 'genre'){
                window.location = "./genre.php";
            }
            else{ //no selection
               
            }
        });
    });
    </script>
</body>
</html>