<?php include("meny.txt"); ?>
<div id="skiplotsoflines"></div>
<form action="Blog.php" method="PUT">
    <select name="order">
        <option value="ASC">Ascending</option>
        <option value="DESC">Descending</option>
    </select>
    <input type="text" name="limit" >
    <input type="text" name="filter">
    <input type="submit">
    

</form>
<?php
    // Koppla upp mot databasen// adress, användare, lösenord, databas
    $connection = mysqli_connect("mysql.itn.liu.se","blog","", "blog");
    // Ställ frågan
    $limit = $_GET['limit'];
    $order = $_GET['order'];
    $filter = $_GET['filter'];


    if(!$limit)
        $limit = 5;

    $query ="SELECT * FROM emial133 WHERE entry_heading LIKE '%$filter%' OR entry_author LIKE '%$filter%' ORDER BY entry_date $order LIMIT $limit";

    $result = mysqli_query($connection, $query);
    // Skriv ut alla poster i svaret
    while ($row = mysqli_fetch_array($result)) {

        $text = $row['entry_text'];
        $heading = $row['entry_heading'];
        $author =$row['entry_author'];
        $date = $row['entry_date'];

        print("<h3>$heading</h3>\n");
        print("<p>$author, $date</p >\n");
        print("<p>$text</p>\n");
        print("<hr/>");
    } 
?>
</body>
</html>