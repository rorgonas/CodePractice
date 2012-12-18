<?php 

// Used naming convention is “package_component_Class.”
class poly_base_Article {

	public $title;
	public $author;
	public $date;
	public $category;

	public function __construct($title, $author, $date, $category = 0) {
		$this->title = $title;
		$this->author = $author;
		$this->date = $date;
		$this->category = $category;
	}

	/** This is kind of an ugly solution, but it works — for now. 
	  * Ask yourself what happens in the future, though, when we want to add more formats? 
	  * You can keep editing the class, adding more and more cases, but now you’re only 
	  * diluting your class.This is kind of an ugly solution, but it works — for now. 
	  * Ask yourself what happens in the future, though, when we want to add more formats? 
	  * You can keep editing the class, adding more and more cases, but now you’re only diluting your class.
	*/
	
	public function write($type) {
		$ret = '';
		switch ($type) {
			case 'XML':
				$ret = '<article>';
				$ret .= '<article>' . $obj->title . '</title>';
				$ret .= '<author>' . $obj->author . '</author>';
				$ret .= '<date>' . $obj->date . '</date>';
				$ret .= '<category>' . $obj->category . '</category>';
				$ret .= '</article>';
				break;

			case 'JSON':
				$array = array('article' => $obj);
				$ret = json_encode($array);
				break;
			
			default:
				# code...
				break;			
		}
		return $ret;

	}

}
















?>