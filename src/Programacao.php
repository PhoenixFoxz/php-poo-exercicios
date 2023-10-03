<?php
namespace Jao;

class Programacao extends Tecnico {
    private string $area;

    public function getArea(): string {
        return $this->area;
    }

    public function setArea(string $area): void {
        $this->area = $area;
    }
}