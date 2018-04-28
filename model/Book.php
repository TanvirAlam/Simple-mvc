<?php
/*
 * This is a typical Model structure that reprent a table
 */
class Book {
    /**
     * @var $id, Title
     */
	protected $id;
    protected $title;

	public function __construct($id, $title)
    {  
        $this->id = $id;
        $this->title = $title;
    }
}
