<!DOCTYPE html>
<html>
<head>
	<title>AJAX WITH PHP AND MYSQL</title>
	<script type="text/javascript" src="js/jquery-3.4.0.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
          //alert(1);
          $.ajax({
          	url:"date.php",
          	data:"",
          	dataType:"text",
          	success:function(strdate){
              $('#show_date').text(strdate)
          	}
          })
           $('#lode').click(function(event){
               event.preventDefault();
               $.ajax({
               url:"lode.php",
               
               dataType:"html",
               success:function(lodemassage){
              $('#show_lode_value').html(lodemassage)

               }
          })
          })
		});
	</script>
</head>
<body>
	<h1>AJAX WITH PHP MYSQL => INTRODUCTION </h1>
     <a href="insert.php">insert</a><br>
     <a id="lode">Lode</a>
     
     <div id="show_date"></div>
    
          
      <div id="show_lode_value"></div> 
                    
               
          
     
</body>
</html>