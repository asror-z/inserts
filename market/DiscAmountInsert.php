<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\disc\DiscAmount;

class DiscAmountInsert extends ZInsert
{

    public function run()
    {

        $this->model = new DiscAmount();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->shop_catalog_ids = "";
        $this->model->min_amount = null;
        $this->model->max_amount = null;
        $this->model->kind = "";
        $this->model->number = null;
        $this->save();


        $this->model = new DiscAmount();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = null;
        $this->model->shop_catalog_ids = "";
        $this->model->min_amount = 1;
        $this->model->max_amount = 2;
        $this->model->kind = "";
        $this->model->number = 150;
        $this->save();


    }

}
