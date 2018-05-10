<div class="col-md-9">
	<h1>後臺首頁</h1>
	<div class="panel panel-primary">
		<div class="panel-heading">原料庫存</div>
		<div class="panel-body">
			<div class="row">
				<?php
				foreach ($product->result() as $row) {
					echo '<div class="col-md-3" style="margin-bottom:15px;font-size:18px;">';
					if($row->safety_stock < $row->stock){
						echo '<span class="glyphicon glyphicon-ok-sign" style="color:#419641">';
					}else{
						echo '<span class="glyphicon glyphicon-remove-sign" style="color:#d9534f">';
					}
					?>
							<span><?=$row->name?></span><br />
							<span>安全庫存：<?=$row->safety_stock?></span><br />
							<span>目前庫存：<?=$row->stock?></span>
						</span>
					</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</div>
</body>
</html>
