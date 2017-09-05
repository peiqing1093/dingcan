<html>
	<head>
		<meta http-equiv="content-tpye" content="text/html"; charset=utf-8>
		<title>第一个PHP程序</title>
	</head>
	<body>
<?php
		$sysos=$_SERVER["SERVER_SOFTWARE"];
		$sysversion=PHP_VERSION;
		$con=mysqli_connect("localhost","root","");
		$mysqliinfo=mysqli_get_server_info($con);
		if (function_exists("gd_info")) {
			$gd=gd_info();
			$gdinfo=$gd['GD Version'];
		} else {
			$gdinfo="未知";
		}
		$freetype=$gd["FreeType Support"]?"支持":"不支持";
		$allowurl=ini_get("allow_url_fopen")?"支持":"不支持";
		$max_upload=ini_get("file_uploads")?ini_get("upload_max_filesize"):"Disabld";
		$max_ex_time=ini_get("max_execution_time")."秒";
		date_default_timezone_set("Etc/GMT-8");
		$systemtime=date("Y-m-d H:i:s",time());
		echo "<table align=center cellspacing=0 cellpadding=0>";
		echo "<caption><h2>系统信息</h2></caption>";
		echo "<tr><td>web服务器：</td><td>$sysos</td></tr>";
		echo "<tr><td>PHP版本：</td><td>$sysversion</td></tr>";
		echo "<tr><td>mysqli版本：</td><td>$mysqliinfo</td></tr>";
		echo "<tr><td>GD库版本:</td><td>$gdinfo</td></tr>";
		echo "<tr><td>FreeType:</td><td>$freetype</td></tr>";
		echo "<tr><td>远程文件获取:</td><td>$allowurl</td></tr>";
		echo "<tr><td>最大上传限制:</td><td>$max_upload</td></tr>";
		echo "<tr><td>最大执行时间:</td><td>$max_ex_time</td></tr>";
		echo "<tr><td>服务器时间:</td><td>$systemtime</td></tr>";
		echo "</table>";
?>
	</body>
</html>