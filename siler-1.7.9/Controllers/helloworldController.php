<?php declare(strict_types=1);
/*
    php-frameworks-bench
    this is a simple hello world controller to make benchmark
 */
namespace Controllers;

class HelloWorldController {
    public function getIndex(): void {
        echo 'Hello World!';
    }
}