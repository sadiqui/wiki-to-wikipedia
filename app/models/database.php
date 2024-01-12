<?php

class MySql_database
{
	private $pdo;
	public $last_query;

	public function __construct()
	{
		$this->open_connection();
	}

	public function open_connection()
	{
		try {
			$dsn = 'mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME;
			$this->pdo = new PDO($dsn, DB_USER, DB_PASSWORD);
			$this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			echo "Database connection failed: " . $e->getMessage();
		}
	}

	public function escape_value($value)
	{
		$escaped_value = $this->pdo->quote($value);
		return substr($escaped_value, 1, -1); // Remove the surrounding quotes
	}

	public function query($sql, $params = [])
	{
		$statement = $this->pdo->prepare($sql);
		$statement->execute($params);

		return $statement;
	}

	public function prepare($sql)
	{
		try {
			$statement = $this->pdo->prepare($sql);
			return $statement;
		} catch (PDOException $e) {
			echo "Database query failed: " . $e->getMessage();
		}
	}

	public function confirm_query($result_set)
	{
		// No changes needed, as PDOException will be thrown automatically.
	}

	public function confirm_insert()
	{
		if ($this->inserted_id() === 0) {
			echo "Database query failed: No rows inserted.";
		}
		return $this->inserted_id();
	}

	public function fetch_assoc_array($result_set)
	{
		return $result_set->fetch(PDO::FETCH_ASSOC);
	}

	public function fetch_num_array($result_set)
	{
		return $result_set->fetch(PDO::FETCH_NUM);
	}

	public function num_rows($result_set)
	{
		return $result_set->rowCount();
	}

	public function inserted_id()
	{
		return $this->pdo->lastInsertId();
	}

	// public function affected_rows()
	// {
	// 	$statement = $this->pdo->query($this->last_query);
	// 	return $statement->rowCount();
	// }

	public function result_rewind($result_set, $row = 0)
	{
		// Rewinding result set is not necessary in PDO.
	}

	public function fetch_all($result_set)
	{
		return $result_set->fetchAll(PDO::FETCH_ASSOC);
	}

	public function free_result($result_set)
	{
		// Freeing result set is not necessary in PDO.
	}

	public function close_connection()
	{
		$this->pdo = null;
	}
}

?>