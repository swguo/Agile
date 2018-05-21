<div class="row">
  <div class="col-md-8">
    <?php 
    $data = $result->result()[0];
    print_r($data);
    echo form_open_multipart('product/update/'.$data->id);?>
      <div class="form-group">
        <label >產品名稱(中文)</label>
        <input type="text" class="form-control" id="name" name="name" 
        value=<?=$data->name ?> placeholder="產品名稱(中文)">
      </div>
      <div class="form-group">
        <label >描述(中文)</label>
        <input type="text" class="form-control" id="note" name="note" 
        value=<?=$data->note ?> placeholder="描述(中文)">
      </div>
      <div class="form-group">
        <label >產品價格</label>
        <input type="text" class="form-control" id="price" name="price" 
        value=<?=$data->price ?> placeholder="產品價格">
      </div>
      <div class="form-group">
        <label >網站連結</label>
        <input type="text" class="form-control" id="buyLink" name="buyLink" 
        value=<?=$data->buyLink ?> placeholder="產品名稱(英文)">
      </div>
      <div class="form-group">
        <label >產品名稱(英文)</label>
        <input type="text" class="form-control" id="name_en" name="name_en" 
        value=<?=$data->name_en ?> placeholder="產品名稱(英文)">
      </div>
      <div class="form-group">
        <label >產品描述(英文)</label>
        <input type="text" class="form-control" id="note_en" name="note_en" 
        value=<?=$data->note_en ?> placeholder="產品描述(英文)">
      </div>
      <div class="form-group">
        <label >影片上傳</label>
        <input type="file" id="userfile" name="userfile" >
      </div>
  
  
  
      <input type="submit" value="送出" class="btn btn-default">
    </form>
  </div>
</div>