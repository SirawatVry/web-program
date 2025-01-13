<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>grade.php</title>
</head>
<body>
<?php
$run = 1;
$sum = 0;
if (isset($_POST['submit'])) {
    $filename = $_POST['filename'];
    $text = file($filename);

    echo "<table border='0' align='center' cellpadding='8'>"; 
    echo "<thead><tr>";
    echo "<th>นักศึกษา</th><th>ทดสอบย่อย</th><th>สอบกลางภาค</th><th>สอบปลายภาค</th><th>รวม 100 คะแนน</th><th>เกรด</th>";
    echo "</tr></thead>"; 

    echo "<tbody>"; 
    foreach ($text as $tr_data) {
        $array_word = explode(",", $tr_data);
        echo "<tr>"; 
        foreach ($array_word as $value) {
            $sum = (int)$value + $sum;
            echo "<td>$value</td>"; 
        }
        
        if ($sum >= 80) {
            $grade = "A";
        } else if ($sum >= 50 && $sum <= 79) {
            $grade = "B";
        } else if ($sum >= 60 && $sum <= 69) {
            $grade = "C";
        } else if ($sum >= 50 && $sum <= 59) {
            $grade = "D";
        } else if ($sum < 49) {
            $grade = "F";
        }
        
        echo "<td>$sum</td><td>$grade</td>"; 
        echo "</tr>"; 
        $sum = 0;
    }
    echo "</tbody>"; 
    echo "</table>";
} else {
?>
    <form method="post" name="mid2" action="grade.php">
        <h3>Grade Submission</h3>
        <table border="0" align="center" width="400">
            <tr>
                <td>File Name:</td>
                <td><input type="text" name="filename" size="30"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br>
                    <input type="submit" name="submit" value="SUBMIT">&nbsp;
                    <input type="reset" name="reset" value="RESET">
                </td>
            </tr>
        </table>
    </form>
<?php
}
?>
</body>
</html>
