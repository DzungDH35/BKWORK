<?php
    require_once('../database/connectdb.php');
?>
<?php
    class User {
        private $name;
        private $email;
        private $pwd;
        private $dob;
        private $gender;

        public function __construct($name, $email, $pwd, $dob, $gender) {
            $this->name = $name;
            $this->email = $email;
            $this->pwd = $pwd;
            $this->dob = $dob;
            $this->gender = $gender;
        }

        public function store() {
            $conn = $GLOBALS['dbConnection'];
            $hashPwd = password_hash($this->pwd, PASSWORD_BCRYPT);
            $query = "INSERT INTO `user`(`name`, `email`, `pwd`, `dob`, `gender`) VALUES ('$this->name','$this->email','$hashPwd','$this->dob','$this->gender')";
            try {
                $conn->query($query);
            }
            catch(Exception $error) {
                vardump($error);
                exit();
            }
        }
    }
?>