<!DOCTYPE html>
<html>
<head>
	<title>AJAX WITH PHP AND MYSQL</title>
	<script type="text/javascript" src="js/jquery-3.4.0.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
          $('#submit').click(function(event){
               event.preventDefault();
               $.ajax({
               url:"insert_db.php",
               method:"POST",
               data:$('form').serialize(),
               dataType:"text",
               success:function(insertmassage){
              $('#insertdb').text(insertmassage)

               }
          })
          })
          
		})
	</script>
</head>
<body>
	<h1>AJAX WITH PHP MYSQL => INTRODUCTION </h1>
     <p id="insertdb"></p>
     <form method="POST" >
          <table>
               <tr>
                    <td>Name:</td><td> <input type="text" name="name" id="name"></td>
               </tr>
               <tr>
                    <td>Email:</td><td> <input type="text" name="email" id="email"></td>
               </tr>
               <tr>
                    <td>Contact:</td><td> <input type="text" name="contact" id="contact"></td>
               </tr>
               <tr>
                     <td></td><td><input type="submit" name="submit" id="submit"></td>
               </tr>
          </table>
         
     </form>
</body>
</html>