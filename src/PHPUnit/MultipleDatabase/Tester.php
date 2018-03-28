<?php
namespace PHPUnit\MultipleDatabase;

use PHPUnit\DbUnit\DefaultTester;

/**
 * Database tester that uses 
 * a PHPUnit\MultipleDataBase_DatabaseConfig.
 */
class Tester 
extends DefaultTester {

    /**
     * @param \PHPUnit\MultipleDatabase\DatabaseConfig
     */
    public function __construct($dbConfig) {
        parent::__construct($dbConfig->getConnection());
        $this->setDataSet($dbConfig->getDataSet());
        $this->setSetUpOperation($dbConfig->getSetUpOperation());
        $this->setTearDownOperation($dbConfig->getTearDownOperation());
    }
}

