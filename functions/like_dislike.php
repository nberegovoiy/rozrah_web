<?php

$host = 'localhost';
$database = 'newsbase'; 
$user = 'root'; 
$password = 'root'; 


//UPDATE `test_db`.`news` SET `$fieldName`= `$fieldName` + 1 WHERE  `id` = $newsId
//SELECT * FROM news WHERE type='news' $where ORDER BY 'id' DESC LIMIT $limit


$newsId = (int) $_POST['id_news'];
$type = $_POST['type'];
 




    if($type == 'like') $fieldName = 'number_of_likes'; 
    if($type == 'dislike') $fieldName = 'number_of_dislikes';
   
    $query ="UPDATE news SET `$fieldName`= `$fieldName` + 1 WHERE  `id` = $newsId";
    $link = mysqli_connect($host, $user, $password, $database);

    $result = mysqli_query($link, $query); 
    mysqli_close($link);

?>