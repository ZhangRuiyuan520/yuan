<H1>你好嗎？</H1>
<?php
if ( !isset($_GET['aa']) || !isset($_GET['bb']) ){
	echo "需要完整的兩個參數";
	exit;
}
if ( !is_numeric($_GET['aa']) || !is_numeric($_GET['bb']) ){
	echo "需要兩個數值";
	exit;
}
$x = $_GET['aa'];
$y = $_GET['bb'];
$z =$x+$y;
echo $z;

/*$somedata = $_GET['aa'];
echo $_GET['ooo'];
echo $_GET[]
$a ="預設值";
if (!isset($_GET['xxx'])){
	echo "請乖乖設定參數xxx";
}else{
	$a = $_GET['xxx'];
}
echo $a;*/
