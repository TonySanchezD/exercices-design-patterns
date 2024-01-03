<?php 

namespace App\Builder\SQLBuilder\Interfaces;

Interface QueryBuilderInterface
{
    public function get();
    public function select( $products,  $name): self;
    public function limit( $limit,  $offset): self;
    public function reset(): self;
    public function where(): self;
}