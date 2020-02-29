<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>test</title>
    <script src="/public/js/jQuery.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="/public/css/main.css">
</head>
<body>
<header>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="/">TEST PROJ</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/posts">Posts</a>
                    </li>
                    <?php
                    if ($user) {
                        ?>
                        <li class="nav-item justify-content-end">
                            <a class="nav-link" href="/profile"><?= $user['email'] ?></a>
                        </li>
                        <?php
                        if (\app\core\Auth::isAdmin()) {
                            echo <<<'AdminPage'
                            <li class="nav-item">
                                <a class="nav-link" href="/admin">Admin Page</a>
                            </li>
AdminPage;
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/user/logout">logout</a>
                        </li>
                        <?php
                    } else {

                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="/login">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/register">Register</a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </nav>
    </div>
</header>
<section>
    <div class="container ">
        <div class="main">
            <?php
            echo $content;
            ?>
        </div>

    </div>
</section>
</body>
</html>