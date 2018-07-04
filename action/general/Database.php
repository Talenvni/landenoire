<?php namespace action\general;

use PDO;
use PDOException;
use PDOStatement;

class Database
{
	private static $instance;

	/**
	 * @return PDO database sign
	 */
	public static function getInstance()
	{
		if (! self::$instance) :
			try {
				self::$instance = new PDO('mysql:dbname=landenoire;host=localhost;charset=utf8', 'root', '');
				self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
			} catch (PDOException $e) {
				die('ERROR FROM DATABASE : ' . $e->getMessage());
			}
		endif;

		return self::$instance;
	}

	/**
	 * @param $query // SQL Request
	 * @param array|boolean $params
	 *
	 * @return PDOStatement
	 */
	public static function getQuery($query, $params = false)
	{
		if ($params != false) :
			$request = self::getInstance()->prepare($query);
			$request->execute($params);
		else :
			$request = self::getInstance()->prepare($query);
			$request->execute();
		endif;

		return $request;
	}

	/**
	 * @return string last ID insert
	 */
	public static function lastInsertId()
	{
		return self::getInstance()->lastInsertId();
	}
}
