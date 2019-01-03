
  <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password ="";
    $dbname = "school_mgt_system";

    $title = $_POST["title"];
    $conetent= $_POST["content"];
    $writer= $_POST["writer"];
    $receiver= $_POST["receiver"];
    $user = $_SESSION["user"] ;



    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    $sql = "INSERT INTO `notice`( `content`, `title`, `username`, `writer`, `receiver`) VALUES ('".$conetent."','".$title."','".$user."','".$writer."','".$receiver."')";


    if ($conn->query($sql) === TRUE) {
      $sql = "SELECT id FROM notice ORDER BY id DESC LIMIT 1";
      $result = $conn->query($sql);


      if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
              $getResult =$row['id'];

          }
          echo json_encode($getResult);
          return;
      } else {
          echo "0 results";
      }
    } 

    else {
        $getResult= "Error";
    }
    echo json_encode($getResult);
    $conn->close();
  ?>
