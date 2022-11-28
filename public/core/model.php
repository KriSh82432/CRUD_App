<?php
   class model{
    public $user;
    public $fname;
    public $lname;
    public $newUser;
    public $age;
    public $eduQual;
    public $email;
    public $country;
    public $phone;
    public $website;
    public $address;
    public $userID;
    public function __construct()
    {
      $this->user = filter_input(INPUT_GET, "user", FILTER_UNSAFE_RAW);
      $this->fname = filter_input(INPUT_POST, "fname", FILTER_UNSAFE_RAW);
      $this->lname = filter_input(INPUT_POST, "lname", FILTER_UNSAFE_RAW);
      $this->newUser = filter_input(INPUT_POST, "username", FILTER_UNSAFE_RAW);
      $this->age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
      $this->eduQual = filter_input(INPUT_POST, "eduQualification", FILTER_UNSAFE_RAW);
      $this->email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
      $this->country = filter_input(INPUT_POST, "country", FILTER_UNSAFE_RAW);
      $this->phone = filter_input(INPUT_POST, "phone", FILTER_UNSAFE_RAW);
      $this->website = filter_input(INPUT_POST, "website", FILTER_UNSAFE_RAW);
      $this->address = filter_input(INPUT_POST, "address", FILTER_UNSAFE_RAW);
      $this->userID = filter_input(INPUT_GET, "userID", FILTER_UNSAFE_RAW);
    }
   }
?>
