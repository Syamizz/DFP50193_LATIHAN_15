<?php
 $nama = test_input($_POST['nama']);

 echo "[$nama]";

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
