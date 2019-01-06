
  <?php
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "school_mgt_system";
    $receiver = $_POST["receiver"];



    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql;

    $sql = "SELECT * FROM `upload` ";
    

    $result = $conn->query($sql);
    $getResult= array();

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          $noticeResult= array(
              'file_name' => $row['file_name'],
              'uploaded_on' => $row['uploaded_on'],
              'class' => $row['class'],
              
              
             );
            array_push($getResult, $noticeResult);
        }
        echo json_encode($getResult);
        return;
    } else {
        echo $sql;
    }

    $conn->close();
  ?>
