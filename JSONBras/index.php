	<?php
	$REGION=@$_GET['REGION'];
	$SERVICE_TYPE=@$_GET['SERVICE_TYPE'];
	$contents = file_get_contents("http://172.30.201.238:8080/api/getBRASInfo?transform=1&filter[]=REGION,eq,".urlencode($REGION)."&filter[]=SERVICE_TYPE,eq,".urlencode($SERVICE_TYPE));
	echo ("$contents");
	?>
