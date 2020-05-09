<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>

<?php
function count_vowels($string) {
	return preg_match_all('/[aiueo]/i', $string);
}
echo "OUTPUT = ";
echo count_vowels('programmer');
echo "<hr>";
echo "OUTPUT = ";
echo count_vowels('Hmmmm....');

?>
</body>
</html>