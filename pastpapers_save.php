<?php

include 'connection.php';
    session_start();

    if(!isset($_SESSION["user"]) && $_SESSION["type"] != 3 )
    {
        header('Location: login.php');
    }
    else
    {

        $statusMsg = '';
        $targetDir = "uploads/";
        $grade = $_POST['grade'];
        $fileName = basename($_FILES["file"]["name"]);
        $targetFilePath = $targetDir . $fileName;
        $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

        if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
            // Allow certain file formats
            $allowTypes = array('jpg','png','jpeg','gif','pdf','PNG');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database
                    $insert = $con->query("INSERT into upload (file_name, uploaded_on,class) VALUES ('".$fileName."', NOW(),'$grade')");
                    if($insert){
                        $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                    }else{
                        $statusMsg = "File upload failed, please try again.";
                    } 
                }else{
                    $statusMsg = "Sorry, there was an error uploading your file.";
                }
            }else{
                $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
            }
        }
        // else{
        //     $statusMsg = 'Please select a file to upload.';
        // }

        // echo $statusMsg;
        
        
        
        
      
        
        
    } 
    if($statusMsg){

       echo '<script type="text/javascript"> window.alert("'.$statusMsg.'")</script>';

    }
    

        

?>
<!-- <script>
function myFunction(var1) {
  alert(var1);
}
</script> -->