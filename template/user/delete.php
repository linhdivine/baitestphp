<?php
    isset($_GET['id']) ? $id  = $_GET['id'] : $id ='';
    if ($_GET['user'] == 'delete' && $_GET['id'] == $id){
        delete_user($id);
        header('location:index.php');
    }
?>