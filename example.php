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
Hi, this page was generated with <a href="https://github.com/gnyman/piss">PISS</a> on <?= date(DATE_RFC2822); ?>
