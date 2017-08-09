<?php

namespace SymfonyCebu\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class SymfonyCebuUserBundle extends Bundle
{
	public function getParent()
    {
        return 'FOSUserBundle';
    }
}
