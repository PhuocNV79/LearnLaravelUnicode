<h1>Xử lý file</h1>

<form method="post" action="<?php echo route('categories.handlefile')?>" enctype="multipart/form-data">
    <div>
        <input type="file" name="file" id="upload_file">
    </div>
    <div>
        <?php echo csrf_field()?>
<!--        <input type="hidden" name="_token" value=" --><?php //echo csrf_token()?><!-- ">-->
    </div>
    <button type="submit">Upload</button>
</form>
