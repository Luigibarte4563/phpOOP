<?php

class Logger {

    function log($message) {
        echo $message . "<br";
    }
}

class DataMigrator  {

    var $logger1;

    function __construct() {
        $this->logger1 = new Logger();
    }

    function migrate() {
        $this->logger1->log("Miigrating. Please wait...");
    }
}

$dataMig = new DataMigrator();
$dataMig->migrate();