<?php include("meny.txt"); ?>
<h2>
    Inventory of set 375-2
</h2>
<table class="table">
    <tr>
        <th>Quantity</th>
        <th>Color</th>
        <th>Part</th>
        <th>Image</th>
    </tr>
<?php
$connection=mysqli_connect("mysql.itn.liu.se", "lego", "", "lego");
$query=
"SELECT
    inventory.Quantity,
    inventory.ColorID, 
    colors.Colorname,
    parts.Partname, 
    inventory.ItemID,
    inventory.ItemTypeID,
    images.has_gif,
    images.has_jpg
FROM
    inventory,
    colors,
    parts,
    images
WHERE 
    inventory.SetID ='375-2'
AND
    inventory.ColorID = colors.ColorID
AND
    inventory.ItemID = parts.PartID
AND
    inventory.ItemTypeID = 'P'
AND
    inventory.ItemID = images.ItemID";

$result=mysqli_query($connection, $query);
$url = "http://www.itn.liu.se/~stegu76/img.bricklink.com/";

while ($row = mysqli_fetch_array($result)) {
    $Quantity = $row['Quantity'];
    $Color = $row['ColorID'];
    $PartName = $row['Partname'];
    $ItemID = $row['ItemID'];
    $hasgif = $row['has_gif'];
    $hasjpg = $row['has_jpg'];
    $ItemTypeID = $row['ItemTypeID'];
    
    print("<tr>");
    print("<td><p>$Quantity</p><td>");
    if($hasgif){
        print("<td>$ItemTypeID/$Color/$ItemID.gif</td>");
    }else
    {
        print("<td>$ItemTypeID/$Color/$ItemID.jpg</td>");
    }
    $img = "$url/$ItemTypeID/$Color/$ItemID.jpg";
    print("<td><img src=$img alt=Part $ItemID");
    print("<td><p>$Color</td></p>");
    print("<td><p>$PartName</td></p>");
    print("<td><p>$ItemID</td></p>");
    print("</tr>");
}
?>
</table>
</body>

</html>