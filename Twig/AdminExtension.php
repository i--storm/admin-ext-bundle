<?php

namespace Istorm\Bundle\AdminExtBundle\Twig;

class AdminExtension{

    public function getFilters()
    {
        return array();
    }

    public function getFunctions()
    {
        return array(
            new \Twig_SimpleFunction('admin_json_decode', array($this, 'jsonDecode'), array('is_safe' => array('html'))),
        );
    }

    public function getName()
    {
        return 'istorm_admin_twig_extensions';
    }

    public function jsonDecode($json){
        return json_decode($json,true);
    }

}