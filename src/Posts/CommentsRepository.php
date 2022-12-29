<?php

namespace App\Posts;

use App\Core\AbstractRepository;
Use PDO;

class CommentsRepository extends AbstractRepository {

public function getTableName(){
return "comments";
}

public function getModel(){
return CommentsModel::class;
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


public function insertCommentsByPost($postid, $content){
$table = $this->getTableName();
$statement = $this->pdo->prepare("INSERT INTO `$table` ( `postid`, `content`) VALUES (:postid, :content);");
$statement->execute([
'postid' => $postid,
'content' => $content
]);
}

}