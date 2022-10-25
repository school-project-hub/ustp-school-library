<?php
$id = $_GET['id'];
 require_once "..\config/index.php";
if (isset($id)) {
    $select  = " SELECT * FROM book WHERE id = '$id'";
    $result = $conn->query($select);
    
    while($row = $result->fetch_object()){
        echo 
            '<b>'.'Call No. : '.$row->call_no.'</b></br>'
            .'<b>'.'Author : '.$row->author.'</b></br>'
            .'<b>'.'Title : '.$row->title.'</b></br>';

    }

}     
?>   
