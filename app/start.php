<?php

use Aws\S3\S3Client;

require 'aws/aws-autoloader.php';

$config = require('config.php');
//s3
$s3 = new Aws\S3\S3Client([
    'version'     => 'latest',
    'region'      => 'ap-south-1',
    'bucket' => 'praveenraghav',
    'credentials' => [
        'key'    => 'AKIAI4XUV5LI52MD63ZA',
        'secret' => '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'
    ]
]);
?>
