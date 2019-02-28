<?php

	namespace Controllers ;
	use Models\Login ;

	class LoginController
	{
		protected $twig ;

		public function __construct()
		{
			$loader = new \Twig_Loader_Filesystem(__DIR__ . "/../views") ;
			$this->twig = new \Twig_Environment($loader) ;
		}

		public function get() {
			echo $this->twig->render("login.html",array(
							"title"=>"Login")) ;
		}

		public function post()
		{
			$username=$_POST['username'] ;
			$password=$_POST['password'] ;

			$result=Login::authenticate($username, $password);

			if($result)
			{
				echo $this->twig->render("final.html");
			}
			else
			{
				echo $this->twig->render("login.html" , array(
					"title"=>"Login",
					"error"=>"Invalid username or password"
				));
			}
		}
	}
?>