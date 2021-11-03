<?php

namespace Petrik\Composer1;

use Petrik\Composer1\Animals\Tiger;

class User {

    public function fun() {
        echo "Hello user\n";
    }

    public function fun2() : Tiger {
        return new TIger();
    }
}