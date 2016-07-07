<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>
<body>
[insert_php]
//Open the text file containing seller information
$sellerInfo = fopen("./sellers.txt", "r");
 
//Loop through the rows in the file.
while (($row = fgetcsv($sellerInfo, 0, ";")) !== FALSE) {
    //Print out my column data.
    echo '<b>Seller Name:</b> ' . $row[0] . '<br>';
    echo '<b>Address:</b> ' . $row[1] . '<br>';
    echo '<b>Phone Number:</b> ' . $row[2] . '<br>';
    echo '<br>';
}
//Close the text file
fclose($sellerInfo);

[/insert_php]
<a>&copy; The Sport Shop 2016 </a>
</body>
</html>