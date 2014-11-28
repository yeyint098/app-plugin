<?php namespace MMlinks\App;

use System\Classes\PluginBase;
use Backend;
use BackendMenu;

/**
 * App Plugin Information File
 */
class Plugin extends PluginBase
{

    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'App',
            'description' => 'Student Information System',
            'author'      => 'MMlinks',
            'icon'        => 'icon-leaf'
        ];
    }

    public function registerPermissions()
    {
        return [
            'mmlinks.app.*'       => ['label' => 'Manage SIS Application'],

        ];
    }



     public function registerNavigation()
    {
        return [
            'app' => [
                'label'       => 'SIS',
                'url'         => Backend::url('mmlinks/app/campuses'),
                'icon'        => 'icon-graduation-cap',
                'permissions' => ['mmlinks.app.*'],
                'order'       => 400,
        
                'sideMenu'    =>[

                     'campuses'=>['label'   =>'Campus',
                                  'url'     =>Backend::url('mmlinks/app/campuses'),
                                  'icon'    =>'icon-university',
                                 ],
                     'academic year'=>['label'  =>'Academic Years',
                                        'url'   =>Backend::url('mmlinks/app/academicyears'),
                                        'icon'  =>'icon-calendar',
                       ],
                     'staff'=>['label'  =>'Staff',
                              'url'     =>Backend::url('mmlinks/app/staffs'),
                             'icon'  =>'icon-users',
                       ],
                     'grade'=>['label'  =>'Grade',
                               'url'     =>Backend::url('mmlinks/app/grades'),
                             'icon'  =>'icon-book',
                       ],
                     'student'=>['label'  =>'Student',
                               'url'     =>Backend::url('#'),
                             'icon'  =>'icon-graduation-cap',
                       ],

                     'subject'=>['label'  =>'Subject',
                               'url'     =>Backend::url('#'),
                             'icon'  =>'icon-book',
                       ],

                     'student marks'=>['label'  =>'Student Marks',
                               'url'     =>Backend::url('#'),
                             'icon'  =>'icon-list-ol',
                       ],
                     'student record'=>['label'  =>'Student Records',
                               'url'     =>Backend::url('#'),
                             'icon'  =>'icon-steam-square',
                       ],

                     'parents'=>['label'  =>'Parents',
                               'url'     =>Backend::url('#'),
                             'icon'  =>'icon-user',
                       ],


                     'administartion user'=>['label'  =>'Administartion User',
                               'url'     =>Backend::url('#'),
                             'icon'  =>'icon-rocket',
                       ],
                     'libiary'=>['label'  =>'Libiary',
                               'url'     =>Backend::url('#'),
                             'icon'  =>'icon-book',
                       ],


                                ],
                        
                    ]
               ];

   }

}
