
  <?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "school_mgt_system";

    $id = $_POST["id"];



    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql ="DELETE FROM `notice` WHERE `id` = '".$id."'";


    if ($conn->query($sql) === TRUE) {
        $getResult= "DONE!";
    } else {
        $getResult= "Error";
    }
    echo json_encode($getResult);
    $conn->close();
  ?>
