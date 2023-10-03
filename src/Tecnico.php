<?php 
namespace Jao;
class Tecnico extends Livro {
    private array $formato = ["digital", "fisico"];
    
    public function setFormato(array $formato): void 
    {
        $this->formato = $formato;
    } 

    // public function getFormato(): array  Formato array
    // {
    //     return $this->formato;
    // } 

    public function getFormato(): string
    {
        return implode("," ,$this->formato);
    }
}
?>