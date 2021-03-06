<h1>後台-產品管理</h1>
<hr>

<div class="row">
	<div class="col-md-8">
		<div class="row">
			<div class="col-md-2">
				<a href="add" class="btn btn-success">新增</a>
			</div>	
		</div>
		<div class="row">
			<div class="col-md-12">
			<table class="table">
			<tr>	
				<td>#</td>
				<td>產品名稱</td>
				<td>價格</td>
				<td>詳細</td>
				<td>管理</td>
				<td></td>
			</tr>
			<?php
				//print_r($result->result());

				foreach ($result->result() as $key=>$value) {		
				?>
				<tr>
					<td><?php echo $key+1; ?></td>
					<td><?php echo $value->name; ?></td>
					<td><?php echo $value->price; ?>元</td>
					<td><button type="button" class="glyphicon glyphicon-th" data-toggle="modal" data-target=<?="#my".$value->id ?>>
					</button></td>
					<td><a href=<?='edit/'.$value->id ?> class="btn btn-primary">編輯</a></td>
					<td><a href=<?='del/'.$value->id?>  class="btn btn-danger">刪除</a></td>

				</tr>
			<?php
				}
			?>

			</table>
			</div>
		</div>
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
	      	<h5><strong>最後更新時間 :</strong> <?=$value->timestamp?></h5>

	        <?=$value->note?>
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