<?php

namespace TutoS2\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class TutoS2UserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
