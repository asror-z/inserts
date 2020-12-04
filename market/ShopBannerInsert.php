<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopBanner;

class ShopBannerInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopBanner();

        $this->model->id = 5;
        $this->model->sort = 5;
        $this->model->name = 'Banner_5';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'uz';
        $this->model->image = "";
        $this->model->link = 'https://en.wikipedia.org/wiki/Uzbekistan';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 7;
        $this->model->sort = 7;
        $this->model->name = 'Banner_7';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'lv';
        $this->model->image = "";
        $this->model->link = 'https://en.wikipedia.org/wiki/Latvia';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 6;
        $this->model->sort = 6;
        $this->model->name = 'Banner_6';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'en';
        $this->model->image = "";
        $this->model->link = 'https://en.wikipedia.org/wiki/English';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 3;
        $this->model->sort = 3;
        $this->model->name = 'Banner_3';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'ro';
        $this->model->image = "";
        $this->model->link = 'https://en.wikipedia.org/wiki/Romania';
        $this->model->common = null;
        $this->save();


        $this->model = new ShopBanner();

        $this->model->id = 8;
        $this->model->sort = 8;
        $this->model->name = 'aaa';
        $this->model->title = 'aaa';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->user_company_id = 133;
        $this->model->lang = 'uzk';
        $this->model->image = [
            'Fullscreen capture 4162020 10642 PM.bmp',
        ];
        $this->model->link = 'https://uz.wikipedia.org/wiki/Uzbekistan';
        $this->model->common = null;
        $this->save();


    }

}
