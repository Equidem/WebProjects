<?php
namespace Marks;
use Nette;

Class SubjectRepository extends Repository
{
    public function getSubjects($User_ID)
    {
       return $this->connection->table('Subject')->where('User_ID', $User_ID);
    }
    
    public function insertSubject($User_ID, $System, $Title)
    {
        return $this->connection->table('Subject')->insert(array(
            'User_ID' => $User_ID,
            'Title' => $Title,
            'System' => $System
        ));
    }
}