<?php include("meny.txt");?>
<br><br><br>
    <h1>Frank's Daily Bloggstuff!</h1>
     <form action="blogSite.php" method="POST">
        Name: <input type="text" name="name"><br>
        Headline: <input type="text" name="rubrik"><br>
        Post: <textarea id="BloggContent" name="BloggContent" rows="10" cols="50"></textarea><br>
        Password: <input type="password" name="password" /><br>
        <input type="submit" value="Submit">
        <input type="reset" value="Clear">
     </form>
</body>
</html>