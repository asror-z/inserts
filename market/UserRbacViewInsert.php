<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\user\UserRbacView;

class UserRbacViewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new UserRbacView();

        $this->model->id = 8;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 7;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 6;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 5;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 4;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 3;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = "";
        $this->model->page_view_type_ids = "";
        $this->model->page_view_ids = "";
        $this->save();


        $this->model = new UserRbacView();

        $this->model->id = 9;
        $this->model->sort = null;
        $this->model->name = 'mai';
        $this->model->title = 'mai';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->roles = [
            'seller',
        ];
        $this->model->page_view_type_ids = [
            '2057',
        ];
        $this->model->page_view_ids = "";
        $this->save();


    }

}
