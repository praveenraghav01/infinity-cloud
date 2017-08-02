<?php

require 'app/start.php';

$objects = $s3->getIterator('ListObjects', [
    'Bucket' => 'praveenraghav'
]);

?>

<!DOCTYPE html>
<hmtl lang="en">
<head>
<meta charset="UTF-8">
<title>Listing</title>
</head>
<body>
<table>
<thead>
<tr>
<th>File</th>
<th>Download</th>
</tr>
</thead>
<tbody>
<?php foreach($objects as $object): ?>
<tr>
<td><?php echo $object['Key'];?></td>
<td><a href="<?php echo $s3->getObjectUrl('praveenraghav',$object['Key']);?>" download="<?php $object['Key'];?>">Download</td>
</tr>
<?php endforeach; ?>
</tbody>
</table>


</body>
</html>