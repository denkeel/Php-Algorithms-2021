<?php

require 'DBOrm/DBOrmFactory.php';
require 'DBOrm/MySQLFactory.php';
require 'DBOrm/OracleFactory.php';
require 'DBOrm/PostgreSQLFactory.php';

require 'Connection/Connection.php';
require 'Connection/ConnectionMySQL.php';
require 'Connection/ConnectionOracle.php';
require 'Connection/ConnectionPostgreSQL.php';

require 'Query/Query.php';
require 'Query/QueryMySQL.php';
require 'Query/QueryOracle.php';
require 'Query/QueryPostgreSQL.php';

require 'Request/Request.php';
require 'Request/RequestMySQL.php';
require 'Request/RequestOracle.php';
require 'Request/RequestPostgreSQL.php';

function dbConnect(DBOrmFactory $dbFactory)
{
    $dbFactory->connect();
}

dbConnect(new OracleFactory());
echo "<br>";
dbConnect(new PostgreSQLFactory());