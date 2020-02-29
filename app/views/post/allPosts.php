<?php
if (isset($posts)) {
    foreach ($posts as $post) {
        ?>

        <a class="card mb-3" href="/post/<?=$post['id']?>">
            <div class="row no-gutters">
                <div class="col-md-2">
                    <img src="/public/images/posts/<?=$post['img']?>" class="card-img" alt="...">
                </div>
                <div class="col-md-10">
                    <div class="card-body">
                        <h5 class="card-title"><?=$post['title']?></h5>
                        <p class="card-text"><?=$post['description']?></p>
                        <p class="card-text"><small class="text-muted">Created at: <?=$post['created_at']?></small></p>
                    </div>
                </div>
            </div>
        </a>


        <?php
    }
}