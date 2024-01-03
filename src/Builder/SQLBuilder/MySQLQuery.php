<?php 

namespace App\Builder\SQLBuilder;

use App\Builder\SQLBuilder\Interfaces\QueryBuilderInterface;

class MySQLQuery implements QueryBuilderInterface
{
    public $query;

    public function get()
    {
        return $this->query;
    }

    public function select( $database, $tables): self
    {   
        $this->query = "SELECT " . $tables[0] . ", " . $tables[1] . " FROM " . $database;
        return $this;
    }

    public function limit($limit, $offset): self
    {
        $this->query .= " LIMIT " . $limit . ", " . $offset; 
        return $this;
    }

    public function reset(): self
    {
        $this->query = "";
        return $this;
    }

    public function where(): self
    {

        return $this;
    }

}