
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

    if($receiver == "All"){
      $sql = "SELECT * FROM `notice`  ORDER BY `notice`.`dateTime` DESC";
    }
    else{
      $sql = "SELECT * FROM `notice` WHERE receiver ='".$receiver."' OR receiver = 'All' ORDER BY `notice`.`dateTime` DESC";
    }

    $result = $conn->query($sql);
    $getResult= array();

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          $noticeResult= array(
              'id' => $row['id'],
              'dateTime' => $row['dateTime'],
              'content' => $row['content'],
              'title' => $row['title'],
              'username' => $row['username'],
              'writer' => $row['writer'],
              'receiver' => $row['receiver'],

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
