<?php

namespace App\Posts;

use App\Core\AbstractModel;

class CommentsModel extends AbstractModel {

    public $commentid;
    public $postid;
    public $content;

}