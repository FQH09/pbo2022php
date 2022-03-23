<?php
namespace app\models;
use Core\Model;

class User extends \Core\Model {
    protected $id;
    protected $username;
    protected $password;
    public $email;

    public function login(){
        echo "input username dan password";
    }

    public function register(){
        echo "Petugas tidak perlu register";
    }
}