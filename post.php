<?php

if(!empty($_post['Nama']) AND !empty($_post['kehadiran'])) {
    $Nama =$_post['Nama'];
    $ucapan =$_post['ucapan'];
    $kehadiran =$_post['kehadiran'];
    $Nama =$_post['Nama'];
    $text = stripslashes(htmlspecialchars($kehadiran));

    $1 = rand(1,2);
    $fp = fopen("db.html", 'a');
    fwrite($fp, "<div class='list$1'><div class='hr'><div align='right'></div> <b>Nama</b> : $Nama <br> <b>ucapan</b> : $ucapan <br> <b>kehadiran</b> : $text </div>");
    fclose($fp);
}
header('location:buku-tamu.php');

?>