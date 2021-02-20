<?php

class PostgreSQLFactory extends DBOrmFactory
{
    function __construct() {
        parent::__construct();
    }

    protected function getConnection() : Connection
    {
        return new ConnectionPostgreSQL();
    }

    protected function getRequest() : Request
    {
        return new RequestPostgreSQL();
    }

    protected function getQuery() : Query
    {
        return new QueryPostgreSQL();
    }
}