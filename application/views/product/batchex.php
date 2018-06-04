<html lang="en">
<body>
	<aside class="fh5co-page-heading"></aside>
	<div class="container">
		<?php echo form_open(site_url('product/sentMail'),array('id' => 'cus_form'));?>
		<div class="row">
			<div class="col-md-12" style="margin-top:15px;">
				<?php
				if($this->session->flashdata('message_data') != ""){
						echo '<div class="alert alert-'.$this->session->flashdata('message_data')['type'].'" role="alert" style="margin-top:10px">'.$this->session->flashdata('message_data')['message'].'</div>';
					}
				?>
			</div>
			<div class="col-md-6" style="">
				<h3><span class="glyphicon glyphicon-user" style="font-size: 30px"></span>基本資料</h3>
				<hr>
				<div class="col-md-12" style="">
					<label>名字</label>
					<input type="text" name="name" value="<?php $name=$this->session->userdata('name');echo $name;?>" placeholder="名字" required>
				</div>
				<div class="col-md-12">
					<label>電子信箱</label>
					<input type="email" name="email" value="<?php $email = $this->session->userdata('email');echo $email; ?>" placeholder="電子信箱" required>
				</div>
				<div class="col-md-12">
					<label>聯絡電話</label>
					<input type="text" name="phone" value="<?php $phone = $this->session->userdata('phone');echo $phone; ?>" placeholder="聯絡電話" required>
				</div>
				<div class="col-md-12">
					<label>地址</label>
					<input type="text" name="address" value="<?php $address = $this->session->userdata('address');echo $address; ?>" placeholder="地址" required>
				</div>
				<div class="col-md-12">
					<label>備註</label>
					<textarea class="col-md-12" name="note" rows="3" placeholder="備註"><?php $note = $this->session->userdata('note');echo $note; ?></textarea>
				</div>
			</div>
			<div class="col-md-6">
				<h3><span class="glyphicon glyphicon-tree-deciduous" style="font-size: 30px"></span>原料購買</h3>
				<hr>
				<label></label>
				<div class="row">
					<?php
					foreach ($data->result() as $key => $row) {
						?>
						<div class="col-md-12" style="margin-bottom:10px;">
							<div class="col-md-4"><span class="glyphicon glyphicon-leaf" style="font-size:10px;margin-right:10px;"></span><?=$row->name?></div>
							<input type="hidden" name="pid[]" value="<?=$row->id?>">
							<input type="hidden" name="name_tw[]" value="<?=$row->name?>">
							<input type="hidden" name="name_en[]" value="<?=$row->name_en?>">
							<input type="hidden" name="price[]" value="<?=$row->price?>">
							<div class="col-md-6"><input type="number" name="order[]" value="0" min="0" max="800"></div>
							<div class="col-md-2">公斤</div>
						</div>
						<?php
					}
					?>
				</div>
			</div>
		</div>
	</hr>
		<hr></hr>
		<input type="submit" value="送出" name="sentMail" class="btn success" id="sentMail_btn">
	</form>
</div>
<?php $this->session->sess_destroy();?>
</body>
</html>
<style type="text/css">
	td{
		padding: 5px;
	}
</style>
