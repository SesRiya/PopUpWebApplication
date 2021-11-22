<?php
$conn = mysqli_connect("localhost", "root", "", "users_db");

if (!$conn) {
    echo "Connection failed";
}

