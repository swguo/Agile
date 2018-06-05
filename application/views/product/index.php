<!DOCTYPE html>
<html lang="en">

  <body>
    <aside class="fh5co-page-heading"></aside>


    <!-- Page Content -->
    <div class="container">

      <!-- Page Heading -->
      <h1 class="my-4">產品介紹
        <small>products</small>
      </h1>




<?php
$i=0;
foreach ($result->result() as $key=>$value){
 ?>




      <!-- Project 1 -->
      <div class="row">
        <div class="col-md-7">
          <a href="#">
            <img class="img-fluid rounded mb-3 mb-md-0" src=<?=base_url($value->img) ?> width="640px" height="400px" alt="">
          </a>
        </div>

        <div class="col-md-5">
          <h3 id="product_name_h3"><?php echo $value->name; ?></h3>
          <p>
            <?php  $len = strpos($value->note,'</p>') ?>
           <?php echo substr($value->note, 0, $len+4); ?>
          </p>
          <button type="button" class="btn btn-info btn-lg" data-toggle="modal"  onclick="location.href = '<?php echo$value->buyLink; ?>' ">購買連結</button>


         <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target=<?="#myModal".$i?>>更多資訊</button>
          <div class="modal fade" id=<?="myModal".$i?> role="dialog">
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
<?php
$i++;
}
 ?>


    <!-- Bootstrap core JavaScript -->
    <script src="../../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"); ?> ></script>

  </body>

</html>
