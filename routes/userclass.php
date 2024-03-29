<?php // IDEA:
	require_once("helpers.php");

/**
 * 
 */
class User
{
	private $userName;
	private $userEmail;
	private $userID;
	private $status;

	public function __construct($newUser, $email)
	{
		$this->userName = $newUser;
		$this->userEmail = $email;
		$this->status = 1;
		$this->userID = GetNextUserID();
	}

	public function __destruct()
	{
		$this->userName = NULL;
		$this->userEmail = NULL;
		$this->status = NULL;
		$this->userID = NULL;	
	}

	public function GetUserName()
	{
		return $this->userName;
	}

	public function GetUserEmail()
	{
		return $this->userEmail;
	}

	public function GetUserID()
	{
		return $this->userID;
	}

	public function GetStatus()
	{
		return $this->status;
	}

	public function SetUserStatus($input)
	{
		if($input > 1 || $input < 0 ){
			return false;
		}
		$this->status = $input;
		return true;
	}
}

?>