<?php

namespace App\Posts;

use App\Core\AbstractController;
use App\Core\Container;

class PostsController extends AbstractController {

    public function __construct(
        PostsRepository $postsRepository,
        CommentsRepository $commentsRepository){
        $this->postsRepository = $postsRepository;
        $this->commentsRepository = $commentsRepository;
    }


    public function allPosts(){

        $posts = $this->postsRepository->fetchAll();

        $this->render("posts/allposts", [
            'posts' => $posts
        ]);
    }

    public function singlePost(){
        $postid = $_GET['postid'];
        if (isset($_POST['CommentText'])){
            $content = $_POST['CommentText'];
            $this->commentsRepository->insertCommentsByPost($postid,$content);
        }

        $post = $this->postsRepository->fetchOne($postid);
        $comments = $this->commentsRepository->fetchAllBy($postid);

        $this->render("posts/singlepost", [
            'post' => $post,
            'comments' =>$comments
        ]);
    }
}
