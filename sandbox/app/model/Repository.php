<?php
namespace Marks;
use Nette;

abstract class Repository extends Nette\Object{
    
    protected $connection;
    
    public function __construct(Nette\Database\Connection $connection)
    {
        $this->connection = $connection;
    }
}