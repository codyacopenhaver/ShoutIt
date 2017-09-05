<?php
//added this comment to test commit
//connect to MySQL
//mysqli_connect(host,username,password,database name)
$con = mysqli_connect("","","","");

//test connection
if(mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
