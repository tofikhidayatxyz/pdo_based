<?php

namespace Core;

use Core\Database;

class System extends Database {


    public function login() {
       $query  = $this->query('SELECT * FROM user WHERE email = "demo@test.app"');

    }
}

new System();