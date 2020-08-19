<?php 
	//Este json solo esta de prueba, aunque no se usa para este ejemplo.
	$json ='[
		{"id":"0","nombre":"Video#0", "url";"https://www.youtube.com/watch?v=JXP9osXnvGE" },
		{"id":"1","nombre":"Video#1", "url";"https://www.youtube.com/watch?v=IX8rEWetVxk" },
		{"id":"2","nombre":"Video#2", "url";"https://www.youtube.com/watch?v=NAvfuRcWyvE" },
		{"id":"3","nombre":"Video#3", "url";"https://www.youtube.com/watch?v=NZxcKnxqkdM" },
		{"id":"4","nombre":"Video#4", "url";"https://www.youtube.com/watch?v=fO8LZC6xaK0" },
		{"id":"5","nombre":"Video#5", "url";"https://www.youtube.com/watch?v=oxONngLflAs" },
		{"id":"6","nombre":"Video#6", "url";"https://www.youtube.com/watch?v=UzGemfwaTT8" },
		{"id":"7","nombre":"Video#7", "url";"https://www.youtube.com/watch?v=9JdRpV0Rn-Q" },
		{"id":"8","nombre":"Video#8", "url";"https://www.youtube.com/watch?v=nxERPrmwsdI" },
		{"id":"9","nombre":"Video#9", "url";"https://www.youtube.com/watch?v=KmvI7E_13M0" },
	]';

	$data = $_REQUEST["data"];
	if (isset($data)) {
		echo $data;
	}


 ?>