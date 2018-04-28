<?php

include_once("model/Book.php");

class Model {
	public function getBookList()
	{
		return [
                "Jungle Book" => new Book("Jungle Book"),
                "Moonwalker" => new Book("Moonwalker"),
                "PHP for Dummies" => new Book("PHP for Dummies")
		    ];
	}
	
	public function getBook($title)
	{
		$allBooks = $this->getBookList();
		return $allBooks[$title];
	}
}
