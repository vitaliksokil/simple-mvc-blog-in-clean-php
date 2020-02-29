<?php
require_once 'app/views/admin/includes/adminHeader.php';
if (isset($post)) {
    ?>
    <form action="/post/update/<?=$post['id']?>" method="post" enctype="multipart/form-data">
        <input type="hidden" >
        <div class="form-group">
            <label for="title">Post title</label>
            <input type="text" class="form-control" id="title" name="post[title]" required value="<?=$post['title']?>">
        </div>
        <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="post[description]" required><?=$post['description']?></textarea>
        </div>
        <div class="form-group">
            <label for="image">Image</label>
            <input type="file" name="img">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    <?php
}
