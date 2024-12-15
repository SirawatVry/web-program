<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ประวัติส่วนตัว</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
        $namenn = "ชื่อ นาย ศิรวัฒน์ วีรยศพงศ์ ชื่อเล่น เติ้ล";
        $birthday = "เกิดวันที่ 7 พฤศจิกายน 2546 อายุ 21 ปี";
        $university = "มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าพระนครเหนือ 
        </br>คณะเทคโนโลยีและการจัดการอุตสาหกรรม 
        </br>ภาควิชาเทคโนโลยีสารสนเทศ";
        $historystd = "ชั้นอนุบาลถึงประถมศึกษาที่    โรงเรียนสิริศึกษา
        </br>ชั้นมัธยมศึกษาที่            โรงเรียนสมุทรปราการ";
        $contract = "s6606021630061@email.kmutnb.ac.th";
        echo "<p class = 'hfont'> My profile</br></p>";
        echo " <p class = 'hafont>' $namenn </br></p>";
        echo "<p class = 'pfont'> ปัจจุบันศึกษาอยู่ $university </br></p>";
        echo " <p class = 'pfont'> $birthday </br></p>";
        echo "<p class = 'pfont'> ประวัติการศึกษา $historystd</br></p>";
        echo "<p class = 'under'> contract Email : $contract</p>";
    ?>
</body>
</html>