<?php
    session_start();

    if(!isset($_SESSION["user"]) && $_SESSION["type"] != 2 )
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        // include("connection.php");

        // $result1 = mysqli_query($con, "SELECT * FROM upload WHERE username='$user'");
        // $row1 = mysqli_fetch_row($result1); 
                
        // $result2 = mysqli_query($con, "SELECT * FROM upload WHERE username='$user'");
        // $row2 = mysqli_fetch_row($result2);
        
        // $_SESSION["real_name"] = $row1[1];
        // $_SESSION["pic_path"] = $row1[4];
        
include 'connection.php';
$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        echo "<script>console.log(`$targetFilePath`)</script>";
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database

            $insert = $db->query("INSERT into upload (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
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
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

        
    }   
?>

<?php
// Include the database configuration file

?>

<html>
    <head>
        
        <title>Admin Panel | Lumbini College</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/logo1.png" type="image/png">
</head>
    <body>
        <header>
            <div class="container">
                <nav class="navbar navbar-inverse header">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><b>Home</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="ac_admin.php"><b>Academic and Publications</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="logout.php"><b>logout</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="te admin.php"><b>Previous</b> </a></li>
                             <li class="hidden-xs"></li>  
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

       <section>

            <div class="banner-home">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h1>Teacher Panel | Lumbini College</h1>
                            
                        </div>
                    </div>
                </div>
            </div>

    
    <body class="font">  

        <div>
            <form action="upload_activities.php" method="post" enctype="multipart/form-data">
            Select Image File to Upload:
            <input type="file" name="file">
            <input type="submit" name="submit" value="Upload">
        </form>  
 
        </div> 

        
        <?php include("footer.php"); ?>
    </body>
</html>

