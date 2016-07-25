<?php

namespace App\Services;

final class Database implements DatabaseInterface{

	protected $pdo;
	
	public function __construct($dsn){
		$this->pdo = $dsn;
	}

	publich function fetchAll(){
		return 'Fetched all from '. $this->pdo;
	}
}