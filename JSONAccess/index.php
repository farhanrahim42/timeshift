
        <?php
        $IPMSAN=@$_GET['IPMSAN'];
        $contents = file_get_contents('http://172.30.201.238:8080/api/getNodeLocation?transform=1&filter[]=IPMSAN,eq,'.$IPMSAN);
        echo ("$contents");
        ?>
