<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\ware\WareReturn;

class WareReturnInsert extends ZInsert
{

    public function run()
    {

        $this->model = new WareReturn();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'Возврат товаров №187';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->date = null;
        $this->model->shop_order_ids = "";
        $this->model->comment = '';
        $this->model->shop_courier_id = null;
        $this->model->responsible = 406;
        $this->model->total_price = 495000;
        $this->model->ware_id = 63;
        $this->model->status = 'delivered';
        $this->save();


    }

}
