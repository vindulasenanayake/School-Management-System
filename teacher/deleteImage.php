<?php
    include '../db_connection/connection.php';
    include'viewActivity.php';
   if (isset($_GET['id']) && is_numeric($_GET['id']))
{
    // get the 'id' variable from the URL
    $id = $_GET['id'];
    $name = "SELECT name FROM images WHERE id=$id";
    $name=$name -> fetch_assoc($name);
    $name=$name['file_name'];

    if ($stmt = $con->prepare("DELETE FROM images WHERE id = ? LIMIT 1"))
    {
        $stmt->bind_param("i",$id);
        unlink("../uploads/" . $name);

        $stmt->execute();
        $stmt->close();
    }

    else
    {
        echo "ERROR: could not prepare SQL statement.";
    }
    $con->close();

    
    header("Location: images_delete.php");
}
?>
$sql ="SELECT id,file_name,uploaded_on,class FROM images";
                        $result=$con->query($sql);
                        if($result -> num_rows > 0 ){
                          while ($row = $result -> fetch_array()) {