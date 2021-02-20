<?php
class QueryOracle extends Query {

    function query($sql, $connection)
    {
        return "Queried '$sql' to Oracle database.";
    }
}