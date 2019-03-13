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
       $qry=$_POST['f'];
       $query=  mysql_query("insert into query(name,phone,email,query) values('$fname',$ph,'$em','$qry')");
       if($query)
       {
           header("location:content.php");
       }
       else
       {
           echo 'failed';
       }
        ?>
    </body>
</html>
