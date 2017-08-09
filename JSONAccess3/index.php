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
        $contents = file_get_contents('http://itnthackathon.bweas.tm.com.my/api/getNodeLocation?filter[]=IPMSAN,eq,$IPMSAN&satisfy=all&transform=1');
        echo ("contents");
        ?>
    </body>
</html>
