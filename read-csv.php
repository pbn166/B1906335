<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("tuine.csv","r");
print_r(fgetcsv($file));
fclose($file);
?>

</body>
</html>