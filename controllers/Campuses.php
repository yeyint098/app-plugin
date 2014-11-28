<?php namespace MMlinks\App\Controllers;
use BackendMenu;
use Backend\Classes\Controller;
use Flash;
/**
 * Campuses Back-end Controller
 */
class Campuses extends Controller
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

        BackendMenu::setContext('MMlinks.App', 'app', 'campuses');
    }

    public function index_onDelete()
    {
        if (($checkedIds = post('checked')) && is_array($checkedIds) && count($checkedIds)) {

            foreach ($checkedIds as $postId) {
                if (!$post = Campus::find($postId))
                    continue;

                $post->delete();
            }

            Flash::success('Successfully deleted those campus.');
        }

        return $this->listRefresh();
    }
}