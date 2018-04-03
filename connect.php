<?php

$review= filter_input(INPUT_POST, 'review');
$username= filter_input(INPUT_POST, 'username');
if(!empty($username)){
if(!empty($review){
$host= "localhost";
$dbusername= "database";
$dbreview="root";

$conn= new mysqli($host, $dbusername, $dbreview);
}
if(mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .')'
    . mysqli_connect_error());
}
else{
    $sql= "INSERT INTO" account (username, password)
    values ('$username', '$password')";
    if($conn->($sql)){
    echo "New review is submitted successfully";
    }
    else{
    echo "Error: ". $sql ."<br>". $conn->error;
    }
    $conn->close;
}
}
else{
    echo "Review is empty":
    die();
}
}
else{
    echo "username is empty":
    die();
}
?>