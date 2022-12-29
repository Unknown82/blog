<?php

namespace App\Posts;
use App\Core\AbstractRepository;
use PDO;

class PostsRepository extends AbstractRepository {

    public function getTableName(){
        return "posts";
    }

    public function getModel(){
        return PostsModel::class;
    }

    public function getColumnID(){
        return "postid";
    }

    public function getColumnUSERNAME(){
        return "username";
    }

    public function getColumnUSERID(){
        return "userid";
    }

}