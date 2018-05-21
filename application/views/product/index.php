<!DOCTYPE html>
<html lang="en">

 

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
   

    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">產品介紹
        <small>products</small>
      </h1>
      
   

  
<?php foreach ($result->result() as $key=>$value){
 ?>
 



      <!-- Project 1 -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src=<?=base_url($value->img) ?> width="640px" alt="">
          </a>
        </div>

        <div class="col-md-5">
          <h3><?php echo $value->name; ?></h3>
          <p>
            <?php  $len = strpos($value->note,'</p>') ?>
           <?php echo substr($value->note, 0, $len+4); ?>
          </p>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal"  onclick="location.href = '<?php echo$value->buyLink; ?>' ">購買連結</button>
          

         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">更多資訊</button>
          <div class="modal fade" id="myModal" role="dialog">
          <div class="modal-dialog">
          
            <!-- Modal content-->
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?php echo $value->name; ?></h4>
              </div>
              <div class="modal-body">
                <p><?php echo $value->note; ?></p>          
              
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
            
          </div>
         </div>
         </div>




      </div>
      <!-- /.row -->
      <hr>
<?php } ?>


    <!-- Bootstrap core JavaScript -->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?> ></script>

  </body>

</html>

