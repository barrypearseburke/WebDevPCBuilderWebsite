<?php
/**
 * 
 * @author Luca
 * @abstract this model is in charge of...
 * @version 1.0
 */
// includes the DB manager
include ("DB/pdoDBManager.php");
include ("DB/DAO/UsersDAO.php");
include_once("DB/DAO/Session.php");
class Model {
	// private variables
	private $DBManager = null;
	private $dbLink = null;
	private $usersDAO = null;
	public $session;
	// public variables
	public $str;
	public $date;
	public $userList;
	public $isUpdateUserFormVisible;
	public $userInfo;
	public $userID;
	public $errormessage ;
	public $showerror = False;
	public $showUpdateSuccessMessage = false;
	public $successUpdateMessage;
	public $bademailvar = false;
	public $returnvalue = true;
	public $partsList;
	
	public function __construct() {
		$this->DBManager = new pdoDBManager ();
		$this->DBManager->openConnection ();
		$this->usersDAO = new UsersDAO ( $this->DBManager );
	}

	public function login($username,$password){
		$returnvalue = $this->usersDAO->login($username, $password);
		if ($returnvalue == false) {
			$this->errormessage = BADEMAIL;
			$this->bademail();
		}

	}





	public function resetpw($fname, $lname, $email, $password)
	{
		$returnvalue = $this->usersDAO->resetpw($fname, $lname, $email, $password);

		if ($returnvalue == false) {
			$this->errormessage = MISMATCH;
			$this->bademail();
		}
		if ($returnvalue == true){
			$this->errormessage = SUCCESS_UPDATE_USER;
			$this->bademail();
			echo '<meta http-equiv="refresh" content="3;URL=\'index.php\'">';




		}
	}






	public function getparts($owner,$type,$name,$tdp,$info,$price){

		$this->partsList = $this->usersDAO->getparts($owner,$type,$name,$tdp,$info,$price);

	}

	public function newPart($owner,$type,$name,$tdp,$info,$price)
	{

		$this->usersDAO->newPart($owner,$type,$name,$tdp,$info,$price);
	}



	public function deleteUser($userId) {
		$this->usersDAO->delete ( $userId );
	}

	public function insertNewUser($fname, $lname, $email, $password)
	{
		$returnvalue = $this->usersDAO->insertNewUser($fname, $lname, $email, $password);
		if ($returnvalue == false) {
			$this->errormessage = REGAlREADY;
			$this->bademail();
		}
		if ($returnvalue == true){
			$this->errormessage = SUCCESS_ADD_USER;
			$this->bademail();
			echo '<meta http-equiv="refresh" content="3;URL=\'index.php\'">';




		}
	}


	
	public function setUpdateUserSuccessMessage($userID){
		$this->showUpdateSuccessMessage = True;
		$this->successUpdateMessage = SUCCESS_UPDATE_USER;
		$this->prepareUpdateUserForm($userID);
	}
	public function bademail(){
		$this->errormessage = $this->errormessage;
		$this->bademailvar = true;
	}

	public function __destruct() {
		$this->DBManager->closeConnection ();
	}

}

?>