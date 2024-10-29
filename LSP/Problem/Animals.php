<?php
class Animal {
    public function hacerRuido() {
        echo "Hace un sonido";
    }
}

class Perro extends Animal {
    public function hacerRuido() {
        echo "Ladra";
    }
}

$animal = new Animal();
$animal->hacerRuido(); // Imprime: Hace un sonido

$perro = new Perro();
$animal->hacerRuido(); // Imprime: Hace un sonido (en vez de Ladra)