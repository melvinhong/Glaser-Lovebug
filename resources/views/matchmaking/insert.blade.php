<?php
$username = $_POST['username'];
$age = $_POST['age'];
$gender = $_POST['gender'];
$location = $_POST['location'];
$haircolor = $_POST['haircolor'];
$eyecolor = $_POST['eyecolor'];
$skincolor = $_POST['skincolor'];
$hobbies = $_POST['hobbies'];
$ethnic=$_POST['ethnic'];
$relationship=$_POST['relationship'];

 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "localtest";

    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);

     $INSERT = "INSERT INTO usersinfo (name,age,gender,location,ethnic,haircolor,eyecolor,skincolor,hobbies,relationship
) values(?, ?, ?, ?, ?, ?,?,?,?,?)";

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssssssssss", $username, $age, $gender, $location, $ethnic, $haircolor, $eyecolor, $skincolor,$hobbies,$relationship);
      $stmt->execute();
      
     
     $stmt->close();
     $conn->close();
    

