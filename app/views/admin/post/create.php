<?php
require_once 'app/views/admin/includes/adminHeader.php';
?>

<form action="/post/create" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="title">Post title</label>
        <input type="text" class="form-control" id="title" name="post[title]" required>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea  class="form-control" id="description" name="post[description]" required></textarea>
    </div>
    <div class="form-group">
        <label for="image">Image</label>
        <input type="file" name="img" required>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
