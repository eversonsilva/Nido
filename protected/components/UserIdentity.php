<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
	/**
	 * Authenticates a user.
	 * The example implementation makes sure if the username and password
	 * are both 'demo'.
	 * In practical applications, this should be changed to authenticate
	 * against some persistent user identity storage (e.g. database).
	 * @return boolean whether authentication succeeds.
	 */

	 private $id;
	 private $_model;
 
	 public function getId()
	 {
		 return $this->id;
	 }
 
	 public function setId($id)
	 {
		 $this->id = $id;
	 }

	public function authenticate()
	{
		$users=TblUser::model()->findByAttributes(['username'=>$this->username]);

		if($users == NULL)
			$this->errorCode=self::ERROR_USERNAME_INVALID;
		elseif($users->password!==$this->password)
			$this->errorCode=self::ERROR_PASSWORD_INVALID;
		else
			{
				$this->errorCode=self::ERROR_NONE;
				$this->id = $users->id;
			}
		return !$this->errorCode;
	}

	// protected function loadUser($id = null)
	// {
	// 	if($this->$_model == null)
	// 	{
	// 		if($id != null){
	// 			$this->$_model = TblUser::model()->findByPk($id);
	// 		}
	// 	}
	// 	return $this->$_model;
	// }

}