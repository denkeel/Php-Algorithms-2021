<?php
class QueryPostgreSQL extends Query {

    function query($sql, $connection)
    {
        return "Queried '$sql' to PostgreSql database.";
    }
}