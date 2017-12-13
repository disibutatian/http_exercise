<?php
	/**
	 * curl Content-Type is filled with post_data
	 * */
	
	$url = "http://127.0.0.1:8076/index.php";

    function curl_http($url, $post_data) {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_TIMEOUT, 3);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
        $output = curl_exec($ch);
        curl_close( $ch);

        return $output;
    }

    echo "\n\n\n";

	//application/json
	$info = array(
        "email" => "kkk@163.cn",
    );
    $info = json_encode($info, true);
	echo "application/json\n";
    $output = curl_http($url, $info);
    echo $output."\n\n";


	//application/multipart/form-data
	$info = array(
        "email" => "kkk@360.cn",
    );
	echo "application/multipart/form-data\n";
    $output = curl_http($url, $info);
    echo $output."\n\n";


	//application/x-www-form-urlencoded
	$info = "dispnumber=567567567&extension=6";
	echo "application/x-www-form-urlencoded\n";
    $output = curl_http($url, $info);
    echo $output."\n\n";

