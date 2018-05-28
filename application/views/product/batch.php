<aside class="fh5co-page-heading">
</aside>
<div id="fh5co-main">
	<div class="container">
		<?php echo form_open(site_url('product/sentMail'),array('id' => 'cus_form'));?>
		<div class="row">
			<div class="col-md-12" style="margin-top:15px;">
			</div>
			<div class="col-md-12" style="margin-top:-10px;">
				<h3><span class="glyphicon glyphicon-ok-sign"></span>基本資料</h3>
				<hr>
				<div class="col-md-6">
					<label>名字</label>
					<input type="text" name="name" value="<?php $name=$this->session->userdata('name');echo $name;?>" placeholder="名字" required>
				</div>
				<div class="col-md-6">
					<label>電子信箱</label>
					<input type="email" name="email" value="<?php $email = $this->session->userdata('email');echo $email; ?>" placeholder="電子信箱" required>
				</div>
				<div class="col-md-6">
					<label>聯絡電話</label>
					<input type="text" name="phone" value="<?php $phone = $this->session->userdata('phone');echo $phone; ?>" placeholder="聯絡電話" required>
				</div>
				<div class="col-md-6">
					<label>地址</label>
					<input type="text" name="address" value="<?php $address = $this->session->userdata('address');echo $address; ?>" placeholder="地址" required>
				</div>
				<div class="col-md-12">
					<label>備註</label>
					<textarea class="col-md-12" name="note" rows="3" placeholder="備註"><?php $note = $this->session->userdata('note');echo $note; ?></textarea>
				</div>
			</div>
		</div>
		<div class="col-md-12" style="margin-top:15px;">
		</div>
		<input type="submit" value="送出" name="sentMail" class="btn success" style="width:55px;margin-bottom:100px;">
	</div>
</div>
<?php $this->session->sess_destroy();?>
<style type="text/css">
	td{
		padding: 5px;
	}
</style>
