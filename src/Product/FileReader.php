<?php

namespace App\Product;

abstract class FileReader {
    public function __construct() {
    }
    abstract public function readFile();
    abstract function extractAttributes($data);

}