<?php
    require_once("db_connect.php");
    session_start();
    
    if( isset($_GET["current_user"]) && $_GET["current_user"] && isset($_SESSION["weird_session_name"]["Email"]) ){
        
        $singleUserQuery = "SELECT a.Question, b.Answer FROM _Question a INNER JOIN _Vote b ON b.Q_id = a.id;";
        
        $result = $conn->query($singleUserQuery);
        
        if( $result->num_rows > 0){
            $currentUserRow = $result->fetch_assoc();
            
            $data = [
                "code" => 200, 
                "message" => "success",
                "data" => $currentUserRow
                ];
        }else{
            $data = [
                "code" => 800, 
                "message" => "error",
                "data" => "No results"
                ];
        }
    }
    
    $json_response = json_encode($data);
    $conn->close();
    echo $json_response;
    
?>