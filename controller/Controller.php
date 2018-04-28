<?php

include_once("model/Model.php");

class Controller {
    /**
     * @var Model
     */
	private $model;

    /**
     * Controller constructor.
     */
	public function __construct()  
    {  
        $this->model = new Model();
    }

    /**
     * This is the main entry point for GUI
     * TODO: this is where routing comes in
     */
	public function invoke()
	{
	    //TODO: This is basic routing, we can always do more advance routing
        if (isset($_GET['addbook'])) {
            include 'view/addbooklistform.php';
        }

        if (isset($_GET['cancel'])) {
            $_GET['addbook'] = false;
        }

        if (isset($_GET['formSubmit'])) {
            $_GET['addbook'] = false;
            $this->model->saveBook($_REQUEST['book']);
        }

        if (isset($_GET['delete'])) {
            $this->model->deleteBook($_REQUEST['bookId']);
        }

        return $this->show();
    }

    /**
     * Returns main dashboard with list
     */
    public function show()
    {
        $books = $this->model->getBookList();
        include 'view/booklist.php';
    }
}
