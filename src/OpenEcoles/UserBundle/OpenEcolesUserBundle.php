<?php

namespace OpenEcoles\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OpenEcolesUserBundle extends Bundle
{
    public function getParent(){
        return "FOSUserBundle";
    }
}
