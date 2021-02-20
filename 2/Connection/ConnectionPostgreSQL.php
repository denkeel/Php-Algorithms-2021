<?php
class ConnectionPostgreSQL extends Connection {

    function connect()
    {
        return "Connected to PostgreSQL database.";
    }
}