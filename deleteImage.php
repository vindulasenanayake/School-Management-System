<?php
    include 'connection.php';
    
    if (isset($_GET['id']) && is_numeric($_GET['id']))
    {
        // get the 'id' variable from the URL
        $id = $_GET['id'];
        echo $id;
        $sql = "DELETE FROM images WHERE id = $id";
        $query = mysqli_query($con, $sql);
       
        header("Location: viewActivity.php");
    }
    ?>
