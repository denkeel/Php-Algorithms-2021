<?php

class MySQLFactory extends DBOrmFactory
{
    function __construct() {
        parent::__construct();
    }
    
    protected function getConnection() : Connection
    {
        return new ConnectionMySQL();
    }

    protected function getRequest() : Request
    {
        return new RequestMySQL();
    }

    protected function getQuery() : Query
    {
        return new QueryMySQL();
    }
}