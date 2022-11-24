<?php

namespace App\DTO;
use JsonSerializable;

class LibroDTO implements JsonSerializable{

function __construct(private ?int $id, private string $titulo, private int $autor, private float $precio) 
{
    $this->id = $id;
    $this->titulo = $titulo;
    $this->autor = $autor;
    $this->precio = $precio;
}

public function id(): int {
    return $this->id;
}

public function titulo(): string {
    return $this->titulo;
}

public function autor(): int {
    return $this->autor;
}

public function precio(): float {
    return $this->precio;
}

function jsonSerialize(): mixed {
    return [
        'id' => $this->id,
        'titulo' => $this->titulo,
        'autor' => $this->autor,
        'precio' => $this->precio
    ];		
}
}