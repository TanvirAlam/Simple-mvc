<?php
include_once("model/Model.php");

class Controller {
	public $model;
	
	public function __construct()  
    {  
        $this->model = new Model();
    } 
	
	public function invoke()
	{
		if (!isset($_GET['addbook']) || isset($_GET['cancel'])) {
            $books = $this->model->getBookList();
            include 'view/booklist.php';
        } else {
            include 'view/addbooklistform.php';
        }
	}
}

?>