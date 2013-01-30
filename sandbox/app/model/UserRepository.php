<?php
namespace Marks;
use Nette;

Class UserRepository extends Repository
{
    public function authUser($Username, $Password)
    {
        return $this->connection->table('User')->where(array('Username' => $Username, 'Password' => 'md5('+$Password+')'));
    }
    
    public function insertUser($Username, $Password)
    {
        return $this->connection->table('User')->insert(array(
            'Username' => $Username,
            'Password' => $Password
        ));
    }
    
}
