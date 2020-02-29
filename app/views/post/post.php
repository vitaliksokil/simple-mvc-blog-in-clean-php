<?php
if (isset($post)) {
    ?>
        <div class="post">
            <div class="back_btn">
                <a class="btn btn-primary" href="<?=$_SERVER['HTTP_REFERER'] ?? '/posts'?>">< Back</a>
            </div>
            <div class="post_img">
                <img src="/public/images/posts/<?=$post['img']?>" alt="">
            </div>
            <div class="post_title">
                <h1><?=$post['title']?></h1>
            </div>
            <div class="post_description">
                <p><?=$post['description']?></p>
            </div>
            <div class="post_date">
                <small><?=$post['created_at']?></small>
            </div>
        </div>

    <?php
}
