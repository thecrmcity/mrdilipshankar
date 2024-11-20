<?php



class Database
{

	protected $host;
	protected $name;
	protected $pass;
	protected $dbname;

	protected $conn;

	public function __construct()
	{
		$this->conn = mysqli_connect($this->host,$this->name,$this->pass,$this->dbname);

		return $this->conn;
	}


}

?>