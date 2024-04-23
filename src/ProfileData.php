class ProfileData{


    public $newFirstName ;
    public $newLastName;
    public $newGender ;
    public $newEmail  ;
    public $newPassword ;
    public $newProfile;
    public $newUserName;
    public $newAddress;
    public $newCity;
    public $newAboutMe;

    /**
    * @param $newFirstName
    * @param $newLastName
    * @param $newGender
    * @param $newEmail
    * @param $newPassword
    * @param $newProfile
    * @param $newUserName
    * @param $newAddress
    * @param $newCity
    * @param $newAboutMe
    */

    public function __construct($newFirstName, $newLastName, $newGender, $newEmail, $newPassword, $newProfile, $newUserName, $newAddress, $newCity, $newAboutMe)
    {
    $this->newFirstName = $newFirstName;
    $this->newLastName = $newLastName;
    $this->newGender = $newGender;
    $this->newEmail = $newEmail;
    $this->newPassword = $newPassword;
    $this->newProfile = $newProfile;
    $this->newUserName = $newUserName;
    $this->newAddress = $newAddress;
    $this->newCity = $newCity;
    $this->newAboutMe = $newAboutMe;
    }

    /**
    * @return mixed
    */
    public function getNewFirstName()
    {
    return $this->newFirstName;
    }

    /**
    * @param mixed $newFirstName
    */
    public function setNewFirstName($newFirstName)
    {
    $this->newFirstName = $newFirstName;
    }

    /**
    * @return mixed
    */
    public function getNewLastName()
    {
    return $this->newLastName;
    }

    /**
    * @param mixed $newLastName
    */
    public function setNewLastName($newLastName)
    {
    $this->newLastName = $newLastName;
    }

    /**
    * @return mixed
    */
    public function getNewGender()
    {
    return $this->newGender;
    }

    /**
    * @param mixed $newGender
    */
    public function setNewGender($newGender)
    {
    $this->newGender = $newGender;
    }

    /**
    * @return mixed
    */
    public function getNewEmail()
    {
    return $this->newEmail;
    }

    /**
    * @param mixed $newEmail
    */
    public function setNewEmail($newEmail)
    {
    $this->newEmail = $newEmail;
    }

    /**
    * @return mixed
    */
    public function getNewPassword()
    {
    return $this->newPassword;
    }

    /**
    * @param mixed $newPassword
    */
    public function setNewPassword($newPassword)
    {
    $this->newPassword = $newPassword;
    }

    /**
    * @return mixed
    */
    public function getNewProfile()
    {
    return $this->newProfile;
    }

    /**
    * @param mixed $newProfile
    */
    public function setNewProfile($newProfile)
    {
    $this->newProfile = $newProfile;
    }

    /**
    * @return mixed
    */
    public function getNewUserName()
    {
    return $this->newUserName;
    }

    /**
    * @param mixed $newUserName
    */
    public function setNewUserName($newUserName)
    {
    $this->newUserName = $newUserName;
    }

    /**
    * @return mixed
    */
    public function getNewAddress()
    {
    return $this->newAddress;
    }

    /**
    * @param mixed $newAddress
    */
    public function setNewAddress($newAddress)
    {
    $this->newAddress = $newAddress;
    }

    /**
    * @return mixed
    */
    public function getNewCity()
    {
    return $this->newCity;
    }

    /**
    * @param mixed $newCity
    */
    public function setNewCity($newCity)
    {
    $this->newCity = $newCity;
    }

    /**
    * @return mixed
    */
    public function getNewAboutMe()
    {
    return $this->newAboutMe;
    }

    /**
    * @param mixed $newAboutMe
    */
    public function setNewAboutMe($newAboutMe)
    {
    $this->newAboutMe = $newAboutMe;
    }


}