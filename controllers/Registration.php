<?php
    require_once('../models/User.php');
?>
<?php 
    class Registration {
        private $request;

        public function __construct($request) {
            $this->request = $request;
        }

        public function getRequest() {
            return $this->request;
        }

        public function storeUser() {
            $dob = $this->request['year'] .'-'. $this->request['month'] .'-'. $this->request['date'];
            $name = $this->request['lastname'] .' '. $this->request['firstname'];
            $newUser = new User(
                $name,
                $this->request['email'],
                $this->request['password'],
                $dob,
                $this->request['gender']
            );
            $newUser->store();
        }
    }

    $registration = new Registration($_POST);
    $registration->storeUser();
?>