<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageThemeType;

class PageThemeTypeInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageThemeType();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = 'eshop-uz';
        $this->model->title = 'Template1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = 'https://cdn2.editmysite.com/images/landing-pages/global/features/Website-Templates/designed-templates@2x.png';
        $this->model->check = '1';
        $this->save();


        $this->model = new PageThemeType();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = 'postershop';
        $this->model->title = 'Template2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->image = 'https://source.unsplash.com/FaPxZ88yZrw/400x300';
        $this->model->check = '1';
        $this->save();


    }

}