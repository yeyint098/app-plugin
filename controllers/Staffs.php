<?php namespace MMlinks\App\Controllers;

use BackendMenu;
use Backend\Classes\Controller;

/**
 * Staffs Back-end Controller
 */
class Staffs extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('MMlinks.App', 'app', 'staffs');
    }
}