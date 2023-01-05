<?php
namespace App\Domain\Entities;

final class ProductAttribute{
	private $_id;
	private $name;
	private $value;

	public function __construct($id, $name, $value)
	{
		$this->_id = $id;
		$this->name = $name;
		$this->value = $value;
	}

	public function getId(){
		return $this->_id;
	}

	public function getName(){
		return $this->name;
	}

	public function getValue(){
		return $this->value;
	}


}