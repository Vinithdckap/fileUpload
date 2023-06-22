<?php

require "connection.php";
$app = [];
$app['db']= (new data())->db;

if (isset($_POST['userName']) || isset($_FILES['image'])){

        $userName = $_POST['userName'];
        $image = $_FILES['image'];
        $filePath = "uploaded/".$image['name'];
        move_uploaded_file($image["tmp_name"],"$filePath");
//        print_r($filePath);
        if ($userName !== "" && $image!==""){

            $insert = $app['db']->query("insert into files(user,file) values ('$userName','$filePath')");
        }
        $fetch = $app['db']->prepare("select * from files");
        $fetch->execute();
        $allData = $fetch->fetchAll();
}
else{
    echo "fill panra punda";
}
require "index.php";

