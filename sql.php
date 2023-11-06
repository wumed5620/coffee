<?php
require "db.php";

$sql = "select * from UserInfo";
$result = $mysqli->query($sql);

// while($row = $result->fetch_assoc()) {
//     echo $row["cname"] . "<br>\n";
// }
?>
<html>
    <head><meta charset="utf-8"></head>
    <body>
        <table border="1">
            <tr>
                <th>地區</th>
                <th>店名</th>
            </tr>
<?php while($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row["uid"] ?></td>
                <td><?= $row["cname"] ?></td>
            </tr>
            <?php } ?>
        </table>
    </body>
</html>