<?php

use Aws\Iam\IamClient;
use Aws\S3\S3Client;
use Aws\Exception\AwsException;

require 'app/start.php';
/*
$object = 'uploads/b75f7b9eb07556eb31574f6a9fdebba3.png';

$url = $s3->getObjectUrl('praveenraghav', $object , '');*/

if($_SERVER["REQUEST_METHOD"]=='POST'){

$BUCKET_NAME='demo';
//Creating S3 Bucket
try {
    $result = $s3->createBucket([
        'Bucket' => $BUCKET_NAME,
    ]);
}catch (AwsException $e) {
    // output error message if fails
    echo $e->getMessage();
    echo "\n";
}
}
?>

<!DOCTYPE html>
<hmtl lang="en">
<head>
<meta charset="UTF-8">
<title>Listing</title>
</head>
<body>
<a href="<?php echo $url; ?>">Download</a>
<form action="towken.php" method="post">
<input type="text" name="user"></input>
<input type="text" name="pwd"></input>
<button type="submit">login</button>
</form>
</body>
</html>