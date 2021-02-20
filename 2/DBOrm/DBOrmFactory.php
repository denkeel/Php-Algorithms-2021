<?php

abstract class DBOrmFactory
{
    private Connection $dbConnection;
    private Request $dbRequest;
    private Query $dbQuery;
    
    public function __construct()
    {
        $this->$dbConnection = $this->getConnection();
        $this->$dbRequest = $this->getRequest();
        $this->$dbQuery = $this->getQuery();
    }

    public function connect() {
        echo $this->$dbConnection->connect();
    }


    public function query($sql)
    {
        echo $this->$dbQuery->query($sql, $this->connect());
    }

    public function makeRequest() {
        echo $this->$dbRequest->request();
    }

    abstract protected function getConnection() : Connection;
    abstract protected function getRequest() : Request;
    abstract protected function getQuery() : Query;
}