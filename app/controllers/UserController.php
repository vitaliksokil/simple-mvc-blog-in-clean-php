<?php


namespace app\controllers;


use app\core\Auth;
use app\core\Controller;
use app\core\View;
use app\models\User;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {
        parent::__construct();
        $this->user = new User();
    }

    public function registerUser()
    {
        if (!$_POST['email'] || !$_POST['password']) {
            View::error(500);
        } else {
            try {
                $userData = [
                    'email' => $_POST['email'],
                    'password' => md5($_POST['password']),
                ];
                if($this->user->create($userData)){
                    Controller::redirectWithMessage('/login','Successfully registered!!!');
                }else{
                    View::error(500);
                }
            } catch (\Exception $exception) {
                View::error(500);
            }
        }
    }
    public function loginUser()
    {
        if (!$_POST['email'] || !$_POST['password']) {
            View::error(500);
        } else {
            $userData = [
                'email'=>$_POST['email'],
                'password'=>$_POST['password'],
            ];
            if($this->user->login($userData) == 'Logged in'){
                Controller::redirect('/');
            }else{
                View::error(500);
            }
        }
    }
    public function logoutUser(){
        $this->user->logout();
        Controller::redirect('/');
    }
}