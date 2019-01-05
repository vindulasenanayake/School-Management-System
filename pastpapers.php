
<!-- <script>
function myFunction(var1) {
  alert(var1);
}
</script> -->


<html>




<head>
        
        <title>Admin Panel | Lumbini College</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style2.css" rel="stylesheet" type="text/css">
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
                            <li><a href="ac_admin.php"><b>Previous</b> </a></li>
                             <li class="hidden-xs"></li>  
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </header>

       
    <div class="upload">
        <form action="uploadPastPapersPhp.php" method="post" enctype="multipart/form-data" id="form1" runat="server">
        
            <!-- <div> -->
 <!--            <input type="file" name="file" id="imgInp"> -->
            
           
            <!-- </div> -->

            <div class="file-upload">
                
              <button class="file-upload-btn" type="button" onclick="$('.file-upload-input').trigger( 'click' )">Select File to Upload </button>
              <select class="class-upload-btn" name="grade">
                     
                      <option value="10">Grade 10</option>
                      <option value="11">Grade 11</option>
                      <option value="11">Grade 12</option>
                      <option value="11">Grade13</option>
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
