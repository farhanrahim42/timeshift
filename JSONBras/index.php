	<?php
	$ACCESS_NAME=@$_GET['ACCESS_NAME'];
	$BRAS=@$_GET['BRAS'];
	$contents = file_get_contents('http://172.30.201.238:8080/api/getBRASInfo?transform=1&filter[]=ACCESS_NAME,eq,'.$ACCESS_NAME.'&filter[]=BRAS,eq,'.$BRAS);
	echo ("$contents");
	?>
