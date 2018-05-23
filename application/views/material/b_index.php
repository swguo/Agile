<h1>後台-原料管理</h1>
<hr>
<div class="row">
	<div class="col-md-8">
		<div class="row">
			<?php
				$recordValue = array(
					'name'     => '',
					'startTime'=> '',
					'endTime'  => '',
					'shipped'  => '',
				);
				$selected = array(
					'2'=>'',
					'1'=>'',
					'0'=>'',
				);
				if('' != $filter){
					$recordValue = $filter;
					$selected[$filter['shipped']] = 'selected';
					$name = ''!=$filter['name'] ? "<li><h5><strong>姓名包含：</strong>{$filter['name']}</h4></li>" : '';
					// 故意把出貨類型反過來，這樣只要查詢"出貨類型與filter不同"就可以直接全選了
					$shipped = array('1'=>'待出貨', '0'=>'已出貨', '2'=>'全選')[$filter['shipped']];
					$startTime = (''!=$filter['startTime']) ? "在{$filter['startTime']}之後" : '';
					$endTime = (''!=$filter['endTime']) ? "在{$filter['endTime']}之前" : '';
					$mid = (''!=$startTime && ''!=$endTime) ? "，且" : '';
					$time = $startTime.$mid.$endTime;
					$time = ('' != $time) ? "<li><h5><strong>訂貨時間：</strong>{$time}</h4></li>" : '';
			?>
				<div class="alert alert-info">
					<h4><strong>篩選條件</strong>(按左邊選單的原料管理可以清除篩選)</h4>
					<ul>
						<?=$name?>
						<?=$time?>
						<li><h5><strong>出貨狀態：</strong><?=$shipped?></h4></li>
					</ul>
				</div>
			<?php
				}
			?>

			<form method="post" action="./backIndex">
			<table class='table'>
				<tr>
					<td>姓名</td>
					<td>開始時間</td>
					<td>結束時間</td>
					<td>出貨狀態</td>
					<td>篩選</td>
				</tr>
				<tr>
					<td><input type='text' name='name' class='form-control' placeholder='訂購者姓名' value="<?=$recordValue['name']?>"></td>
					<td><input type='datetime-local' name='startTime' class='form-control' placeholder='開始時間' value="<?=$recordValue['startTime']?>"></td>
					<td><input type='datetime-local' name='endTime' class='form-control' placeholder='結束時間' value="<?=$recordValue['endTime']?>"></td>
					<td><select class="form-control" name='shipped'>
						<option value='2' <?=$selected['2']?>>全選</option>
						<!-- 故意把出貨類型反過來，這樣只要查詢"出貨類型與filter不同"就可以直接全選了 -->
						<option value='0' <?=$selected['0']?>>已出貨</option>
						<option value='1' <?=$selected['1']?>>待出貨</option>
					</select></td>
					<td><input type="submit" class='btn btn-primary' value='進行篩選'></td>
				</tr>
			</table>
			<input type="hidden" name='filter' value='1'>
			</form>
		</div>
		<div class="row">
			<div class="col-md-12">
			<table class="table">
			<thead>
				<th>訂單編號</th>
				<th>姓名</th>
				<th>時間</th>
				<th>詳細資訊</th>
				<th>訂單狀態</th>
			</thead>
			<?php
				foreach ($data as $key=>$value) {
			?>
				<tr>
					<td><?=$value['id']?></td>
					<td><?=$value['name']?></td>
					<td><?=$value['date']?></td>
					<td><button type="button" class="glyphicon glyphicon-th" data-toggle="modal" data-target=<?="#my".$value['id'] ?>></button></td>
					<td>
						<?php
							if($value['is_delete']){
								$color="success";
								$text="已出貨";
							} else {
								$color="danger";
								$text="待出貨";
							}
						?>
						<form method="post" action="./shipping" onsubmit="return confirm('確定要修改出貨狀態嗎');">
							<input type="hidden" value="<?=$value['id']?>" name="id">
							<input type="submit" class="btn btn-<?=$color?>" value="<?=$text?>">
						</form>
					</td>
				</tr>
			<?php
				}
			?>
			</table>
			</div>
		</div>
	</div>
</div>
<hr>
<?php
	foreach ($data as $key=>$value) {
?>
	<!-- Modal -->
	<div class="modal fade" id=<?="my".$value['id'] ?> tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<!-- Modal Header -->
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel">訂單編號<?=$value['id']?></h4>
				</div>
				<!-- Modal Body -->
				<div class="modal-body">
					<h4 class="modal-title" id="myModalLabel">訂單狀態</h4>
					<h5><strong>訂購日期：</strong><?=$value['date']?></h5>
					<h5><strong>訂單狀態：</strong>
						<span style="color:#<?=($value['is_delete'] ? "55bb55" : "DD5544")?>">
							<?=($value['is_delete'] ? "已出貨" : "待出貨") ?>
						</span>
					</h5>
					<hr>
					<h4 class="modal-title" id="myModalLabel">聯絡資訊</h4>
					<h5><strong>姓名：</strong><?=$value['name'] ?></h5>
					<h5><strong>電話：</strong><?=$value['phone'] ?></h5>
					<h5><strong>信箱：</strong><?=$value['email'] ?></h5>
					<h5><strong>地址：</strong><?=$value['address'] ?></h5>
					<hr>
					<h4 class="modal-title" id="myModalLabel">訂購資料</h4>
					<table>
						<thead>
							<th>商品名稱</th>
							<th>數量</th>
							<th>單價</th>
							<th>總價</th>
						</thead>
						<?php
							$totalPrice = 0;
							foreach($value['data'] as $p_key=>$p_value){
						?>
						<tr>
							<td><?=$p_value->name?></td>
							<td><?=$p_value->quantity?></td>
							<td><?=$p_value->price?></td>
							<?php
								$itemPrice = $p_value->quantity * $p_value->price;
								$totalPrice = $totalPrice + $itemPrice;
							?>
							<td><?=$itemPrice?></td>
						</tr>
						<?php
							}
						?>
						<tfoot>
							<th></th>
							<th></th>
							<th>總金額：</th>
							<th><?=$totalPrice?></th>
						</tfoot>
					</table>
					<hr>
					<h4 class="modal-title" id="myModalLabel">備註</h4>
					<h5><?=$value['note'] ?></h5>
				</div>
				<!-- Modal Footer -->
				<div class="modal-footer">
					
				</div>
			</div>
		</div>
	</div>
<?php
	} 
?>
</body>