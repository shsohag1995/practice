<?php
include("includes/header.php");
?>
<section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- Website Overview -->
        <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <div class="col-md-8">
            <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Posts</h3>
            </div>
          </div>
           <div class="col-md-4">
             <div class="dropdown create" style="float: left;">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <form style="padding-top: 7px;" class="form-inline" action="" method="">
                 <li><button type="submit" class="btn btn-default">Today</button></li>
                <li><button type="submit" class="btn btn-default">This weak</button></li>
                <li><button type="submit" class="btn btn-default">This Month</button></li>
                
                </form>
                
              </ul>
              
            </div>
             
           </div>
         
        </div>
        
      </div>
    </nav>

            <div class="panel panel-default">
             
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                          <input class="form-control" type="text" placeholder="Filter Posts...">
                      </div>
                </div>
                <br>
                <table class="table table-striped table-hover">
                      <tr>
                        <th>Priduct Image</th>
                        <th>ProductID</th>
                        <th>Product name</th>
                        <th>View</th>
                        <th>Type</th>
                        <th>Catagory</th>
                        <th>Published</th>
                        <th>Created</th>
                        <th></th>
                      </tr>
                      <tr>
                        <td>
                            <img src="../../image/flower.jpg" width="60px" height="40px" title="flower" >
                        </td>
                        <td>i234</td>
                        <td>Flower</td>
                        <td>Public</td>
                        <td>Women product</td>
                        <td>Follower</td>
                        <td>Dec 12, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <tr>
                        <tr>
                        <td>
                            <img src="../../image/flower.jpg" width="60px" height="40px" title="flower" >
                        </td>
                        <td>i234</td>
                        <td>Flower</td>
                        <td>Public</td>
                        <td>Women product</td>
                        <td>Follower</td>
                        <td>Dec 12, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <tr>
                        <tr>
                        <td>
                            <img src="../../image/flower.jpg" width="60px" height="40px" title="flower" >
                        </td>
                        <td>i234</td>
                        <td>Flower</td>
                        <td>Public</td>
                        <td>Women product</td>
                        <td>Follower</td>
                        <td>Dec 12, 2016</td>
                        <td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
                      </tr>
                      <tr>
                        
                      
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
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
