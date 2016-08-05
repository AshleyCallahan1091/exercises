<?php 
class Log {

	private $filename;
	private $handle;

	public function getFilename()
	{
		return $this->filename;
	}

	public function getHandle()
	{
		return $this->handle;
	}
	
	public function __construct($prefix = "log-") {
		$this->handle = fopen($this->filename, 'a');
	}




	

	protected function handle($handle)
	{
		$this->handle = fopen($this->filename, 'a');
	}



	private function filename($prefix)
	{
		$this->filename = $prefix . date('Y-m-d') . '.log';
		if (touch($filename) || is_writable($filename)) {
			echo "This file $filename cannot be modified";

		}
	}

	



	public function logMessage($logLevel, $message) {
		$formattedMessage = date('Y-m-d') . "[$logLevel] $message";
		fwrite($this->getHandle(), $formattedMessage);
	}

		public function __destruct(){ 
		fclose($this->getHandle());
	}

	public function info($message) {
		$this->logMessage('INFO', $message);
	}

	public function error($message){
		$this->logMessage('ERROR', $message);
	}

}



