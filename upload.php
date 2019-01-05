<?php

// Getting user uploaded file

$file = $_FILES["file"];

// saving file in uploads folder

move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);

// Redirecting back to home

header("Location: index.php");
