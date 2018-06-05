<div class="row">
  <div class="col-md-8">
    <?php 
    $data = $result->result()[0];
    //print_r($data);
    echo form_open_multipart('product/update/'.$data->id);?>
      <div class="form-group">
        <label >產品名稱(中文)</label>
        <input type="text" class="form-control" id="name" name="name" 
        value=<?=$data->name ?> placeholder="產品名稱(中文)">
      </div>
      <div class="form-group">
        <label >描述(中文)</label>
        <textarea name="note" rows="10" class="content form-control"><?=$data->note?></textarea>
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
        <textarea name="note_en" rows="10" class="content form-control"><?=$data->note_en?></textarea>
      </div>
      <div class="form-group">
        <label >圖片上傳</label>
        <input type="file" id="userfile" name="userfile" >
      </div>
      <div class="form-group">
        <label >圖片預覽</label>
        <img width="100px" src=<?=base_url($data->img)?> >
      </div>
  
  
  
      <input type="submit" value="送出" class="btn btn-default">
    </form>
  </div>
</div>
<script type="text/javascript">
    tinyMCE.init({
        mode : "textareas",
        editor_selector : "content",
        plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table contextmenu directionality",
        "emoticons template paste textcolor colorpicker textpattern",
        "code"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media | forecolor backcolor | code",
        image_advtab: true,
        menubar:false,
        min_height: 100
    });
</script>
