<div class="container">
  <?php
    $array = [];
    foreach ($result->result() as $key=>$value){
      array_push($array, $value);
    }
  ?>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->

    <div class="carousel-inner" style="margin-top: 100px; margin-bottom: 50px;">
      <div class="item active">
        <img src="<?php echo base_url($array[0]->img)?>" alt="error" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url($array[1]->img)?>" alt="error" style="width:100%;">
      </div>

      <div class="item">
        <img src="<?php echo base_url($array[2]->img)?>" alt="error" style="width:100%;">
      </div>
    </div>
    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
    <div></div>
  </div>
</div>
