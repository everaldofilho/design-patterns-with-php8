<?php

namespace Patterns\Domain\FactoryMethod\DTO;

class ResultDTO
{
   public function __construct(
       public string $filter,
       public array $data
   )
   {
   }
}
