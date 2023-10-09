<html>
	<head>
		<meta charset="UTF-8">
	</head>
	<body></body>
</html>

<?php
function textInLetters($text) {
	for ($i=0; $i<strlen($text); $i++){
		echo $text[$i] . '<br>';
	}
}
textInLetters('To jest przykładowy text dla zadania domowego');
?>