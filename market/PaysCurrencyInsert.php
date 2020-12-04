<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\pays\PaysCurrency;

class PaysCurrencyInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PaysCurrency();

        $this->model->id = 2;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cbu = "";
        $this->model->cbu_sell = "";
        $this->model->bank = "";
        $this->model->bank_sell = "";
        $this->save();


        $this->model = new PaysCurrency();

        $this->model->id = 1;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->cbu = "";
        $this->model->cbu_sell = "";
        $this->model->bank = "";
        $this->model->bank_sell = "";
        $this->save();


    }

}
