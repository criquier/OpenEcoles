<?php
/**
 * Created by PhpStorm.
 * User: Camille
 * Date: 28/01/14
 * Time: 22:45
 */

namespace OpenEcoles\WhatsupBundle\Services;


class PublicationTri {

    public function __construct(){

    }

    public function sortPublication(&$table){
        $this->qsort($table,0,count($table)-1);
    }

    public function switchs(&$table,$a,$b){
        $tmp = $table[$a];
        $table[$a] = $table[$b];
        $table[$b] = $tmp;
    }

    public function qsort(&$table,$debut,$fin){
        $gauche = $debut-1;
        $droite = $fin+1;
        $pivot = $table[$debut];
        if($debut >= $fin) return;
        while(1){
            do{
                $droite--;
            }while($table[$droite]->getDateCreation() > $pivot->getDateCreation());
            do{
                $gauche++;
            }while($table[$gauche]->getDateCreation() < $pivot->getDateCreation());

            if($gauche < $droite)
                 $this->swiths($table, $gauche, $droite);
            else break;
        }


        $this->qsort($table,($debut+$fin/2), $fin);
        $this->qsort($table,$debut, ($debut+$fin/2));
    }
} 