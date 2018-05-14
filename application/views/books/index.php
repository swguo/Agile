<h1>書籍資料</h1>
<hr>
<div class="row">
	<div class="col-md-8">
<table class="table">
<tr>	
	<td>#</td>
	<td>書籍名稱</td>
	<td>價格</td>
	<td>isdn</td>
</tr>
<?php
	//print_r($result->result());

	foreach ($result->result() as $key=>$value) {		
	?>
	<tr>
		<td><?php echo $key+1; ?></td>
		<td><?php echo $value->name; ?></td>
		<td><?php echo $value->price; ?>元</td>
		<td><?php echo $value->isdn; ?></td>
	</tr>
<?php
	}
?>

</table>
	</div>
	</div>
	<?php
	foreach ($result->result() as $key=>$value) {		
	?>
	<!-- Modal -->
	<div class="modal fade" id=<?="my".$value->id ?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel"><?=$value->name?></h4>
	      </div>
	      <div class="modal-body">
	      	<img src=<?="../../".$value->img ?> width="350px" >
	      	<h5><strong>價格 :</strong> <?=$value->price?>元</h5>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="button" class="btn btn-primary">Save changes</button>
	      </div>
	    </div>
	  </div>
	</div>
	  <?php
		}
		?>
</div>
</body>