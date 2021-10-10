
<?php
  
// The location of the PDF file
$file = 'Abhishek_Nain (1).pdf';
$filename = 'Abhishek_Nain (1).pdf';
  
// Header content type
header('Content-type: application/pdf');
  
header('Content-Disposition: inline; filename="' . $filename . '"');
  
header('Content-Transfer-Encoding: binary');
  
header('Accept-Ranges: bytes');
  
// Read the file
@readfile($file);
?>