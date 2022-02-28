<h1>Them chuyen muc</h1>

<form method="post" action="<?php echo route('categories.add')?>">
    <div>
        <input type="text" name="category_name" placeholder="ten chuyen muc">
    </div>
    <div>
        <?php echo csrf_field()?>
<!--        <input type="hidden" name="_token" value=" --><?php //echo csrf_token()?><!-- ">-->
    </div>
    <button type="submit">submit</button>
</form>
