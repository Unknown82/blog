<?php

namespace App\Core;
use App\Home\HomeController;
use App\Home\HomeRepository;
use App\Posts\CommentsRepository;
use App\Posts\PostsController;
use App\Posts\PostsRepository;
use App\User\LoginService;
use App\User\UserRepository;
use App\User\UserController;

use PDO;

class Container
{

    private $instance = [];
    private $buildguide = [];

    public function __construct()
    {
        $this->buildguide = [
            'postsController' => function(){
                return new PostsController(
                    $this->make('postsRepository'),
                    $this->make('commentsRepository'));
            },
            'postsRepository' => function () {
                return new PostsRepository($this->make("pdo"));
            },
            'commentsRepository' => function(){
                return new CommentsRepository($this->make("pdo"));
            },



            'homeController' => function(){
                return new HomeController($this->make('homeRepository'));
            },
            'homeRepository' => function () {
                return new HomeRepository($this->make("pdo"));
            },



            'loginService' => function() {
                return new LoginService($this->make('userRepository'));
            },



            'userController' => function(){
                return new UserController($this->make('loginService'));
            },
            'userRepository' => function () {
                return new UserRepository($this->make("pdo"));
            },

            'pdo' => function () {
                $pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
                $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
                return $pdo;
            }
        ];
    }


    public function make($name)
    {
        if (!empty($this->instance[$name])) {
            return $this->instance[$name];
        }
        if (isset($this->buildguide[$name])) {
            $this->instance[$name] = $this->buildguide[$name]();
        }
        return $this->instance[$name];
    }


}




//    private $pdo;
//    private $postsRepository;
//
//    public function getPDO(){
//
//        if (!empty($this->pdo)){
//            return $this->pdo;
//        }
//        $this->pdo = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
//        $this->pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
//        return $this->pdo;
//    }
//
//    public function getPostsRepository(){
//        if (!empty($this->postsRepository)){
//            return $this->postsRepository;
//        }
//        $this->postsRepository = new PostsRepository($this->getPDO());
//
//        return $this->postsRepository;
//    }