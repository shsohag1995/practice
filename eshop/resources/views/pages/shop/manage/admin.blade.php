<?php
include("includes/header.php");
?>

 <?php
include("includes/side_menu.php");
?>
   
          <div class="col-md-10">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Admins</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Users...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                      	<th>User Image</th>
                      	<th>UserID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Joined</th>
                        <th>Action</th>
                        
                      </tr>
                      <tr>
                      	 <td>
                            <img src="../../image/sohag.jpg" class="img-circle" width="60px" height="40px" title="flower" >
                        </td>
                        <td>i234</td>
                        <td>Jill Smith</td>
                        <td>jillsmith@gmail.com</td>
                        <td>Dec 12, 2016</td>
                        <td> <form action="admin.php">
                          <button type="submit" class="btn btn-danger" value="delete">Delete</button>
                        </form> </td>
                      </tr>
                      <tr>
                      	<td>
                            <img src="../../image/sohag.jpg" width="60px" height="40px" title="flower" >
                        </td>
                        <td>i234</td>
                        <td>Eve Jackson</td>
                        <td>ejackson@yahoo.com</td>
                        <td>Dec 13, 2016</td>
                        <td> <form action="admin.php">
                          <button type="submit" class="btn btn-danger" value="delet">Delete</button>
                        </form> </td>
                      </tr>
                      <tr>
                      	<td>
                            <img src="../../image/flower.jpg" width="60px" height="40px" title="flower" >
                        </td>
                        <td>i234</td>
                       <td>Stephanie Landon</td>
                        <td>landon@yahoo.com</td>
                        <td>Dec 14, 2016</td>
                        <td> <form action="admin.php">
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form> </td>
                      </tr>
                      <tr>
                      	<td>
                            <img src="../../image/flower.jpg" width="60px" height="40px" title="flower" >
                        </td>
                        <td>i234</td>
                        <td>Mike Johnson</td>
                        <td>mjohnson@gmail.com</td>
                        <td>Dec 15, 2016</td>
                        <td> <form action="admin.php">
                          <button type="submit" class="btn btn-danger">Delete</button>
                        </form> </td>
                      </tr>
                    </table>
              </div>
              </div>

          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
