    <?php
	$TM_NODE=@$_GET['TM_NODE'];

	$contents = file_get_contents('http://172.30.201.238:8080/api/getBRASInfo?transform=1&filter[]=TM_NODE,eq,'.$TM_NODE.'&filter[]=BRAS,eq,BSRJRC01');
	echo ("$contents");
	?>
