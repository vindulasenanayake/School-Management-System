
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
  width: 70%;
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
  width: 70%;
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

 .t-text {
  text-align: center;
}

.t-text h3 {
  font-weight: 700;
  text-transform: uppercase;
  color: #3e3e28;
  padding: 60px 0;
  font-size: 50px
}   


.bgimg {
    background-image: url('images/Books.jpg');
    height: 600px;
    position: relative;
    margin-top: -150px;
    padding-top: 345px;
    text-align: center;
    background-repeat: no-repeat;
    background-size: 100% 100%;
}
table {
  border-collapse: collapse;
  width: 100%;
  color:  #588c7e;
  font-family: monospace;
  font-size: 25px;
  text-align: left;
}
th{
  background-color: #b8b894;
  color: white;
}
</style>

<head>
  <link href="css/style1.css" rel="stylesheet" type="text/css">
        <title> Admin panel | Lumbini College! </title>
        <link rel="icon" href="images/logo1.png" type="image/png">

      <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="css/style.css" rel="stylesheet">
        <link rel="icon" href="images/logo1.png" type="image/png">

</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <body>
        
            <div class="nav-fixed font">
            <a href="logout.php"> <img src="images/logo.png"></a>

               
            <a href="logout.php" class="nav-page"> Logout </a> 
            <a href="student_index.php" class="nav-page">Previous </a>      
        </div> 

    <div class="container">
      <div class="row"><div class="col-5 center big card-heading-blue">Student  -  Academic and Publications</div></div><br>
            
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>TEACHERS POST NOTICES</b></h2></div>
                    <div class="col-sm-4">
                    </div>
                </div>
            </div>
        <div class="upload">



        <form action="viewnn.php" method="post" >
        
           

            <div class="file-upload">
                
              
              <select class="class-upload-btn" name="grade">
                      <option value="6">Grade6</option>
                      <option value="7">Grade7</option>
                      <option value="8">Grade8</option>
                      <option value="9">Grade9</option>
                      <option value="10">Grade10</option>
                      <option value="11">Grade11</option>
             </select>
             <button class="file-upload-btn" type="submit" ">SHOW NOTICES </button>

             </div>
        </form> 
        </div>
    </div>
   </div>



   
            
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

<!--   header('Content-type: application/pdf');
  header('Content-Disposition: inline; filename="' . $filename . '"');
  header('Content-Transfer-Encoding: binary');
  header('Accept-Ranges: bytes'); -->