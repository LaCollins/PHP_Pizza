<?php
    $conn = mysqli_connect('localhost', 'laura', 'yT0gIiWViXCV3sxg', 'korinth_pizza');

    if(!$conn){
        echo 'Connection error: ' . mysqli_connect_error();
    }
?>