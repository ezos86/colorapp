<!DOCTYPE>
<html>
	<head>
		<title>Twitter Example API</title>
		<style type="text/css">
			.dye {font-size:72px; text-decoration: none !important; color:#333333;}
		</style>
	</head>
	<body>
	<?php
	//initialize a new curl resource
$ch = curl_init();	
curl_setopt($ch, CURLOPT_URL, 'https://api.twitter.com/1/statuses/user_timeline.json?screen_name=ezos86&count=10');
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$content = curl_exec($ch);
curl_close($ch);
		
if($content === FALSE) {
	//Content couldn't be retrieved... Do something
} else {
	//Content was retrieved do something with it.
}

//decode the json
	$decoded = json_decode($content);
	
// content to array
	$content = json_decode($content);
		
		//Place this before the foreach in the previous code snippet
/*print '<pre>';
print_r($content);
print '</pre>';
*/
		
foreach($content as $tweet) {
	echo '<p class="dye">'.$tweet->source.'</p>';
}

	
	?>
	</body>
</html>