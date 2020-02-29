<?php
require_once 'app/views/admin/includes/adminHeader.php';
if (isset($_SESSION['successMessage'])) {
    // todo then todo delete
    ?>
        <div class="alert alert-success" role="alert">
            <?=$_SESSION['successMessage'];unset($_SESSION['successMessage'])?>
        </div>
    <?php
}

