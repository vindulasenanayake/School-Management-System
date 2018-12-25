
<?php
    if(isset($_POST['search']))
    {
        $valuetoserach =$_POST['valuetosearch'];
        $query ="SELECT * FROM `student_info` WHERE CONCAT(`username`, `names`, `address`, `class`, `telephone`, `gender`, `age`)LIKE'%".valuetoserach."";
        $search_result =filterTable($query);

    }
    else
    {
        $query ="SELECT * FROM 'student_info'";
        $search_result = filterTable($query);
    }
    
    function filterTable($query)
    {   
        $connect = mysqli_connect("localhost","root","","school_mgt_system");
        $filter_Result = mysqli_query($connect,$query);
        return $filter_Result;
    }
?>

<html>
    <head>
        
    </head>
        <title>Studnt Profile</title>
    
    
    <body>  
        <form>
        
        
            <input type ="text" name ="valuetosearch" placeholde ="index no"><br><br>
            <input type="submit" name="search" value="filter"><br><br>

            

            <table>
                <tr>
                    <th>Name</th>
                    <th>Age</th>
                    <th>Class</th>
                    <th>Gender</th>
                </tr>
                <?php while($row = mysqli_fetch_array($search_result))
                    ?>
                <tr>
                    <td><?php echo $row['username'];?></td>
                    <td><?php echo $row['age'];?></td>
                    <td><?php echo $row['class'];?></td>
                    <td><?php echo $row['gender'];?></td>
           
                </tr>
            <?php  ?> 
            </table>
            </form>
    
     
       
    </body>
</html>
