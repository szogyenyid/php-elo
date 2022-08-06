<?php

set_exception_handler(function (\Exception $e) {
    echo $e->getCode() . ' - ' . $e->getMessage();
});

match ($_SERVER['REQUEST_URI']) {
    '/test' => print('This is a test route'),
    default => throw new \Exception('Page not found', 404)
};
