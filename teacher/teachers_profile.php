<?php
    session_start();
    
    if(isset($_POST["btn_save"]))
    {
        $user = $_SESSION["user"];
        $names = $_POST["names"];
        $gender = $_POST["gender"];
        $telephone= $_POST["telephone"];
        
        $address = $_POST["address"];
       
        $age = $_POST["age"];
        
        include("../db_connection/connection.php");
        
        $result3 = mysqli_query($con,"UPDATE teachers_info SET names='$names', gender='$gender',age='$age',class='$class',telephone='$telephone',address='$address', WHERE username='$user'");
        
       
        
        header('Location: profile.php');
    }

    if(!isset($_SESSION["user"]) || $_SESSION["type"] != 2)
    {
        header('Location: login.php');
    }
    else
    {
        $user = $_SESSION["user"];

        include("../db_connection/connection.php");

        $result1 = mysqli_query($con, "SELECT * FROM teachers_info WHERE username='$user'");
        $row1 = mysqli_fetch_row($result1);

       
    }   
?>

<html>


<style>
* {box-sizing: border-box;}

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #e9e9e9;
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
   
    background-color:#008000;
    color: white;
    padding: 10px 40px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
   
}

.topnav a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #2196F3;
  color: white;
}

.topnav .login-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
  border: none;
  width:120px;
}

.topnav .login-container button {
  float: right;
  padding: 6px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background-color: #555;
  color: white;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.topnav .login-container button:hover {
  background-color: green;
}

@media screen and (max-width: 600px) {
  .topnav .login-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .login-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #ccc;  
  }
}
</style>
<head>
        
        <title>Admin Panel | Lumbini College</title>

        <link href="../css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="../css/style.css" rel="stylesheet">
        <link rel="icon" href="../images/logo1.png" type="image/png">
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
                            <img src="../images/logo.png" alt="logo" />
                        </a>
                    </div>
                    <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.php"><b>Home</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="../admin/ac_admin.php"><b>Academic and Publications</b></a></li>
                            <li class="hidden-xs"></li>
                            <li><a href="../admin/logout.php"><b>logout</b></a></li>
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
                            <h1>View Teachers Details | Lumbini College</h1>
                            
                        </div>
                    </div>
                </div>
            </div>

    
   <body class="font">  
        
           <?php              
                        

                        if(!isset($_SESSION["user"]) || $_SESSION["type"] != 2)
                        {
                            header('Location: login.php');
                        }
                        else
                        {
                            $user = $_SESSION["user"];

                            include("connection.php");

                            $result1 = mysqli_query($con, "SELECT * FROM teachers_info WHERE username='$user'");
                            $row1 = mysqli_fetch_row($result1);

                            
                        } 

                        ?> 



    <table style="width:30%" border="0" cellspacing="15" cellpadding="0" class="tbl_bg" align="center">
       <colgroup><col width="100">
       <col width="180">

       

      </colgroup><tbody>

      <tr>
    <td style="text-align:center;color: #990033">Name</td>
    <td><input type="text" placeholder="Term...." style="width: 80%" name ="p1"></td>
    </tr>

    <tr>
    <td style="text-align:center;color: #990033">Gender</td>
    <td><input type="text" placeholder="Term...." style="width: 80%" name ="p1"></td>
    </tr>

    <tr>
    <td style="text-align:center;color: #990033">Comming Year</td>
    <td><input type="text" placeholder="Term...." style="width: 80%" name ="p1"></td>
    </tr>

    <tr>
    <td style="text-align:center;color: #990033">Telephone Number</td>
    <td><input type="text" placeholder="Term...." style="width: 80%" name ="p1"></td>
    </tr>

    <tr>
    <td style="text-align:center;color: #990033">Address</td>
    <td><input type="text" placeholder="Term...." style="width: 80%" name ="p1"></td>
    </tr>
      
      
      <tr><td></td>
      <td style="text-align:right">
        <input type="submit" value="View Details" style="background-color: #45a049;align:right" name="View">
     
      </td>
      </tr>
      </tbody></table>

    
    </form>
</div>
 


         
    <table style="width:30%" border="0" cellspacing="15" cellpadding="0" class="tbl_bg" align="center">
       <colgroup><col width="100">
       <col width="180">

       

      </colgroup><tbody>
      
      <tr><td style="text-align:center;color: #990033">Grade</td>
      <td>
      <select name="grade" style="width: 100%">
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
        <option value="10">10</option>
        <option value="11">11</option>
        
        
      </select>
       
      <tr><td style="text-align:center;color: #990033">Section</td>
      <td>
      <select name="section" style="width: 100%">
        <option value="A">A</option>
        <option value="B">B</option>
        <option value="C">C</option>
        <option value="D">D</option>
        
      </select>
      
      
      </td>
      </tr>

      <tr><td></td>
      <td style="text-align:right">
        <input type="submit" value="View" style="background-color: #45a049;align:right" name="View">
     
      </td>
      </tr>
      </tbody></table>

    
    </form>
</div>

        
        
        <script>
            
            function edit(){
               
                document.getElementById("names").disabled = false;
                document.getElementById("gender").disabled = false;
                document.getElementById("class").disabled = false;
               
                document.getElementById("telephone").disabled = false;
                document.getElementById("age").disabled = false;
                document.getElementById("address").disabled = false;
                document.getElementById("btn_save").disabled = false;
                document.getElementById("btn_cancel").disabled = false;
                document.getElementById("btn_edit").disabled = true;
                
            }
            
             function cancel(){
               
                document.getElementById("names").disabled = true;
                document.getElementById("class").disabled = true;
                document.getElementById("gender").disabled = true;
               
                document.getElementById("telephone").disabled = true;
                document.getElementById("age").disabled = true;
                document.getElementById("address").disabled = true;
                document.getElementById("btn_save").disabled = true;
                document.getElementById("btn_edit").disabled = false;
                document.getElementById("btn_cancel").disabled = true;

            }
            
            
             
            
        </script>
        <footer>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12 col-sm-12">
                        
                        <p class="copy-rights">Copyright by Lumbini College &reg;</p>
                    </div>
                </div>
            </div>
            
        

        <!-- footer ends here -->

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        </footer>

    </body>
</html>

