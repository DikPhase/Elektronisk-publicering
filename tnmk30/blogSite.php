<?php
    $name = $_POST["name"];
    $Headline = $_POST["rubrik"];
    $Post = $_POST["BloggContent"];
    $password = $_POST['password'];
    

    if($password != "123"){
        print("<p>Felaktigt lösenord! Försök igen</p>");
    }else{
        $connection = mysqli_connect("mysql.itn.liu.se","blog_edit","bloggotyp", "blog");
        $query = "INSERT INTO emial133 VALUES(NULL, '$name', '$Headline', '$Post')";  
        mysqli_query($connection, $query);

        header('Location: Blog.php');
    }
?>