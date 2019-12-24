<form action='' method='post'>
     <select name="myselectbox">
         <option value="" hidden="hidden">Select Option</option>
         <?php
         $showoption = mysql_query("select * from tablename")or die(mysql_error());
           while($row=mysql_fetch_array($showoption )){
              $optionid=$row['id'];
              $optionname=$row['name'];
              echo = "<option value='$optionid'>$optionname</option>";
           }
         }
         ?>
     </select>
     <input type='submit' value='submit'/>
 </form>   