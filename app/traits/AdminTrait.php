<?php
namespace app\traits;

use app\core\Auth;
use app\core\View;

trait AdminTrait
{
    private function isAdmin()
    {
        if (!Auth::isAdmin()) {
            View::error(404);
            exit();
        }
    }
}