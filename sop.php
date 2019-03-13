<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
             $con=  mysql_connect("localhost","root","");
        $db=  mysql_selectdb("scryb", $con);
       $fname=$_POST['fname'];
       $ph=$_POST['ph'];
       $em=$_POST['email'];
       $tst=$_FILES['f']['name'];
       $data=$_FILES['f']['tmp_name'];
       $query=  mysql_query("insert into sop(name,phone,email,dname,data) values('$fname','$ph','$em','$tst','$data')");
       if($query)
       {
           header("location:payment.php?amt=1200");
       }
       else
       {
           echo 'failed';
       }
        ?>
    </body>
</html>
