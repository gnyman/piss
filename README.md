# piss
PHP keep It Stupid Simple

## What is this?
It's a PHP static page generator, which fits in a tweet

## Why?

## How do I use it?
Copy paste the following snippet and put it first in a PHP file. Then view the file in your web browser. It will create a .html file named the same thing as your php file in the same directory, and redirect the user to that html file.

```php
<?php
ob_start(
    function($output) {
        $t = substr(__FILE__, 0, -4) . '.html';
        ($f = fopen($t, 'w')) || header("HTTP/1.1 500") && exit(1);
        fwrite($f, $output);
        header("Location: " . substr($_SERVER['REQUEST_URI'], 0, -4 ) . ".html");
    }
);
?>
```

## Can you give me an example?
See example.php

## Why not just use PHP to return the output like normal?
It wouldn't be a static page generator then would it?

## This is stupid
Yes it is, but it works and solves my problem while the minimal amount of complexity.
