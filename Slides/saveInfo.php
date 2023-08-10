<?php
 include('server.php');
 $proF=$_GET['proF'];
 $proP=$_GET['proP'];
 $proLvl=$_GET['proLvl'];
 $proT=$_GET['proT'];
 $nos=$_GET['nos'];
 $proD=$_GET['proD'];
 $proTime=$_GET['proTime'];
 $proFile2=$_GET['proFile'];
 $proIn=$_GET['proIn'];
 $fn=$_GET['fn'];
 $phone=$_GET['phone'];
 $email=$_GET['email'];

 $proFile1= addslashes(file_get_contents($_FILES['proFile2']["tmp_name"]));  
 
    $stmt1 = $conn->prepare('INSERT INTO `orders`( `o_field`, `o_purp`, `o_levl`, `o_deu`, `o_nos`, `o_date`, `o_title`, `o_inst`,  `c_name`, `c_phone`, `c_email`, `o_file`) VALUES  (?, ?, ?,?,?,?,?,?,?,?,?)');
   $stmt1->bind_param("sssssssssssb", $proF,$proP,$proLvl,$proTime,$nos,$proD, $proT,$proIn,$fn,$phone,$email,$proFile1);
   

$stmt1->execute();



 ?>