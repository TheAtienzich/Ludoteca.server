<?php
declare(strict_types=1);
class Juego
{
    public function __construct(
        private string $titulo,
        private string $categoria,
        private int $anio,
        private ?int $id = null
    ){
    }

    public function getTitulo(): string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): void
    {
        $this->titulo = $titulo;
    }

    public function getCategoria(): string
    {
        return $this->categoria;
    }

    public function setCategoria(string $categoria): void
    {
        $this->categoria = $categoria;
    }

    public function getAnio(): int
    {
        return $this->anio;
    }

    public function setAnio(int $anio): void
    {
        $this->anio = $anio;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }
}