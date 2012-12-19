<?php 

/**
 * @author http://net.tutsplus.com/tutorials/php/understanding-and-applying-polymorphism-in-php/
 */


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

	/** 
	 * This is kind of an ugly solution, but it works — for now. 
	 * Ask yourself what happens in the future, though, when we want to add more formats? 
	 * You can keep editing the class, adding more and more cases, but now you’re only 
	 * diluting your class.
	 */
	
	public function write(poly_write_Write $write) {
		return $writer->write($this);
	}

}

// Define the Writer Interface Class
interface poly_write_Write {
	public function write(poly_base_Article $obj); // $obj is a type hint to restirct the type of the argument
}

/**
  * XMLWrite class implementation
  * This class implementing the Writer interface will be sure to have write() method.
  */
class poly_writer_XMLWriter implements poly_writer_Writer {
	public function write(poly_base_Article $obj) {
		$ret = '<article>';
		$ret .= '<article>' . $obj->title . '</title>';
		$ret .= '<author>' . $obj->author . '</author>';
		$ret .= '<date>' . $obj->date . '</date>';
		$ret .= '<category>' . $obj->category . '</category>';
		$ret .= '</article>';
		return $ret;
	}
}

class poly_writer_JSONWriter implements poly_writer_Writer {
	public function write(poly_base_Article $obj) {
		$array = array('article' => $obj);
		return json_encode($array);
	}
}



// How to obtain the Writer object
class poly_base_Factory {
	public static function getWriter() {
		// get request variable
		$class = 'poly_writer_' . $format . 'Writer';
		if (class_exists($class)) {
			// return a new Writer obj
			return new $class();
		}
		// otwrwise we fail
		throw new Exception('Unsoported format');
	}
}


// Let's put all together on the client code
$article = new poly_base_Article('Polymorphism', 'Steve', time(), 0);
try {
	$writer = poly_base_Factory::getWriter();
}
catch (Exception $e) {
	$writer = new poly_writer_XMLWriter(); // by default load this
}
echo $article->write($writer);



?>