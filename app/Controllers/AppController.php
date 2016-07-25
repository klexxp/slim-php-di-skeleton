<?php

namespace App\Controller;

class ImageController
{
	protected $database;

	public function __construct(DatabaseInterface $database){
		$this->database = $database;
	}

	public function all(){
		return $this->database->fetchAll();
	}
}