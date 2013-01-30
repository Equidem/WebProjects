<?php
namespace Marks;
use Nette;

Class MarkRepository extends Repository
{   
    public function getMarks($User_ID)
    {   
        return $this->connection->table('Mark')->where('User_ID', $User_ID);
    }
    
    public function insertMark($User_ID, $Subject_ID, $Value, $Points, $Compulsory)
    {
        return $this->connection->table('Mark')->insert(array(
            'User_ID' => $User_ID,
            'Subject_ID' => $Subject_ID,
            'Value' => $Value,
            'Points' => $Points,
            'Compulsory' => $Compulsory
        ));
    }
}
