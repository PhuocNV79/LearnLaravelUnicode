<form method="post" action="/unicode">
    <div>
        <input type="text" name="user" placeholder="Nhap user name..."/>
        <input type="hidden" name="_method" value="POST"/>
        <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
    </div>
    <button type="submit">Submit formm</button>
</form>
