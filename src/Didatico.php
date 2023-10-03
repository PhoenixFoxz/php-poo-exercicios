<?php 
namespace Jao;

class Didatico extends Tecnico {
    private string $disciplina;
    private array $nivel = ["básico", "médio", "superior"];

    public function getDisciplina(): string {
        return $this->disciplina;
    }

    public function setDisciplina(string $disciplina): void {
        $this->disciplina = $disciplina;
    }

    public function getNivel(): array {
        return $this->nivel;
    }

    public function setNivel(array $nivel): void {
        $this->nivel = $nivel;
    }
}