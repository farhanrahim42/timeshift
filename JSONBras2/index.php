    <?php
	$contents = file_get_contents('http://itnthackathon.bweas.tm.com.my/api/getBRASInfo?transform=1&filter[]=ACCESS_NAME,eq,BNR_V1024&filter[]=BRAS,eq,BSRJRC01');
	echo ("$contents");
	?>
