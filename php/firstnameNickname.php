<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>firstnameNickname.php</title>
</head>
<body>
<center>
<?php
$run = 1;
    if(isset($_POST['submit']))
    {   
        $filename = $_POST['filename'];
        $text = file($filename);
        foreach($text as $tr_data)
        {   
            $col = 1;
            $array_word = explode(",",$tr_data);
            foreach($array_word as $value)
            {
                echo "<table border=1 cellspacing=1 cellpadding=1>";
                $value = trim($value);
                if ($col == 1)
                {
                    echo "<br>";
                }
                else
                {
                    if ($value == "Robert"){
                        echo "<td width ='150'><br>$run  Dick</td>";
                        $run++;}
                    elseif($value == "Dick"){
                        echo "<td width ='150'><br>$run Robert</td>";
                        $run++;}
                    elseif ($value == "William"){
                        echo "<td width ='150'><br>$run Bill</td>";
                        $run++;}
                    elseif($value == "Bill"){
                        echo "<td width ='150'><br>$run William</td>";
                        $run++;}
                    elseif ($value == "James"){
                        echo "<td width ='150'><br>$run Jim</td>";
                        $run++;}
                    elseif($value == "Jim"){
                        echo "<td width ='150'><br>$run James</td>";
                        $run++;}
                    elseif ($value == "John"){
                        echo "<td width ='150'><br>$run Jack</td>";
                        $run++;}
                    elseif($value == "Jack"){
                        echo "<td width ='150'><br>$run John</td>";
                        $run++;}
                    elseif ($value == "Margaret"){
                        echo "<td width ='150'><br>$run Pegg</td>";
                        $run++;}
                    elseif($value == "Pegg"){
                        echo "<td width ='150'><br>$run Margaret</td>";
                        $run++;}
                    elseif ($value == "Edward"){
                        echo "<td width ='150'><br>$run Ed</td>";
                        $run++;}
                    elseif($value == "Ed"){
                        echo "<td width ='150'><br>$run Edward</td>";
                        $run++;}
                    elseif ($value == "Sarah"){
                        echo "<td width ='150'><br>$run Sally</td>";
                        $run++;}
                    elseif($value == "Sally"){
                        echo "<td width ='150'><br>$run Sarah</td>";
                        $run++;}
                    elseif ($value == "Andrew"){
                        echo "<td width ='150'><br>$run Andy</td>";
                        $run++;}
                    elseif($value == "Andy"){
                        echo "<td width ='150'><br>$run Andrew</td>";
                        $run++;}
                    elseif ($value == "Anthony"){
                        echo "<td width ='150'><br>$run Tony</td>";
                        $run++;}
                    elseif($value == "Tony"){
                        echo "<td width ='150'><br>$run Anthony</td>";
                        $run++;}
                    elseif ($value == "Dedborah"){
                        echo "<td width ='150'><br>$run Debbie</td>";
                        $run++;}
                    elseif($value == "Debbie"){
                        echo "<td width ='150'><br>$run Dedborah </td>";
                        $run++;}  
                }
            $col++;    
            
        }
    }
    }else
    {
?>
        
        <form method="post" name="mid2" action="firstnameNickname.php">
        <h3> firstnameNickname.php </h3>
        <table border="0" align="center" width="400">
            <tr>
                <td>File Name :</td>
                <td><input type="text" name="filename" size="40"> </td>
            </tr>
            <tr>
                <td colspan="2" align="center"><br>
                    <input type="submit" name="submit" value=" SUBMIT " />&nbsp;
                    <input type="reset" name="reset" value=" RESET " />
                </td>
            </tr>
        </table>
        </form>

</center>
    
</body>
</html>
<?php        
    }
?>