	<?php
	$TM_NODE=@$_GET['TM_NODE'];
	$BRAS=@$_GET['BRAS'];
	$contents = file_get_contents("http://172.30.201.238:8080/api/getBRASInfo?transform=1&filter[]=TM_NODE,eq,".urlencode ($TM_NODE)."&filter[]=BRAS,eq,".urlencode ($BRAS));
	echo ("$contents");
	?>
