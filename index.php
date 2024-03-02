<?php
require_once __DIR__ . '/vendor/autoload.php';

use Chetansingh\Quote\Quote;

$quote = new Quote();
echo $quote->getQuote();
?>