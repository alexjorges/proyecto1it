<?php
// esto es un adaptador para Carbon. Una clase personalizada para usar siempre que queramos.

namespace Lib;

use Carbon\Carbon;

class Dates {

    // fecha de hoy
    public static function today(){
        return Carbon::now();
    }

    public static function tomorrow(){
        return self::today()->addDays(1); //self llama al método today().
    }

    /* fecha en español*/ 
    public static function longDate($date) {
        Carbon::setlocale('es');
        return $date->isoFormat('dddd DD [de] MMMM');
    }

}


?>