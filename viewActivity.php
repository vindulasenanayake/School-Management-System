

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
            <a href="te admin.php" class="nav-page">Previous </a>      
        </div> 

    <div class="container">
      <div class="row"><div class="col-5 center big card-heading-blue">Teacher Panel  -  Academic and Publications</div></div><br>
            
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2><b>UPLOADED ACTIVITIES</b></h2></div>
                    <div class="col-sm-4">
                        
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                
                        <th>File Name</th>
                        <th>Uploaded On</th>
                        <th>class</th>
                        <th>Delete</th>
                        <?php

                        include 'connection.php';
                        $sql ="SELECT id,file_name,uploaded_on,class FROM images WHERE types=1";
                        $result=$con->query($sql);

                        if($result -> num_rows > 0 ){
                          while ($row = $result -> fetch_array()) {


                           
                              ?>
                            <tr>
                            <td><?php echo $row['file_name']; ?></td>
                            <td><?php echo $row['uploaded_on']; ?></td>
                            <td><?php echo $row['class']; ?></td>
                            <td><a href="deleteImage.php?id=<?php echo $row['id']; ?>"><i class="fa fa-trash"></i></a></td> 
                            </tr>
                            <?php

                           
                           
                            
                          }
                          echo "</table>";
                        }
                        else {
                          echo "0 result";
                        }
                        $con -> close();


                            

                                

                        ?>
                   
               
              
            </table>
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
