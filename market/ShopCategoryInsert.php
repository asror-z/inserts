<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\shop\ShopCategory;

class ShopCategoryInsert extends ZInsert
{

    public function run()
    {

        $this->model = new ShopCategory();

        $this->model->id = 101036;
        $this->model->sort = 101036;
        $this->model->name = 'Аудио и видео техника';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'audiotrack';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101038;
        $this->model->sort = 101038;
        $this->model->name = 'Аудиотехника';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'volume_mute';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101046;
        $this->model->sort = 101046;
        $this->model->name = 'Посудомоечные машины';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'is_combination' => '0',
                'shop_option_type_id' => '450',
                'shop_option_branch_id' => '130',
            ],
            [
                'is_combination' => '0',
                'shop_option_type_id' => '450',
                'shop_option_branch_id' => '130',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101040;
        $this->model->sort = 101040;
        $this->model->name = 'Крупная техника для кухни';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101041;
        $this->model->sort = 101041;
        $this->model->name = 'Холодильники';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101042;
        $this->model->sort = 101042;
        $this->model->name = 'Смартфоны и умные часы';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'app_settings_alt';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101044;
        $this->model->sort = 101044;
        $this->model->name = 'Фотоаппараты';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'linked_camera';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101045;
        $this->model->sort = 101045;
        $this->model->name = 'Видеокамеры';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'switch_video';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101031;
        $this->model->sort = 101031;
        $this->model->name = 'Электроника';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'speaker';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101039;
        $this->model->sort = 101039;
        $this->model->name = 'Бытовая техника';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'devices';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101029;
        $this->model->sort = 101029;
        $this->model->name = 'Фото и видеокамеры';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'camera_alt';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101043;
        $this->model->sort = 101043;
        $this->model->name = 'Мобильные телефоны';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'stay_current_portrait';
        $this->model->shop_brand_ids = [
            '10',
            '11',
            '37',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101049;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'is_combination' => '0',
                'shop_option_type_id' => '444',
                'shop_option_branch_id' => '117',
            ],
            [
                'is_combination' => '1',
                'shop_option_type_id' => '462',
                'shop_option_branch_id' => '115',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101050;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '440',
                'shop_option_branch_id' => '116',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101051;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '10',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '439',
                'shop_option_branch_id' => '116',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101052;
        $this->model->sort = null;
        $this->model->name = 'Телефоны2';
        $this->model->title = 'Телефоны2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '10',
            '37',
            '46',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '444',
                'shop_option_branch_id' => '117',
            ],
            [
                'shop_option_type_id' => '464',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '440',
                'shop_option_branch_id' => '116',
            ],
            [
                'shop_option_type_id' => '465',
                'shop_option_branch_id' => '131',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101034;
        $this->model->sort = 101034;
        $this->model->name = 'фф';
        $this->model->title = 'фф';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = 'live_tv';
        $this->model->shop_brand_ids = "";
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = "";
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101028;
        $this->model->sort = 101028;
        $this->model->name = 'Смартфоны';
        $this->model->title = 'Смартфоны';
        $this->model->tranz = null;
        $this->model->accept = 1;
        $this->model->active = 1;
        $this->model->icon = ' phone_android';
        $this->model->shop_brand_ids = [
            '11',
            '15',
            '37',
            '46',
            '48',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '444',
                'shop_option_branch_id' => '117',
            ],
            [
                'shop_option_type_id' => '452',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '445',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '468',
                'shop_option_branch_id' => '134',
            ],
            [
                'shop_option_type_id' => '467',
                'shop_option_branch_id' => '134',
            ],
            [
                'shop_option_type_id' => '466',
                'shop_option_branch_id' => '134',
            ],
            [
                'shop_option_type_id' => '472',
                'shop_option_branch_id' => '136',
            ],
            [
                'shop_option_type_id' => '470',
                'shop_option_branch_id' => '136',
            ],
            [
                'shop_option_type_id' => '471',
                'shop_option_branch_id' => '136',
            ],
            [
                'shop_option_type_id' => '465',
                'shop_option_branch_id' => '131',
            ],
            [
                'shop_option_type_id' => '447',
                'shop_option_branch_id' => '131',
            ],
            [
                'shop_option_type_id' => '473',
                'shop_option_branch_id' => '140',
            ],
            [
                'shop_option_type_id' => '475',
                'shop_option_branch_id' => '140',
            ],
        ];
        $this->model->shop_category_id = 101042;
        $this->model->image = "";
        $this->save();


        $this->model = new ShopCategory();

        $this->model->id = 101053;
        $this->model->sort = null;
        $this->model->name = 'Смартфон 2';
        $this->model->title = 'Смартфон 2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = '';
        $this->model->shop_brand_ids = [
            '11',
            '37',
            '46',
        ];
        $this->model->shop_review_option_ids = "";
        $this->model->shop_option_type = [
            [
                'shop_option_type_id' => '464',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '462',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '463',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '449',
                'shop_option_branch_id' => '115',
            ],
            [
                'shop_option_type_id' => '444',
                'shop_option_branch_id' => '117',
            ],
            [
                'shop_option_type_id' => '452',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '438',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '437',
                'shop_option_branch_id' => '132',
            ],
            [
                'shop_option_type_id' => '476',
                'shop_option_branch_id' => '139',
            ],
            [
                'shop_option_type_id' => '477',
                'shop_option_branch_id' => '139',
            ],
            [
                'shop_option_type_id' => '460',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '483',
                'shop_option_branch_id' => '141',
            ],
            [
                'shop_option_type_id' => '459',
                'shop_option_branch_id' => '130',
            ],
            [
                'shop_option_type_id' => '446',
            ],
            [
                'shop_option_type_id' => '457',
            ],
            [
                'shop_option_type_id' => '445',
            ],
        ];
        $this->model->shop_category_id = null;
        $this->model->image = "";
        $this->save();


    }

}
