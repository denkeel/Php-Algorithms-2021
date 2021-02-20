<?php
class QueryMySQL extends Query {

    function query($sql, $connection)
    {
        return "Queried '$sql' to MySql database.";
    }
}