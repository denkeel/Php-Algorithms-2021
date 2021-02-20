<?php

class OracleFactory extends DBOrmFactory
{
    function __construct() {
        parent::__construct();
    }

    protected function getConnection() : Connection
    {
        return new ConnectionOracle();
    }

    protected function getRequest() : Request
    {
        return new RequestOracle();
    }

    protected function getQuery() : Query
    {
        return new QueryOracle();
    }
}