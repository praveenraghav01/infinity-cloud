<?php

use Aws\S3\S3Client;

require 'aws/aws-autoloader.php';

$config = require('config.php');
//s3
$s3 = new Aws\S3\S3Client([
    'version'     => 'latest',
    'region'      => 'ap-south-1',
    'bucket' => '************av',
    'credentials' => [
        'key'    => '************',
        'secret' => '*****************2y376N'
    ]
]);
?>
