<?php

namespace Ejemplo\HolaMundo\Block;

use Magento\Framework\View\Element\Template;

class Hello extends Template
{
    public function __construct(Template\Context $context, 
            array $data = []
            ){
            parent::__construct($context, $data);
    }

    public function sayHello(){
        return "Hola Mundo de nuestro modulo";
    }
    
}
