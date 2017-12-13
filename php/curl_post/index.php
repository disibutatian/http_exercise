<?php

function print_super_global() {
    // 全局信息包含下面所有的信息
    var_dump($GLOBALS );

    // HTTP 文件上传变量,
    var_dump($_FILES);

    //
    var_dump($_COOKIE);

    //
    var_dump($_SESSION);

    //环境变量,包含了 CGI 变量
    var_dump($_ENV);

    //服务器和执行环境信息
    var_dump($_SERVER);

    //通过 URL 参数传递,GET 是通过 urldecode() 传递的 
    var_dump($_GET);

    /*
     * 当 HTTP POST 请求的 Content-Type 是 application/x-www-form-urlencoded 或 multipart/form-data 
     * 时，会将变量以关联数组形式传入当前脚本;  (这里针对的是网页的类型，或者已经构造好了对应类型的数据)
     */
    var_dump($_POST);

    //默认情况下包含了 $_GET，$_POST 和 $_COOKIE 的数组
    var_dump($_REQUEST);
}

	echo "_SERVER['HTTP_CONTENT_TYPE']\n";
    var_dump($_SERVER['HTTP_CONTENT_TYPE']);
	echo "_GET\n";
    var_dump($_GET);
	echo "_POST\n";
    var_dump($_POST);
	echo "php://input\n";
	var_dump(file_get_contents("php://input"));

