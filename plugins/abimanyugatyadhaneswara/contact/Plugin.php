<?php namespace AbimanyuGatyaDhaneswara\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'AbimanyuGatyaDhaneswara\Contact\Components\ContactForm' => 'contactform'
        ];
    }

    public function registerSettings()
    {
    }
}
