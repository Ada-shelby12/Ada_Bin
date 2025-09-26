<?php
$pattern = "/[0-9]/";
$bname = $_POST["bookId"];
$btitle = $_POST["bookTitle"];
$bprice = $_POST["bookPrice"];
$bcopies = $_POST["bookCopies"];
if(empty($bname)||empty($btitle)||empty($bprice)||empty($bcopies))
    echo "Feilds canot be empty";
elseif (!preg_match($pattern, $bprice))
    echo "Price and copies must be positive numbers";
else 
    echo "Form data is validated";
?>