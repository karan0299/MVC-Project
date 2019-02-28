<?php

	namespace Models ;

	class SignUp
	{
		public function __construct()
		{

		}

		public static function getDB()
		{
			include __DIR__."/../../configs/credentials.php" ;
			return new \PDO("mysql:dbname=".$db_connect['db_name'].";host=".$db_connect['server'] , $db_connect['username'] , $db_connect['password']) ;
		}

		public static function checkAndAddUser($username , $password)
		{
			$db = self::getDB();
			
			$checkUser = $db->prepare("SELECT * FROM users WHERE username = :username");
			$checkUser->execute(array(
				"username"=>$username
			)) ;
			$row = $checkUser->fetch(\PDO::FETCH_ASSOC);
			if($row)
			{
				return true;
			}
			else
			{
				$password_hash = hash('sha256', $password);
				$addUser = $db->prepare("INSERT INTO users (username, password) VALUES (:username, :password_hash)") ;
				$row = $addUser->execute(array(
					":username"=>$username,
					":password_hash"=>$password_hash
				));

				return false;
			}
		}
	}
?>