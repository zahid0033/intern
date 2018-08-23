<?php

require "config.php";


session_start();

$data = array(
        ':to_user_id' => $_POST['to_user_id'],
        ':from_user_id' => $_SESSION['user_id'],
        ':chat_message' => $_POST['chat_message'],
        ':status' => '1'
            );


$query = "insert into chat_message(to_user_id, from_user_id, chat_message) values (:to_user_id, :from_user_id, :chat_message)";

$statement = $conn ->prepare($query);
if($statement -> execute($data)){
    
    include "chat_functions.php";
    echo fetch_user_chat_history($_SESSION['user_id'],$_POST['to_user_id']);
}


?>