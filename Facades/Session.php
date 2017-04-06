<?php

namespace IrishTitan\Handshake\Facades;

use IrishTitan\Handshake\Core\Facade;
use IrishTitan\Handshake\Core\Session as SessionCore;

class Session extends Facade
{

    /**
     * The class this facade represents.
     *
     * @var string
     */
    protected $class = SessionCore::class;

}