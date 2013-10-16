<!DOCTYPE HTML PUBLIC "-//w3c//DTD HTML 4.0 Transitional//EN">
<html xlmns="http://www.w3.org/1999/xhtml"xml:lang="en" lang="en">
<head>
	<title>Loop foreach</title>
</head>

<body>

<?php

/**
  * Mencetak string
  * $teks nilai string
  * bold adalah argumen opsional
  */
function print_teks($teks, $bold = true) {
	echo $bold ? '<b>' .$teks. '</b>' : $teks;
}

print_teks('Indonesiaku');
// Mencetak dengan huruf tebal

print_teks('Indonesiaku',false);
//Mencetak dengan huruf reguler
?>

</body>
</html>