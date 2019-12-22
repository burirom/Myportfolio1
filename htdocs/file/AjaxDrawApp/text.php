<?php
header('Content-type: text/plain; charset= UTF-8');
if(isset($_POST['text_input'])){
	
	echo $_POST['text_input'];
}else{
	echo '文字を入力してください';
}

?>
