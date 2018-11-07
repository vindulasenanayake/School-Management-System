<!DOCTYPE html>
<html>
<head>
	<title>profile.php|Lumbini College</title>
</head>
<body>
	<div class='center'>
    	<form action="admin.php" method="POST">
        	<input type="text" required name="user_name" placeholder="Type username">
            <button type="submit" name="submit_view_user" class="btn btn-blue btn-large btn-wide">Search</button>
        </form>
    </div>

<div class="row" id="cust_table" style="display:none">


                
                <?php
                     if(isset($_POST["submit_view_user"]))
                    {
                        $username = $_POST["user_name"];
                        include("connection.php");  
                        $res = mysqli_query($con, "SELECT type FROM user_login WHERE username='$username' ");
                        $row = mysqli_fetch_row($res);
                        $res2 = mysqli_query($con, "SELECT * FROM student_info WHERE username='$username' ");
                            $row2 = mysqli_fetch_row($res2);
                            $display_name = $row2[1]." ".$row2[2]." ".$row2[3];
                            $display_type = "Student";

                            echo "<script> document.getElementById('cust_table').style.display='block'; </script>";


                       
                        
                     
                                     
                    }
                ?>
                
                    <div class="col-5 center">
                        <div class="card">
                            <h2>User Details</h2>
                        <table class="table table-striped center">
                            <tr><th>Index Number</th><th>User Type</th><th>email</th><th>telephone</th></tr>
                            <tr><td><?php echo $username;  ?></td></td><td><?php echo $display_type; ?></td></tr>
                        </table>

                        </div>
                    </div>
            </div>
        </div> 

</body>
</html>