<?php

abstract class Query
{
    public abstract function query($sql, $connection);
}