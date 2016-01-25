require_once 'vendor/autoload.php';

use Aws\S3\S3Client;

$client = SnsClient::factory(array(
    'profile' => '<profile in your aws credentials file>',
    'region'  => '<region name>'
));