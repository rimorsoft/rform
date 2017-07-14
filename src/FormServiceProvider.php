<?php

namespace Rimorsoft\rForm;

use Form;
use Illuminate\Support\ServiceProvider;

class FormServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Form::component('rText',     'rimorsoft.components.form.text',    ['name', 'label', 'attributes']);
        Form::component('rTextarea', 'rimorsoft.components.form.textarea',['name', 'label', 'attributes']);
        Form::component('rSearch',   'rimorsoft.components.form.search',  ['name', 'route']);
        Form::component('rImage',    'rimorsoft.components.form.image',   ['name', 'label']);
        Form::component('rRadio',    'rimorsoft.components.form.radio',   ['name', 'label', 'items']);
        Form::component('rSelect',   'rimorsoft.components.form.select',  ['name', 'label', 'items']);
        Form::component('rSubmit',   'rimorsoft.components.form.submit',  ['label']);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'rimorsoft');
    }
}
