<?php
	
	class Database
	{
    
	    private $connection = null;

	    public function __construct()
	    {
	        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME); 
	    }

	    public function getDatabaseConnection()
	    {
	        return $this->connection;
	    }

	    public function execQuery($query)
        {
	        $result = $this->connection->query($query);
	        return $result;
        }

    }

?>