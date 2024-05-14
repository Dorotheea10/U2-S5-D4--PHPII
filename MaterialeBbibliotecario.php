<?php

class MaterialeBibliotecario {
    protected static $contatoreMateriali = 0;
    protected $disponibili;

    public function __construct($disponibili) {
        $this->disponibili = $disponibili;
        self::$contatoreMateriali++;
    }

    public function presta() {
        if ($this->disponibili > 0) {
            $this->disponibili--;
            echo "Materiale prestato.\n";
        } else {
            echo "Nessun materiale disponibile.\n";
        }
    }

    public function restituisci() {
        $this->disponibili++;
        echo "Materiale restituito.\n";
    }

    public static function contaMateriali() {
        return self::$contatoreMateriali;
    }
}

?>
