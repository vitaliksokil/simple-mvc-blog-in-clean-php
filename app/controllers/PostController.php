<?php


namespace app\controllers;


use app\core\Controller;
use app\core\View;
use app\models\Post;
use app\traits\AdminTrait;
use app\traits\ImagesTrait;
use app\traits\UrlTrait;

class PostController extends Controller
{
    use AdminTrait, ImagesTrait, UrlTrait;

    private $post;

    public function __construct()
    {
        parent::__construct();
        $this->post = new Post();
    }
    public function show(){
        $id = $this->getIdFromUrl();
        $post = $this->post->find($id);
        $this->view->showPage('post/post',['post' => $post]);
    }
    public function showAllPosts(){
        $posts = $this->post->all();
        $this->view->showPage('post/allPosts',['posts' => $posts]);
    }
    public function create()
    {
        $this->isAdmin();
        $postData = $_POST['post'];
        if (isset($_POST['post']) && isset($_FILES['img'])) {
            if ($fileName = $this->uploadImage($_FILES['img'], 'posts')) {
                $postData['img'] = $fileName;
                if ($this->post->create($postData)) {
                    $_SESSION['successMessage'] = 'Successfully added!!!';
                    Controller::redirect('/admin');
                }
            }
        }
    }

    public function update()
    {
        $this->isAdmin();
        $id = $this->getIdFromUrl();
        if (isset($_POST['post'])) {
            $newData = $_POST['post'];
            // if there is new image
            if($_FILES['img']['name'] !== ''){
                $imgName = $this->post->find($id)['img'];
                unlink('public/images/posts/'.$imgName); // delete old one
                $newImg = $this->uploadImage($_FILES['img'],'posts'); // upload new
                $newData['img'] = $newImg; //change img field in db
            }
            if($this->post->update($id, $newData)){
                $_SESSION['successMessage'] = 'Successfully updated!!!';
                Controller::redirect('/admin');
            };
        } else {
            View::error(500);
        }
    }
    public function delete(){
        $this->isAdmin();
        $id = $this->getIdFromUrl();
        $imgName = $this->post->find($id)['img'];
        if(unlink('public/images/posts/'.$imgName)){
            if($this->post->delete($id)){
                $_SESSION['successMessage'] = 'Successfully deleted!!!';
                Controller::redirect('/admin');
            }
        }

    }

// admin pages
    public function adminPostCreate()
    {
        $this->isAdmin();

        $this->view->showPage('admin/post/create');
    }

    public function adminPostUpdate()
    {
        $this->isAdmin();
        $id = $this->getIdFromUrl();
        $post = $this->post->find($id);
        $this->view->showPage('admin/post/update', ['post' => $post]);

    }

    public function adminPostAll()
    {
        $this->isAdmin();
        $posts = $this->post->all();
        $this->view->showPage('admin/post/all', ['posts' => $posts]);
    }
}