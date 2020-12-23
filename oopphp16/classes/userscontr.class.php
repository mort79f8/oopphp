<?php

class UsersContr extends Users
{
    public function createUser($firstname, $lastname, $dateofbirth)
    {
        $this->setUser($firstname, $lastname, $dateofbirth);
    }
}
