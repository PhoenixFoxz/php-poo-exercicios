<?php 
require_once "Livro.php";
class Tecnico extends Livro {
    private array $formato = ["digital", "fisico"];
    
    public function setFormato(array $formato): void 
    {
        $this->formato = $formato;
    } 

    public function getFormato(): array
    {
        return $this->formato;
    } 
}
?>