<?php


namespace app\controllers;


use app\core\Auth;
use app\core\Controller;
use app\core\View;
use app\traits\AdminTrait;

class PageController extends Controller
{
    use AdminTrait;

    public function index()
    {
        $this->view->showPage('home');
    }

    public function about()
    {
        $this->view->showPage('about');
    }

    public function login()
    {
        $this->view->showPage('login');
    }

    public function register()
    {
        $this->view->showPage('register');
    }

    public function profile()
    {
        if(Auth::isAuth()){
            $this->view->showPage('profile/profile');
        }else{
            View::error(404);
        }

    }

    public function admin()
    {
        $this->isAdmin();

        $this->view->showPage('admin/admin');

    }

}