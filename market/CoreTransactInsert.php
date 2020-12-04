<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreTransact;

class CoreTransactInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreTransact();

        $this->model->id = 18;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'zetsoft\\models\\shop\\ShopOrderCopy';
        $this->model->modelId = null;
        $this->model->is_new = null;
        $this->model->value = "";
        $this->model->session = '';
        $this->save();


        $this->model = new CoreTransact();

        $this->model->id = 19;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->models = 'zetsoft\\models\\shop\\ShopOrderCopy';
        $this->model->modelId = null;
        $this->model->is_new = 1;
        $this->model->value = "";
        $this->model->session = '';
        $this->save();


    }

}
