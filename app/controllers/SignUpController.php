<?php

	namespace Controllers ;
	use Models\SignUp ;

	class SignUpController
	{
		protected $twig ;

		public function __construct()
		{
			$loader = new \Twig_Loader_Filesystem(__DIR__ . "/../views") ;
			$this->twig = new \Twig_Environment($loader) ;
		}

		public function get() {
			echo $this->twig->render("signup.html",array(
							"title"=>"SignUp")) ;
		}

		public function post()
		{
			$username = $_POST['username'];
			$password = $_POST['password'];
			
			$result = SignUp::checkAndAddUser($username, $password) ;
			if($result)
			{
				echo $this->twig->render("signup.html",array(
					"title"=>"SignUp",
					"error"=>"User already exists"
				)) ;
			}
			else
			{
				header("Location: /login");
			}		
		}
	}
?>