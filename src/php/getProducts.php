<?php
include('./connection.php');

$responseMySql = mysqli_query($connection,'select * from products');

if(!$responseMySql){
    die(mysqli_error($connection));
}


if(mysqli_num_rows($responseMySql)> 0){
    while($rowData = mysqli_fetch_array($responseMySql)){
        echo $rowData['imagen'];
    }
}

mysqli_close($connection);

?>