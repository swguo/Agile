<div class="row">
  <div class="col-md-8">
    <?php echo form_open_multipart('product/add_action');?>
      <div class="form-group">
        <label >產品名稱(中文)</label>
        <input type="text" class="form-control" id="name" name="name" placeholder="產品名稱(中文)">
      </div>
      <div class="form-group">
        <label >描述(中文)</label>
        <input type="text" class="form-control" id="note" name="note" placeholder="描述(中文)">
      </div>
      <div class="form-group">
        <label >產品價格</label>
        <input type="text" class="form-control" id="price" name="price" placeholder="產品價格">
      </div>
      <div class="form-group">
        <label >網站連結</label>
        <input type="text" class="form-control" id="buyLink" name="buyLink" placeholder="產品名稱(英文)">
      </div>
      <div class="form-group">
        <label >產品名稱(英文)</label>
        <input type="text" class="form-control" id="name_en" name="name_en" placeholder="產品名稱(英文)">
      </div>
      <div class="form-group">
        <label >產品描述(英文)</label>
        <input type="text" class="form-control" id="note_en" name="note_en" placeholder="產品描述(英文)">
      </div>
      <div class="form-group">
        <label >影片上傳</label>
        <input type="file" id="userfile" name="userfile" >
      </div>
  
  
  
      <input type="submit" value="送出" class="btn btn-default">
    </form>
  </div>
</div>