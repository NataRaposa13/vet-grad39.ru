<?php

namespace vetgrad;

class ErrorHandler
{
	protected $pathLog = ROOT . '/tmp/errors.log';

	public function __construct()
	{
		if (DEBUG) {
			error_reporting(-1);
		}else{
			error_reporting(0);
		}
		set_exception_handler([$this, 'exceptionHandler']);
	}

	public function setPathLog(string $pathLog): void
	{
		if (file_exists($pathLog))
		{
			$this->pathLog = $pathLog;
		}
	}

	public function exceptionHandler($e)
	{
		$this->logErrors($e->getMessage(), $e->getFile(), $e->getLine());
		$this->displayError('Исключение', $e->getMessage(), $e->getFile(), $e->getLine(), $e->getCode());
	}

	protected function logErrors($message = '', $file = '', $line = '')
	{
		error_log (
			"[" . date('Y-m-d H:i:s') . "] Текст ошибки: {$message} | Файл: {$file} | Строка: {$line}\n-------\n",
			3,
			$this->pathLog);
	}

	protected function displayError($numberError, $textError, $fileError, $lineError, $response = 404)
	{
		http_response_code($response);
		if ($response == 404 && !DEBUG) {
			require WWW . '/errors/404/404.php';
			die;
		}
		if (DEBUG) {
			require WWW . '/errors/dev/dev.php';
		}else {
			require WWW . '/errors/prod/prod.php';
		}
		die;
	}
}