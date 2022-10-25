<?php
$id = $_GET['id'];
 require_once "..\config/index.php";
if (isset($id)) {
    $select2  = " SELECT `id`, `academic`, CONCAT(`f_name`,' ', `m_name`,' ', `l_name`) as student, `school_id`, `course`, `phone`, `email` FROM borrower WHERE id = '$id'";
    $result2 = $conn->query($select2);
    
    while($row2 = $result2->fetch_object()){
        echo 
            '<b>'.'Academic : '.$row2->academic.'</b></br>',
            '<b>'.'School ID : '.$row2->school_id.'</b></br>',
            '<b>'.'Name : '.$row2->student.'</b></br>',
            '<b>'.'Course : '.$row2->course.'</b></br>',
            '<b>'.'Phone : '.$row2->phone.'</b></br>',
            '<b>'.'Email : '.$row2->email.'</b></br>';
    }
}     
?>   
