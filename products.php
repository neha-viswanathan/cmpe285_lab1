<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
[insert_php]

$sellerInfo = fopen("./products.txt", "r");
 
//Loop through the CSV rows.
while (($row = fgetcsv($sellerInfo, 0, ";")) !== FALSE) {
    //Print out my column data.
    echo '<b>Product Name:</b> ' . $row[0] . '<br>';
    echo '<b>Price in $:</b> ' . $row[1] . '<br>';
    echo '<b>Seller:</b> ' . $row[2] . '<br>';
    $image = $row[3];
    echo '<img src="'.$image.'" width="100" height="100">';
    echo '<br>';
	echo '<br>';
}
fclose($sellerInfo);

[/insert_php]

<a>&copy; The Sport Shop 2016 </a>
</body>
</html>


