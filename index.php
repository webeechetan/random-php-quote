<?php
require_once 'vendor/autoload.php';

use Chetan\RandomPhpQuote\RandomPhpQuote;

$quote = new RandomPhpQuote();
echo $quote->getQuote();

?>