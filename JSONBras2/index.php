    <?php
	$ACCESS_NAME=@$_GET['ACCESS_NAME'];

	$contents = file_get_contents('http://172.30.201.238:8080/api/getBRASInfo?transform=1&filter[]=ACCESS_NAME,eq,'.$ACCESS_NAME.'&filter[]=BRAS,eq,BSRJRC01');
	echo ("$contents");
	?>
