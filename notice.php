<?php

include 'connection.php';
    session_start();

    if(!isset($_SESSION["user"]) && $_SESSION["type"] != 2 )
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
            $allowTypes = array('jpg','png','jpeg','gif','pdf');
            if(in_array($fileType, $allowTypes)){
                // Upload file to server
                if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                    // Insert image file name into database
                    $insert = $con->query("INSERT into images (file_name, uploaded_on,class) VALUES ('".$fileName."', NOW(),'$grade')");
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


<html>


<style>
input[type=text], select {
    padding: 8px 15px;
    margin: 5px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}



input[type=submit] {
   
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
   
}

/*upload {
    width:100%;
    border-radius: 5px;
    background-color: #ffffff;*/
    
}
body {
  font-family: sans-serif;
  background-color: #eeeeee;
}

.file-upload {
  background-color: #ffffff;
  width: 800px;
  margin: 20px auto;
  padding: 20px;
}

.file-upload-btn {
  width: 100%;
  margin: 10px;
  color: #fff;
  background: #1FB264;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #15824B;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.file-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.file-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}
.class-upload-btn {
  width: 100%;
  margin: 10px;
  color: #fff;
  background:  #e6e600;
  border: none;
  padding: 10px;
  border-radius: 4px;
  border-bottom: 4px solid #b3b300;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

/*.class-upload-btn:hover {
  background: #1AA059;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}*/

.class-upload-btn:active {
  border: 0;
  transition: all .2s ease;
}

.file-upload-content {
  display: none;
  text-align: center;
}

.file-upload-input {
  position: absolute;
  margin: 0;
  padding: 0;
  width: 100%;
  height: 100%;
  outline: none;
  opacity: 0;
  cursor: pointer;
}

.image-upload-wrap {
  margin-top: 20px;
  border: 4px dashed #1FB264;
  position: relative;
}

.image-dropping,
.image-upload-wrap:hover {
  background-color: #1FB264;
  border: 4px dashed #ffffff;
}

.image-title-wrap {
  padding: 0 15px 15px 15px;
  color: #222;
}

.drag-text {
  text-align: center;
}

.drag-text h3 {
  font-weight: 100;
  text-transform: uppercase;
  color: #15824B;
  padding: 60px 0;
}
.t-text {
  text-align: center;
}

.t-text h3 {
  font-weight: 700;
  text-transform: uppercase;
  color: #ffffff;
  padding: 60px 0;
  font-size: 50px
}

.file-upload-image {
  max-height: 600px;
  max-width: 600px;
  margin: auto;
  padding: 20px;
}

.remove-image {
  
  width: 49%;
  margin: 0;
  color: #fff;
  background: #cd4535;
  border: none;
  padding: 10px;
  border-radius: 4px;
  transition: all .2s ease;
  outline: none;
  text-transform: uppercase;
  font-weight: 700;
}

.remove-image:hover {
  background: #c13b2a;
  color: #ffffff;
  transition: all .2s ease;
  cursor: pointer;
}

.remove-image:active {
  border: 0;
  transition: all .2s ease;
}
.bgimg {
    background-image: url('images/banner.jpg');
    height: 600px;
    position: relative;
    margin-top: -150px;
    padding-top: 345px;
    text-align: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
</style>

<head>
        
        <title>Admin Panel | Lumbini College</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/logo1.png" type="image/png">
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

            <div class="bgimg" >
                <div class="container">
                    <div class="row">
                        <div class="t-text">
                            <h3>Notice Upload Terminal</h3>
                            
                        </div>
                    </div>
                </div>
            </div>

   </section>

    <div class="upload">
        <form action="upload_activities.php" method="post" enctype="multipart/form-data" id="form1" runat="server">
        
            <!-- <div> -->
 <!--            <input type="file" name="file" id="imgInp"> -->
            
           
            <!-- </div> -->

            <div class="file-upload">
                
              <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Select Notice File to Upload </button>
              <select class="class-upload-btn" name="grade">
                      <option value="6">Grade6</option>
                      <option value="7">Grade7</option>
                      <option value="8">Grade8</option>
                      <option value="9">Grade9</option>
                      <option value="10">Grade10</option>
                      <option value="11">Grade11</option>
                    </select>


              <div class="image-upload-wrap">
                <input class="file-upload-input" type='file' name="file" id="imgInp" onchange="readURL(this);" accept="image/*" />
                <div class="drag-text">
                  <h3>Drag and drop a file or select add Image</h3>
                </div>
              </div>
              <div class="file-upload-content">
                <img class="file-upload-image" src="#" alt="your image" />
                <div class="image-title-wrap">
                  
                  
              <button type="button" onclick="removeUpload()" class="remove-image">Remove </button>

              <input type="submit" name="submit" value="Upload" class="remove-image">
             
    </div>
  </div>
</div>
        </form>  
     
    </div>

<script class="jsbin" src="https://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript">
function readURL(input) {
  if (input.files && input.files[0]) {

    var reader = new FileReader();

    reader.onload = function(e) {
      $('.image-upload-wrap').hide();

      $('.file-upload-image').attr('src', e.target.result);
      $('.file-upload-content').show();

      $('.image-title').html(input.files[0].name);
    };

    reader.readAsDataURL(input.files[0]);

  } else {
    removeUpload();
  }
}

function removeUpload() {
  $('.file-upload-input').replaceWith($('.file-upload-input').clone());
  $('.file-upload-content').hide();
  $('.image-upload-wrap').show();
}
$('.image-upload-wrap').bind('dragover', function () {
        $('.image-upload-wrap').addClass('image-dropping');
    });
    $('.image-upload-wrap').bind('dragleave', function () {
        $('.image-upload-wrap').removeClass('image-dropping');
});

</script>>



<!--     <body class="font">   -->

        

<footer>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        
                        <p class="copy-rights">Copyright by Lumbini College &reg;</p>
                    </div>
                </div>
            </div>
            
        
 </footer>

    </body>
</html>
