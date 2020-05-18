<?php

spl_autoload_register(
    function (string $namespaceClass): void {
        $path = "/src";
        $class_path = str_replace("\\", DIRECTORY_SEPARATOR, $namespaceClass);
        @include_once getcwd() . $path . DIRECTORY_SEPARATOR . "{$class_path}.php";
    }
);
