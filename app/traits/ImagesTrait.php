<?php


namespace app\traits;


use app\core\View;

trait ImagesTrait
{
    private function uploadImage(array $imageInfo, string $path = '/')
    {
        $errors = array();
        $allowedExt = array('jpg', 'jpeg', 'png', 'gif');
        $fileName = $imageInfo['name'];
        $explodedFileName = explode('.', $fileName);
        $fileExt = strtolower(end($explodedFileName));
        $fileSize = $imageInfo['size'];
        $fileTmp = $imageInfo['tmp_name'];

        $fileName = uniqid();
        if (in_array($fileExt, $allowedExt) === false) {
            $errors[] = 'Extension not allowed';
        }
        if ($fileSize > 2097152) {
            $errors[] = 'File size must be under 2mb';

        }
        if (empty($errors)) {

            if (move_uploaded_file($fileTmp, "public/images/$path/$fileName.$fileExt")) ;
            {
                return $fileName.".$fileExt";
            }
        } else {
            foreach ($errors as $error) {
                View::message($error);
            }
        }
    }
}