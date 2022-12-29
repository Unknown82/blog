<?php

namespace App\Posts;
use App\Core\AbstractModel;

class PostsModel extends AbstractModel {

    public $postid;
    public $title;
    public $content;


    public function showShortContent(){
        return substr("$this->content", 0, 200) . "...";
    }
}
