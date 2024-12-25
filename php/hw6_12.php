<?php
    if (isset($_POST["submit"])) {
        $row = $_POST['row'];
        $column = $_POST['column'];
        $rowMax = intval( $row);
        $colMax = intval( $column);
        echo "<table align='center' border='4' width='300'>";
        for($r = 1; $r <= $rowMax ; $r++) {
        echo "<tr>";
        for($c = 1; $c <= $colMax ; $c++) {
        if ($r == $c) {
        echo "<td align='center'><font color='#33ff66'> ";
        echo "$r,$c </font></td>";
        }
        else {
        echo "<td align='center'> $r,$c </td>";
        }
        }
        echo "</tr>";
        }
        echo "</table>";

    }
    else {

?>
<html>
    <head><title>การสร้างฟอร์มในการรับค่าเพื่อการตาราง</title></head>
        <body>
        <form method="post" action="hw6_12.php">
        <table border="1" align="center" width="400">
        <tr>
        <td colspan="2" align="center">
        <big>ทดสอบการใช้ Control Structure</big>
        </td>
        <tr>
        <tr>
        <td align="right">Enter row : </td>
        <td><input type="text" name="row" size="15" value=""/> </td>
        </tr>
        <td align="right">Enter column : </td>
        <td><input type="text" name="column" size="15" value=""/></td>
        </tr>
        <tr>
        <td colspan="2" align="center">
        <input type="submit" name = "submit" value=" OK " />
        <input type="reset" value=" Clear " />
        </td>
        </tr>
        </table>
        </form>
        </body>
</html>
<?php
    }
?>