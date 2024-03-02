
# Random PHP Quote Package

Easily integrate random quotes into your PHP projects with this simple-to-use package. Whether you're looking to inspire your users with daily quotes or just add a bit of randomness to your application, `chetansingh/random-php-quote` has got you covered.

## Installation

Getting started with this package is a breeze. Simply run the following command in your project directory to install it via Composer:

```bash
composer require chetansingh/random-php-quote
```

This will add the random PHP quote package to your project, making it ready for use.

## Usage/Examples

### Setting Up

First, ensure that your project autoloads dependencies correctly by including the Composer autoload script. Then, instantiate the `Quote` class to start fetching random quotes. Here's how:

```php
<?php
require_once __DIR__ . '/vendor/autoload.php';

use Chetansingh\Quote\Quote;

$quote = new Quote();
?>
```

### Displaying Quotes

This package makes it simple to display a quote in a visually appealing manner, thanks to Bootstrap. Here's a snippet that shows how to display a random quote as a Bootstrap card:

```html
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php echo $quote->displayAsBootstrapCard(); ?>
</body>
</html>
```

With this simple setup, your application will display a beautifully styled Bootstrap card containing a random quote.

## Authors

- [@webeechetan](https://www.github.com/webeechetan)

Contributions, feedback, and questions are welcome. Feel free to reach out or contribute to the project on GitHub.
