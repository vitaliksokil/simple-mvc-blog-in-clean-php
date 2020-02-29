<?php
require_once 'app/views/admin/includes/adminHeader.php';

?>
<table class="table">
    <thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Title</th>
        <th scope="col">Description</th>
        <th scope="col">Photo</th>
        <th scope="col">Created at</th>
        <th scope="col">Action 1</th>
        <th scope="col">Action 2</th>
        <th scope="col">Action 3</th>
    </tr>
    </thead>
    <tbody>
    <?php
    if (isset($posts)) {
        foreach ($posts as $post) {
            ?>
            <tr>
                <th><?=$post['id']?></th>
                <td><?=$post['title']?></td>
                <td><?=substr($post['description'],0,7).'...'?></td>
                <td><img src="/public/images/posts/<?=$post['img']?>" alt="" class="postImg"></td>
                <td><?=$post['created_at']?></td>
                <td><a href="/admin/post/update/<?=$post['id']?>">Update</a></td>
                <td><a href="/post/delete/<?=$post['id']?>">Delete</a></td>
                <td><a href="/post/<?=$post['id']?>">View</a></td>
            </tr>
            <?php
        }
    }
    ?>
    </tbody>
</table>
