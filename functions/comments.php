<?php

$host = 'localhost';
$database = 'newsbase'; 
$user = 'root'; 
$password = 'root'; 



$newsId = (int) $_POST['id_news'];
$username = $_POST['username'];
$comment_text = $_POST['comment_text'];
$comment_date = $_POST['comment_date'];
 

   
    $query ="INSERT INTO user_comments (id_post,username,comment_text,comment_date)  VALUES ('$newsId', '$username', '$comment_text', '$comment_date')";
    $link = mysqli_connect($host, $user, $password, $database);
    $result = mysqli_query($link, $query); 

    $query ="UPDATE news SET `number_of_comments`= `number_of_comments` + 1 WHERE  `id` = $newsId";
    $result = mysqli_query($link, $query); 

    mysqli_close($link);

?>