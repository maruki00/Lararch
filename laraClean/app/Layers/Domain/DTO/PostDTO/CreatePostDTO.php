<?php

namespace App\Layers\Doamin\DTO;



class CreatePostDTO{
    private int  $id;
    private string $name;
    private string $body;
    public function __construct(array $attributes=[]) {
        
    }
}