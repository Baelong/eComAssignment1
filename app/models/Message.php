<?php
namespace app\models;

class Message{
	public $message;
	public $email;
	public $IP;

	public function __construct($object = null){
		if($object == null)
			return;
		$this->email = $object->email;
		$this->message = $object->message;
		$this->IP = $object->IP;
	}

	/*read messages*/
	public static function read(){
		//open text file 
		$filename = 'resources/messages.txt';
		$messages = file($filename);
		
		foreach ($messages as $key => $value) {
			$object = json_decode($value);
			$msg = new \app\models\Message($object);
			$messages[$key] = $msg;
		}
		//return result
		return $messages;
	}

	/* write message  */
	public function write(){
		//json encode this object into $message
		$messageData = json_encode($this);
		//open the file 
		$filename = 'resources/messages.txt';
		$file_handle = fopen($filename, 'a'); //a for append
		//lock file for writing
		flock($file_handle, LOCK_EX);
		//write contents of $message & concat with '\n'
		fwrite($file_handle, $messageData . "\n");
		//release the exclusive access to the file
		flock($file_handle, LOCK_UN);
		//close the file handlre
		fclose($file_handle);
	}
}