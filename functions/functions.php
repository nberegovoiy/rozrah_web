<?php

$host = 'localhost';
$database = 'newsbase'; 
$user = 'root'; 
$password = 'root'; 


 




function getNewsItems($limit, $id) {
  
    global  $host;
    global $database ;
    global $user;
    global $password ;
    global $link ;

    if($id){
        $where="AND id = $id"; 
    }


    $query ="SELECT * FROM news WHERE type='news' $where ORDER BY 'id' DESC LIMIT $limit";
    $link = mysqli_connect($host, $user, $password, $database);

    $result = mysqli_query($link, $query); 
    mysqli_close($link);
    
    if(!$id){
        return resultToArray($result);
    }
    else{
        return $result->fetch_assoc();
    }
}

function resultToArray ($result){
    $array = array ();

    while (($row = $result->fetch_assoc()) != false){
        $array[] = $row;
    }
       
    return $array;
}

 


?>