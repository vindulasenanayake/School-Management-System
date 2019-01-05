<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	include 'connection.php';
	include 'studentnotice.php';

    $class = $_POST['grade']; // ID of entry you wish to view.  To use this enter "view.php?id=x" where x is the entry you wish to view. 

    $query = "SELECT file_name FROM images where types = 2 && class= $class"; //Find the file, pull the filecontents and the filetype
    $result = mysqli_query($con,$query);    // run the query

    $row = $result -> fetch_array(); // pull the first row of the result into an array(there will only be one)
    
       // $data = $row[0];    // First bit is the data
        //$type = $row[1]; 
        $name = $row['file_name'];  
        //echo $name; // second is the filename
        $file = 'uploads/'.$name;

    // header('Content-Type: application/pdf');
    // header('Content-Disposition: inline; filename="'.$name.'"');
    // header('Content-Transfer-Encoding:binary');
    // header('Accept-Ranges:bytes');
    // header("Content-Length: " . filesize($file));
    // readfile($file);

    
?>
<div class="container">
	<h1><?php echo($name)?></h1>
	<embed src="<?php echo($file)?>" type="application/pdf" width="100%" height="600px"/>
		
</div>
</body>
</html>>

