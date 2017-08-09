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
        $IPMSAN=@$_GET['IPMSAN'];
        $contents = file_get_contents('http://172.30.201.238:8080/api/getNodeLocation?transform=1&filter[]=IPMSAN,eq,'.$IPMSAN);
        echo ("$contents");
        ?>
    </body>
</html>
