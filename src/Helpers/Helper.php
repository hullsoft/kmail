<?php

namespace HullSoft\Seat\Kmail\Helpers;

class Helper {
    static public function CheckDate($kmailDate){
        $date = new \DateTime($kmailDate);
        return $date('Y-m-d');
    }
    
}
