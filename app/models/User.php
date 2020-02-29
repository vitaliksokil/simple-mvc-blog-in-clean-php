<?php


namespace app\models;


use app\core\Model;

class User extends Model
{

    public function login(array $userData){
        $query = 'SELECT * FROM users WHERE email = ?';
        $statement = self::$db->prepare($query);
        $statement->execute([$userData['email']]);
        $user = $statement->fetch(\PDO::FETCH_ASSOC);
        if($user){
            if($userData['email'] == $user['email']){
                if(md5($userData['password']) == $user['password']){
                    $_SESSION['user'] = $user;
                    return 'Logged in';
                }else{
                    return "INCORRECT PASSWORD";
                }
            }else{
                return "INCORRECT EMAIL!!!";
            }
        }
    }
    public function logout(){
        if($_SESSION['user']){
            unset($_SESSION['user']);
        }
    }
}