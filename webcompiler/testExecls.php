<?php
$output;
$error;
$code=$_POST["textarea"];
$input=$_POST["input"]
$gcc="gcc ";
$option=" -o ";
$name="";
$coderslt="";
// chmod("test3.c", 777);
function fileIO($code){

    echo "code : ".$code."\n";

    echo "</br>";
	$fp = fopen("test3.c", "w");
	if(!$fp){
		echo "<p><strong>worng access</strong></p>";
	}
	fprintf($fp,$code);
	fclose($fp);

	exec("gcc test3.c -o test",$output);


	exec("./test",$output);
	echo "$output";
	while (list($key,$val)=each($output)) {
	# code...
		$coderslt .= $key."\n";
		echo $val."\n";
		// $coderslt .=$val."\n";ㅁ
		// $coderslt = $output;
//		echo $coderslt;
	}

// echo "<br>coderslt : ".$coderslt."<br>";
$logics = setcookie('test' ,$coderslt, time() + 100);
if($logics===true){
	echo "success";
	//echo "<br>cookie is : ".$_COOKIE['test'];
}else {
	# code...
	echo "fail";
}


}

//fileIO($code);
echo "string";
// header('Location: http://127.0.0.1:8081/codeeditor.php');
//gcc -lm test3.c 2> error.txt
//
?>
