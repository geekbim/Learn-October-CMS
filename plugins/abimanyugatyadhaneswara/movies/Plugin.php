<?php namespace AbimanyuGatyaDhaneswara\Movies;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'AbimanyuGatyaDhaneswara\Movies\Components\Actors' => 'actors',
            'AbimanyuGatyaDhaneswara\Movies\Components\ActorForm' => 'actorform'
        ];
    }

    public function registerFormWidgets()
    {
        return [
            'AbimanyuGatyaDhaneswara\Movies\FormWidgets\Actorbox' => [
                'label' => 'Actorbox field',
                'code' => 'actorbox'
            ]
        ];
    }

    public function registerSettings()
    {
    }
}
