<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreSession;

class CoreSessionInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreSession();

        $this->model->id = 173;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-ShopShipment-/crud/shop-shipment/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    270
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:22:13';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 129;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 13:49:21';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 177;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-ShopOptionType-/crud/shop-option-type/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    478
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:44:14';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 146;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopBrand-/crud/shop-brand/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"location\\\": null,
            \\\"image\\\": null,
            \\\"rating\\\": null,
            \\\"user_company_id\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopBrand\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:59:17';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 151;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOption-/crud/shop-option/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_option_type_id\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOption\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:00:00';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 187;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopOrder';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"name\\\",
                        \\\"code\\\"
                    ],
                    [
                        \\\"date\\\",
                        \\\"responsible\\\"
                    ],
                    [
                        \\\"user_id\\\",
                        \\\"contact_name\\\"
                    ],
                    [
                        \\\"contact_phone\\\",
                        \\\"add_contact_phone\\\",
                        \\\"called_time\\\"
                    ],
                    [
                        \\\"comment_user\\\",
                        \\\"place_adress_id\\\"
                    ],
                    [
                        \\\"distance\\\",
                        \\\"user_company_ids\\\"
                    ],
                    [
                        \\\"ware_ids\\\",
                        \\\"operator\\\"
                    ],
                    [
                        \\\"comment_agent\\\",
                        \\\"tasks\\\"
                    ],
                    [
                        \\\"source\\\",
                        \\\"shop_reject_cause_id\\\"
                    ],
                    [
                        \\\"status_client\\\",
                        \\\"status_callcenter\\\"
                    ],
                    [
                        \\\"status_accept\\\",
                        \\\"date_deliver\\\",
                        \\\"time_deliver\\\"
                    ],
                    [
                        \\\"date_approve\\\",
                        \\\"date_return\\\"
                    ],
                    [
                        \\\"delayed_deliver_date\\\",
                        \\\"weight_plan\\\"
                    ],
                    [
                        \\\"shop_delay_id\\\",
                        \\\"shop_delay_cause_id\\\"
                    ],
                    [
                        \\\"packaging\\\",
                        \\\"labelled\\\"
                    ],
                    [
                        \\\"fragile\\\",
                        \\\"weight\\\"
                    ],
                    [
                        \\\"volume\\\",
                        \\\"shop_shipment_id\\\"
                    ],
                    [
                        \\\"price\\\",
                        \\\"deliver_price\\\"
                    ],
                    [
                        \\\"total_price\\\",
                        \\\"shop_coupon_id\\\"
                    ],
                    [
                        \\\"shop_channel_id\\\",
                        \\\"payment_type\\\"
                    ],
                    [
                        \\\"additional_payment_type\\\",
                        \\\"additional_received_money\\\"
                    ],
                    [
                        \\\"additional_deliver\\\",
                        \\\"prepayment\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:24:02';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 188;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopOrder';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": true,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": true,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": false,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"\\u0417\\u0430\\u043a\\u0430\\u0437 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430 \\u2116{number} \\u043e\\u0442 {created_at}. \\u0424.\\u0418.\\u041e {contact_name}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": {
        \\\"User\\\": {
            \\\"user_id\\\": \\\"id\\\",
            \\\"responsible\\\": \\\"id\\\",
            \\\"operator\\\": \\\"id\\\"
        },
        \\\"ShopOrder\\\": {
            \\\"parent\\\": \\\"id\\\",
            \\\"children\\\": \\\"id\\\"
        },
        \\\"PlaceAdress\\\": {
            \\\"place_adress_id\\\": \\\"id\\\"
        },
        \\\"PlaceRegion\\\": {
            \\\"place_region_id\\\": \\\"id\\\"
        },
        \\\"UserCompany\\\": {
            \\\"source\\\": \\\"id\\\"
        },
        \\\"ShopRejectCause\\\": {
            \\\"shop_reject_cause_id\\\": \\\"id\\\"
        },
        \\\"ShopDelay\\\": {
            \\\"shop_delay_id\\\": \\\"id\\\"
        },
        \\\"ShopDelayCause\\\": {
            \\\"shop_delay_cause_id\\\": \\\"id\\\"
        },
        \\\"ShopPackaging\\\": {
            \\\"packaging\\\": \\\"id\\\"
        },
        \\\"ShopShipment\\\": {
            \\\"shop_shipment_id\\\": \\\"id\\\"
        },
        \\\"ShopCoupon\\\": {
            \\\"shop_coupon_id\\\": \\\"id\\\"
        },
        \\\"ShopChannel\\\": {
            \\\"shop_channel_id\\\": \\\"id\\\"
        }
    },
    \\\"hasMulti\\\": {
        \\\"UserCompany\\\": {
            \\\"user_company_ids\\\": \\\"id\\\"
        },
        \\\"ShopElement\\\": {
            \\\"shop_element_ids\\\": \\\"id\\\"
        },
        \\\"Ware\\\": {
            \\\"ware_ids\\\": \\\"id\\\"
        }
    },
    \\\"hasMany\\\": {
        \\\"ShopOrder\\\": {
            \\\"parent\\\": \\\"id\\\",
            \\\"children\\\": \\\"id\\\"
        },
        \\\"ShopOrderItem\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        },
        \\\"ShopPayment\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        },
        \\\"CallsCdr\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        },
        \\\"CallsCel\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        },
        \\\"CallsOrder\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        },
        \\\"CallsRecord\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        },
        \\\"CallsUserman\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        },
        \\\"CpasTracker\\\": {
            \\\"shop_order_id\\\": \\\"id\\\"
        }
    },
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [
        \\\"company_ids\\\"
    ],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": {
        \\\"shop_order_id\\\": \\\"ShopOrderItem\\\",
        \\\"parent\\\": \\\"ShopOrder\\\",
        \\\"id\\\": \\\"ShopOrder\\\"
    },
    \\\"relateMulti\\\": {
        \\\"shop_order_id\\\": \\\"ShopOrderItem\\\"
    },
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [
        \\\"active\\\"
    ],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u0417\\u0430\\u043a\\u0430\\u0437\\u044b\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": true,
    \\\"changeSave\\\": true,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:24:02';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 200;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopElement';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"id\\\",
                        \\\"name\\\",
                        \\\"shop_product_id\\\",
                        \\\"barcode_type\\\",
                        \\\"barcode\\\",
                        \\\"shop_option_ids\\\",
                        \\\"active\\\",
                        \\\"deleted_at\\\",
                        \\\"deleted_by\\\",
                        \\\"deleted_text\\\",
                        \\\"created_at\\\",
                        \\\"modified_at\\\",
                        \\\"created_by\\\",
                        \\\"modified_by\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:25:32';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 135;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": \\\"dp-1\\\",
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"package\\\": null,
            \\\"shop_option\\\": null,
            \\\"text\\\": null,
            \\\"image\\\": null,
            \\\"shop_option_ids\\\": null,
            \\\"shop_brand_id\\\": null,
            \\\"related\\\": null,
            \\\"shelf_life\\\": null,
            \\\"shelf_life_unit\\\": null,
            \\\"weight\\\": null,
            \\\"size\\\": null,
            \\\"offer\\\": null,
            \\\"rating\\\": null,
            \\\"measure\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopProduct\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 14:07:38';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 130;
        $this->model->sort = null;
        $this->model->name = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 13:51:18';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 180;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop-order/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"code\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"number\\\": null,
            \\\"user_id\\\": null,
            \\\"parent\\\": null,
            \\\"children\\\": null,
            \\\"contact_name\\\": null,
            \\\"status_universal\\\": null,
            \\\"contact_phone\\\": null,
            \\\"add_contact_phone\\\": null,
            \\\"date\\\": null,
            \\\"comment_user\\\": null,
            \\\"responsible\\\": null,
            \\\"place_adress_id\\\": null,
            \\\"place_region_id\\\": null,
            \\\"distance\\\": null,
            \\\"user_company_ids\\\": null,
            \\\"operator\\\": null,
            \\\"comment_agent\\\": null,
            \\\"tasks\\\": null,
            \\\"source\\\": null,
            \\\"source_type\\\": null,
            \\\"called_time\\\": null,
            \\\"shop_reject_cause_id\\\": null,
            \\\"cpas_track\\\": null,
            \\\"status_client\\\": null,
            \\\"status_callcenter\\\": null,
            \\\"status_autodial\\\": null,
            \\\"status_logistics\\\": null,
            \\\"status_accept\\\": null,
            \\\"status_deliver\\\": null,
            \\\"date_deliver\\\": null,
            \\\"time_deliver\\\": null,
            \\\"date_approve\\\": null,
            \\\"date_return\\\": null,
            \\\"delayed_deliver_date\\\": null,
            \\\"shop_delay_id\\\": null,
            \\\"shop_delay_cause_id\\\": null,
            \\\"packaging\\\": null,
            \\\"labelled\\\": null,
            \\\"fragile\\\": null,
            \\\"weight\\\": null,
            \\\"weight_plan\\\": null,
            \\\"volume\\\": null,
            \\\"shop_shipment_id\\\": null,
            \\\"price\\\": null,
            \\\"prepayment\\\": null,
            \\\"deliver_price\\\": null,
            \\\"total_price\\\": null,
            \\\"shop_coupon_id\\\": null,
            \\\"shop_channel_id\\\": null,
            \\\"payment_type\\\": null,
            \\\"additional_payment_type\\\": null,
            \\\"additional_deliver\\\": null,
            \\\"additional_received_money\\\": null,
            \\\"accepted\\\": null,
            \\\"shop_element_ids\\\": null,
            \\\"ware_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:21:41';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 147;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCatalog-/crud/shop-catalog/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"guid\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"parent\\\": null,
            \\\"shop_element_id\\\": null,
            \\\"currency\\\": null,
            \\\"price\\\": null,
            \\\"amount\\\": null,
            \\\"available\\\": null,
            \\\"price_old\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopCatalog\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:59:22';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 152;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionBranch-/crud/shop-option-branch/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"show\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOptionBranch\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:00:00';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 154;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop-order/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"code\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"number\\\": null,
            \\\"user_id\\\": null,
            \\\"parent\\\": null,
            \\\"children\\\": null,
            \\\"contact_name\\\": null,
            \\\"status_universal\\\": null,
            \\\"contact_phone\\\": null,
            \\\"add_contact_phone\\\": null,
            \\\"date\\\": null,
            \\\"comment_user\\\": null,
            \\\"responsible\\\": null,
            \\\"place_adress_id\\\": null,
            \\\"place_region_id\\\": null,
            \\\"distance\\\": null,
            \\\"user_company_ids\\\": null,
            \\\"operator\\\": null,
            \\\"comment_agent\\\": null,
            \\\"tasks\\\": null,
            \\\"source\\\": null,
            \\\"source_type\\\": null,
            \\\"called_time\\\": null,
            \\\"shop_reject_cause_id\\\": null,
            \\\"cpas_track\\\": null,
            \\\"status_client\\\": null,
            \\\"status_callcenter\\\": null,
            \\\"status_autodial\\\": null,
            \\\"status_logistics\\\": null,
            \\\"status_accept\\\": null,
            \\\"status_deliver\\\": null,
            \\\"date_deliver\\\": null,
            \\\"time_deliver\\\": null,
            \\\"date_approve\\\": null,
            \\\"date_return\\\": null,
            \\\"delayed_deliver_date\\\": null,
            \\\"shop_delay_id\\\": null,
            \\\"shop_delay_cause_id\\\": null,
            \\\"packaging\\\": null,
            \\\"labelled\\\": null,
            \\\"fragile\\\": null,
            \\\"weight\\\": null,
            \\\"weight_plan\\\": null,
            \\\"volume\\\": null,
            \\\"shop_shipment_id\\\": null,
            \\\"price\\\": null,
            \\\"prepayment\\\": null,
            \\\"deliver_price\\\": null,
            \\\"total_price\\\": null,
            \\\"shop_coupon_id\\\": null,
            \\\"shop_channel_id\\\": null,
            \\\"payment_type\\\": null,
            \\\"additional_payment_type\\\": null,
            \\\"additional_deliver\\\": null,
            \\\"additional_received_money\\\": null,
            \\\"accepted\\\": null,
            \\\"shop_element_ids\\\": null,
            \\\"ware_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:00:03';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 140;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopOptionType';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"name\\\",
                        \\\"title\\\",
                        \\\"shop_option_branch_id\\\",
                        \\\"show\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 14:10:39';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 189;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop_order/system-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"code\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"number\\\": null,
            \\\"user_id\\\": null,
            \\\"parent\\\": null,
            \\\"children\\\": null,
            \\\"contact_name\\\": null,
            \\\"status_universal\\\": null,
            \\\"contact_phone\\\": null,
            \\\"add_contact_phone\\\": null,
            \\\"date\\\": null,
            \\\"comment_user\\\": null,
            \\\"responsible\\\": null,
            \\\"place_adress_id\\\": null,
            \\\"place_region_id\\\": null,
            \\\"distance\\\": null,
            \\\"user_company_ids\\\": null,
            \\\"operator\\\": null,
            \\\"comment_agent\\\": null,
            \\\"tasks\\\": null,
            \\\"source\\\": null,
            \\\"source_type\\\": null,
            \\\"called_time\\\": null,
            \\\"shop_reject_cause_id\\\": null,
            \\\"cpas_track\\\": null,
            \\\"status_client\\\": null,
            \\\"status_callcenter\\\": null,
            \\\"status_autodial\\\": null,
            \\\"status_logistics\\\": null,
            \\\"status_accept\\\": null,
            \\\"status_deliver\\\": null,
            \\\"date_deliver\\\": null,
            \\\"time_deliver\\\": null,
            \\\"date_approve\\\": null,
            \\\"date_return\\\": null,
            \\\"delayed_deliver_date\\\": null,
            \\\"shop_delay_id\\\": null,
            \\\"shop_delay_cause_id\\\": null,
            \\\"packaging\\\": null,
            \\\"labelled\\\": null,
            \\\"fragile\\\": null,
            \\\"weight\\\": null,
            \\\"weight_plan\\\": null,
            \\\"volume\\\": null,
            \\\"shop_shipment_id\\\": null,
            \\\"price\\\": null,
            \\\"prepayment\\\": null,
            \\\"deliver_price\\\": null,
            \\\"total_price\\\": null,
            \\\"shop_coupon_id\\\": null,
            \\\"shop_channel_id\\\": null,
            \\\"payment_type\\\": null,
            \\\"additional_payment_type\\\": null,
            \\\"additional_deliver\\\": null,
            \\\"additional_received_money\\\": null,
            \\\"accepted\\\": null,
            \\\"shop_element_ids\\\": null,
            \\\"ware_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:24:28';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 202;
        $this->model->sort = null;
        $this->model->name = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:25:54';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 131;
        $this->model->sort = null;
        $this->model->name = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 13:51:24';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 181;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop-order/index-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"code\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"number\\\": null,
            \\\"user_id\\\": null,
            \\\"parent\\\": null,
            \\\"children\\\": null,
            \\\"contact_name\\\": null,
            \\\"status_universal\\\": null,
            \\\"contact_phone\\\": null,
            \\\"add_contact_phone\\\": null,
            \\\"date\\\": null,
            \\\"comment_user\\\": null,
            \\\"responsible\\\": null,
            \\\"place_adress_id\\\": null,
            \\\"place_region_id\\\": null,
            \\\"distance\\\": null,
            \\\"user_company_ids\\\": null,
            \\\"operator\\\": null,
            \\\"comment_agent\\\": null,
            \\\"tasks\\\": null,
            \\\"source\\\": null,
            \\\"source_type\\\": null,
            \\\"called_time\\\": null,
            \\\"shop_reject_cause_id\\\": null,
            \\\"cpas_track\\\": null,
            \\\"status_client\\\": null,
            \\\"status_callcenter\\\": null,
            \\\"status_autodial\\\": null,
            \\\"status_logistics\\\": null,
            \\\"status_accept\\\": null,
            \\\"status_deliver\\\": null,
            \\\"date_deliver\\\": null,
            \\\"time_deliver\\\": null,
            \\\"date_approve\\\": null,
            \\\"date_return\\\": null,
            \\\"delayed_deliver_date\\\": null,
            \\\"shop_delay_id\\\": null,
            \\\"shop_delay_cause_id\\\": null,
            \\\"packaging\\\": null,
            \\\"labelled\\\": null,
            \\\"fragile\\\": null,
            \\\"weight\\\": null,
            \\\"weight_plan\\\": null,
            \\\"volume\\\": null,
            \\\"shop_shipment_id\\\": null,
            \\\"price\\\": null,
            \\\"prepayment\\\": null,
            \\\"deliver_price\\\": null,
            \\\"total_price\\\": null,
            \\\"shop_coupon_id\\\": null,
            \\\"shop_channel_id\\\": null,
            \\\"payment_type\\\": null,
            \\\"additional_payment_type\\\": null,
            \\\"additional_deliver\\\": null,
            \\\"additional_received_money\\\": null,
            \\\"accepted\\\": null,
            \\\"shop_element_ids\\\": null,
            \\\"ware_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:22:16';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 170;
        $this->model->sort = null;
        $this->model->name = 'Provider-UserRbacView-/crud/user_rbac_view/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"roles\\\": null,
            \\\"page_view_type_ids\\\": null,
            \\\"page_view_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\user\\\\UserRbacView\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:20:23';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 126;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 13:48:09';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 142;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"sort\\\"
                    ],
                    [
                        \\\"name\\\"
                    ],
                    [
                        \\\"icon\\\"
                    ],
                    [
                        \\\"shop_brand_ids\\\"
                    ],
                    [
                        \\\"shop_review_option_ids\\\"
                    ],
                    [
                        \\\"shop_option_type\\\"
                    ],
                    [
                        \\\"parent_id\\\"
                    ],
                    [
                        \\\"image\\\"
                    ],
                    [
                        \\\"active\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:35:59';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 148;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCatalogWare-/crud/shop-catalog-ware/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_catalog_id\\\": null,
            \\\"ware_id\\\": null,
            \\\"best_before\\\": null,
            \\\"amount\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopCatalogWare\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:59:26';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 172;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopShipment';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": 1,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": 1,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": false,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"\\u041d\\u043e\\u043c\\u0435\\u0440\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"\\u041f\\u0435\\u0440\\u0435\\u0434\\u0430\\u0447\\u0430 \\u0437\\u0430\\u043a\\u0430\\u0437\\u043e\\u0432 \\u0432 \\u043f\\u043e\\u0434\\u043e\\u0442\\u0447\\u0435\\u0442 \\u043a\\u0443\\u0440\\u044c\\u0435\\u0440\\u0443 {id} \\u043e\\u0442 {created_at}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": {},
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": {
        \\\"ShopCourier\\\": {
            \\\"shop_courier_id\\\": \\\"id\\\"
        },
        \\\"User\\\": {
            \\\"responsible\\\": \\\"id\\\"
        }
    },
    \\\"hasMulti\\\": {
        \\\"WarePlace\\\": {
            \\\"ware_place_ids\\\": \\\"id\\\"
        },
        \\\"UserPlace\\\": {
            \\\"user_place_ids\\\": \\\"id\\\"
        }
    },
    \\\"hasMany\\\": {
        \\\"ShopOrder\\\": {
            \\\"shop_shipment_id\\\": \\\"id\\\"
        },
        \\\"WareAccept\\\": {
            \\\"shop_shipment_id\\\": \\\"id\\\"
        }
    },
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [
        \\\"date\\\"
    ],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u0414\\u043e\\u0441\\u0442\\u0430\\u0432\\u043a\\u0430 \\u0437\\u0430\\u043a\\u0430\\u0437\\u043e\\u0432\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": true,
    \\\"changeSave\\\": true,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:21:49';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 159;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopProduct';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": true,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": false,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": true,
    \\\"indexSearch\\\": true,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"{title}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": {
        \\\"UserCompany\\\": {
            \\\"user_company_id\\\": \\\"id\\\"
        },
        \\\"ShopCategory\\\": {
            \\\"shop_category_id\\\": \\\"id\\\"
        },
        \\\"ShopBrand\\\": {
            \\\"shop_brand_id\\\": \\\"id\\\"
        }
    },
    \\\"hasMulti\\\": {
        \\\"ShopOption\\\": {
            \\\"shop_option_ids\\\": \\\"id\\\"
        },
        \\\"1\\\": {
            \\\"related\\\": \\\"id\\\"
        }
    },
    \\\"hasMany\\\": {
        \\\"ShopCoupon\\\": {
            \\\"min_price_order\\\": \\\"id\\\",
            \\\"shop_product_id\\\": \\\"id\\\"
        },
        \\\"ShopElement\\\": {
            \\\"shop_product_id\\\": \\\"id\\\"
        },
        \\\"ShopOverview\\\": {
            \\\"shop_product_id\\\": \\\"id\\\"
        },
        \\\"ShopQuestion\\\": {
            \\\"shop_product_id\\\": \\\"id\\\"
        },
        \\\"ShopReview\\\": {
            \\\"shop_product_id\\\": \\\"id\\\"
        }
    },
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [
        \\\"shop_option\\\"
    ],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u041f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u044b\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": true,
    \\\"changeSave\\\": true,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": [
        \\\"\\u0421\\u041f\\u0420\\u0410\\u0412\\u041e\\u0427\\u041d\\u0418\\u041a \\u041d\\u041e\\u041c\\u0415\\u041d\\u041a\\u041b\\u0410\\u0422\\u0423\\u0420\\u0410\\\"
    ],
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:02:23';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 141;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopOptionType';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": true,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": false,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": false,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"{title}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": {
        \\\"ShopOptionBranch\\\": {
            \\\"shop_option_branch_id\\\": \\\"id\\\"
        }
    },
    \\\"hasMulti\\\": [],
    \\\"hasMany\\\": {
        \\\"ShopOption\\\": {
            \\\"shop_option_type_id\\\": \\\"id\\\"
        }
    },
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u041f\\u0430\\u0440\\u0430\\u043c\\u0435\\u0442\\u0440\\u044b \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u0430\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": null,
    \\\"changeSave\\\": null,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 14:10:39';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 138;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-Menu-/crud/menu/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    19,
    5
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 14:08:52';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 204;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-Menu-/crud/menu/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '[
    18
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:26:01';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 127;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 13:48:22';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 153;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionType-/crud/shop-option-type/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_option_branch_id\\\": null,
            \\\"show\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOptionType\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:00:01';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 155;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrderItem-/crud/shop-order-item/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_order_id\\\": null,
            \\\"ware_id\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_catalog_id\\\": null,
            \\\"best_before\\\": null,
            \\\"ware_return_id\\\": null,
            \\\"amount\\\": null,
            \\\"amount_partial\\\": null,
            \\\"amount_return\\\": null,
            \\\"price\\\": null,
            \\\"price_all\\\": null,
            \\\"price_all_partial\\\": null,
            \\\"price_all_return\\\": null,
            \\\"accepted\\\": null,
            \\\"check_return\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrderItem\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:00:03';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 144;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopBanner-/crud/shop-banner/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"lang\\\": null,
            \\\"image\\\": null,
            \\\"link\\\": null,
            \\\"common\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopBanner\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:59:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 164;
        $this->model->sort = null;
        $this->model->name = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'b540f1a9447588d59ba4375b9498d1b5fca06e7600ce7b8c38ccbd18767d9f97';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:17:00';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 165;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'b540f1a9447588d59ba4375b9498d1b5fca06e7600ce7b8c38ccbd18767d9f97';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:17:01';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 182;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop-element/index-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_product_id\\\": null,
            \\\"barcode\\\": null,
            \\\"barcode_type\\\": null,
            \\\"option_combine\\\": null,
            \\\"option_simple\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopElement\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:22:19';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 258;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopOptionType';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\",
                        \"title\",
                        \"shop_option_branch_id\",
                        \"show\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:00:39';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 139;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionType-/shop/seller/shop_option_type/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_option_branch_id\\\": null,
            \\\"show\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOptionType\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 14:10:19';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 128;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 13:49:00';
        $this->model->user_id = 406;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 168;
        $this->model->sort = null;
        $this->model->name = 'cards_UserRbacView';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"id\\\",
                        \\\"name\\\",
                        \\\"roles\\\",
                        \\\"active\\\",
                        \\\"page_view_folder_ids\\\",
                        \\\"page_view_ids\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:19:48';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 149;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCategory-/crud/shop-category/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"icon\\\": null,
            \\\"shop_brand_ids\\\": null,
            \\\"shop_review_option_ids\\\": null,
            \\\"shop_option_type\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"image\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopCategory\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:59:30';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 174;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopBanner';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"name\\\",
                        \\\"user_company_id\\\",
                        \\\"shop_element_id\\\",
                        \\\"amount\\\",
                        \\\"price\\\",
                        \\\"price_old\\\",
                        \\\"currency\\\",
                        \\\"price_base\\\",
                        \\\"available\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:22:39';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 143;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": true,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": false,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": false,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"{title}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": true,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": {
        \\\"ShopCategory\\\": {
            \\\"shop_category_id\\\": \\\"id\\\"
        }
    },
    \\\"hasMulti\\\": {
        \\\"ShopBrand\\\": {
            \\\"shop_brand_ids\\\": \\\"id\\\"
        },
        \\\"ShopReviewOption\\\": {
            \\\"shop_review_option_ids\\\": \\\"id\\\"
        }
    },
    \\\"hasMany\\\": {
        \\\"ShopCategory\\\": {
            \\\"shop_category_id\\\": \\\"id\\\"
        },
        \\\"ShopCoupon\\\": {
            \\\"shop_category_id\\\": \\\"id\\\"
        },
        \\\"ShopProduct\\\": {
            \\\"shop_category_id\\\": \\\"id\\\"
        },
        \\\"ShopProductNew\\\": {
            \\\"shop_category_id\\\": \\\"id\\\"
        }
    },
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [
        \\\"shop_option_type\\\"
    ],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": true,
    \\\"changeSave\\\": true,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:35:59';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 145;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop-product/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"package\\\": null,
            \\\"shop_option\\\": null,
            \\\"text\\\": null,
            \\\"image\\\": null,
            \\\"shop_option_ids\\\": null,
            \\\"shop_brand_id\\\": null,
            \\\"related\\\": null,
            \\\"shelf_life\\\": null,
            \\\"shelf_life_unit\\\": null,
            \\\"weight\\\": null,
            \\\"size\\\": null,
            \\\"offer\\\": null,
            \\\"rating\\\": null,
            \\\"measure\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopProduct\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"image\\\": 4,
            \\\"id\\\": 4
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:59:14';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 176;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopBanner-/crud/shop_banner/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"lang\\\": null,
            \\\"image\\\": null,
            \\\"link\\\": null,
            \\\"common\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopBanner\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:23:28';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 190;
        $this->model->sort = null;
        $this->model->name = 'Provider-DynaConfig-/core/dynagrid/variant-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\dyna\\\\DynaConfig\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": {
            \\\"dynaId\\\": \\\"ShopOrder-\\/crud\\/shop-order\\/index\\\"
        },
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:24:34';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 205;
        $this->model->sort = null;
        $this->model->name = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:28:15';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 167;
        $this->model->sort = null;
        $this->model->name = 'Provider-UserRbacView-/crud/user-rbac-view/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"roles\\\": null,
            \\\"page_view_type_ids\\\": null,
            \\\"page_view_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\user\\\\UserRbacView\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:19:41';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 191;
        $this->model->sort = null;
        $this->model->name = 'Provider-DynaMulti-/core/dynagrid/filter-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\dyna\\\\DynaMulti\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": {
            \\\"dynaId\\\": \\\"ShopOrder-\\/crud\\/shop-order\\/index\\\",
            \\\"active\\\": true,
            \\\"dyna_config_id\\\": 599
        },
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:24:34';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 157;
        $this->model->sort = null;
        $this->model->name = 'sessionFormConfigs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"topBtn\\\": true,
    \\\"isForm\\\": true,
    \\\"topBtnType\\\": \\\"button\\\",
    \\\"topBtnEvent\\\": {
        \\\"click\\\": \\\"                      \\r\\n                           var parentWindow = window.parent.document;\\r\\n                           var panel = parentWindow.getElementById(\'jsPanel-edit-dyna\')\\r\\n                           console.log(parentWindow);\\r\\n                                                        \\r\\n                           var id = \'jamster-Menu\';\\r\\n                           var button = parentWindow.getElementById(id);\\r\\n                           console.log(id);\\r\\n                           console.log(button);\\r\\n                           \\\$(button).trigger(\'click\');\\r\\n                           \\r\\n                           panel.close();\\r\\n               \\\"
    },
    \\\"botBtn\\\": false
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:02:23';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 260;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopBrand';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\",
                        \"location\",
                        \"image\",
                        \"rating\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:07:02';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 158;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopProduct';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"name\\\",
                        \\\"title\\\",
                        \\\"text\\\",
                        \\\"image\\\",
                        \\\"shop_category_id\\\",
                        \\\"shop_option_ids\\\",
                        \\\"shop_brand_id\\\",
                        \\\"related\\\",
                        \\\"best_before\\\",
                        \\\"shelf_life_unit\\\",
                        \\\"weight\\\",
                        \\\"size\\\",
                        \\\"offer\\\",
                        \\\"rating\\\",
                        \\\"measure\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:02:23';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 163;
        $this->model->sort = null;
        $this->model->name = 'configs_Menu';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": true,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": false,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": false,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"{title}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": [],
    \\\"hasMulti\\\": [],
    \\\"hasMany\\\": {
        \\\"MenuImage\\\": {
            \\\"menu_id\\\": \\\"id\\\"
        }
    },
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [
        \\\"role\\\"
    ],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": {
        \\\"name\\\": [
            {
                \\\"class\\\": \\\"zetsoft\\\\system\\\\column\\\\ZKDataColumn\\\",
                \\\"label\\\": \\\"\\u0420\\u0435\\u0434\\u0430\\u043a\\u0442\\u0438\\u0440\\u043e\\u0432\\u0430\\u0442\\u044c\\\",
                \\\"format\\\": \\\"raw\\\",
                \\\"value\\\": {}
            }
        ]
    },
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u041c\\u0435\\u043d\\u044e\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": true,
    \\\"changeSave\\\": true,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:13:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 171;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopShipment';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"responsible\\\",
                        \\\"name\\\",
                        \\\"code\\\",
                        \\\"date\\\",
                        \\\"date_deliver\\\",
                        \\\"shipment_type\\\",
                        \\\"shop_courier_id\\\",
                        \\\"comment\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:21:49';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 183;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrderItem-/core/dyna/items-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrderItem\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": {
            \\\"shop_order_id\\\": 2009
        },
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:22:23';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 160;
        $this->model->sort = null;
        $this->model->name = 'Provider-DynaConfig-/core/dynagrid/variant-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\dyna\\\\DynaConfig\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": {
            \\\"dynaId\\\": \\\"ShopElement-\\/crud\\/shop-element\\/index\\\"
        },
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:10:34';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 161;
        $this->model->sort = null;
        $this->model->name = 'Provider-DynaMulti-/core/dynagrid/filter-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\dyna\\\\DynaMulti\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": {
            \\\"dynaId\\\": \\\"ShopElement-\\/crud\\/shop-element\\/index\\\",
            \\\"active\\\": true,
            \\\"dyna_config_id\\\": 598
        },
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:10:34';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 150;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop-element/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_product_id\\\": null,
            \\\"barcode\\\": null,
            \\\"barcode_type\\\": null,
            \\\"option_combine\\\": null,
            \\\"option_simple\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopElement\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 20:59:55';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 179;
        $this->model->sort = null;
        $this->model->name = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:56:51';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 134;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 14:07:38';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 256;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionBranch-/crud/shop-option-branch/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"show\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionBranch\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:00:31';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 162;
        $this->model->sort = null;
        $this->model->name = 'cards_Menu';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '[
    {
        \\\"title\\\": \\\"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\\\",
        \\\"shows\\\": true,
        \\\"items\\\": [
            {
                \\\"title\\\": \\\"\\u0424\\u043e\\u0440\\u043c\\u0430\\\",
                \\\"shows\\\": true,
                \\\"items\\\": [
                    [
                        \\\"name\\\"
                    ],
                    [
                        \\\"active\\\"
                    ],
                    [
                        \\\"inline\\\"
                    ],
                    [
                        \\\"title\\\"
                    ],
                    [
                        \\\"icon\\\"
                    ],
                    [
                        \\\"role\\\"
                    ],
                    [
                        \\\"json\\\"
                    ],
                    [
                        \\\"sort\\\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:13:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 184;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop-order/index-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"code\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"number\\\": null,
            \\\"user_id\\\": null,
            \\\"parent\\\": null,
            \\\"children\\\": null,
            \\\"contact_name\\\": null,
            \\\"status_universal\\\": null,
            \\\"contact_phone\\\": null,
            \\\"add_contact_phone\\\": null,
            \\\"date\\\": null,
            \\\"comment_user\\\": null,
            \\\"responsible\\\": null,
            \\\"place_adress_id\\\": null,
            \\\"place_region_id\\\": null,
            \\\"distance\\\": null,
            \\\"user_company_ids\\\": null,
            \\\"operator\\\": null,
            \\\"comment_agent\\\": null,
            \\\"tasks\\\": null,
            \\\"source\\\": null,
            \\\"source_type\\\": null,
            \\\"called_time\\\": null,
            \\\"shop_reject_cause_id\\\": null,
            \\\"cpas_track\\\": null,
            \\\"status_client\\\": null,
            \\\"status_callcenter\\\": null,
            \\\"status_autodial\\\": null,
            \\\"status_logistics\\\": null,
            \\\"status_accept\\\": null,
            \\\"status_deliver\\\": null,
            \\\"date_deliver\\\": null,
            \\\"time_deliver\\\": null,
            \\\"date_approve\\\": null,
            \\\"date_return\\\": null,
            \\\"delayed_deliver_date\\\": null,
            \\\"shop_delay_id\\\": null,
            \\\"shop_delay_cause_id\\\": null,
            \\\"packaging\\\": null,
            \\\"labelled\\\": null,
            \\\"fragile\\\": null,
            \\\"weight\\\": null,
            \\\"weight_plan\\\": null,
            \\\"volume\\\": null,
            \\\"shop_shipment_id\\\": null,
            \\\"price\\\": null,
            \\\"prepayment\\\": null,
            \\\"deliver_price\\\": null,
            \\\"total_price\\\": null,
            \\\"shop_coupon_id\\\": null,
            \\\"shop_channel_id\\\": null,
            \\\"payment_type\\\": null,
            \\\"additional_payment_type\\\": null,
            \\\"additional_deliver\\\": null,
            \\\"additional_received_money\\\": null,
            \\\"accepted\\\": null,
            \\\"shop_element_ids\\\": null,
            \\\"ware_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:22:47';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 245;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop-order/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"code\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"number\": null,
            \"user_id\": null,
            \"parent\": null,
            \"children\": null,
            \"contact_name\": null,
            \"status_universal\": null,
            \"contact_phone\": null,
            \"add_contact_phone\": null,
            \"date\": null,
            \"comment_user\": null,
            \"responsible\": null,
            \"place_adress_id\": null,
            \"place_region_id\": null,
            \"distance\": null,
            \"user_company_ids\": null,
            \"operator\": null,
            \"comment_agent\": null,
            \"tasks\": null,
            \"source\": null,
            \"source_type\": null,
            \"called_time\": null,
            \"shop_reject_cause_id\": null,
            \"cpas_track\": null,
            \"status_client\": null,
            \"status_callcenter\": null,
            \"status_autodial\": null,
            \"status_logistics\": null,
            \"status_accept\": null,
            \"status_deliver\": null,
            \"date_deliver\": null,
            \"time_deliver\": null,
            \"date_approve\": null,
            \"date_return\": null,
            \"delayed_deliver_date\": null,
            \"shop_delay_id\": null,
            \"shop_delay_cause_id\": null,
            \"packaging\": null,
            \"labelled\": null,
            \"fragile\": null,
            \"weight\": null,
            \"weight_plan\": null,
            \"volume\": null,
            \"shop_shipment_id\": null,
            \"price\": null,
            \"prepayment\": null,
            \"deliver_price\": null,
            \"total_price\": null,
            \"shop_coupon_id\": null,
            \"shop_channel_id\": null,
            \"payment_type\": null,
            \"additional_payment_type\": null,
            \"additional_deliver\": null,
            \"additional_received_money\": null,
            \"accepted\": null,
            \"shop_element_ids\": null,
            \"ware_ids\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOrder\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:40:56';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 175;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopBanner';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": true,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": false,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": false,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"{title}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": {
        \\\"UserCompany\\\": {
            \\\"user_company_id\\\": \\\"id\\\"
        }
    },
    \\\"hasMulti\\\": [],
    \\\"hasMany\\\": [],
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [
        \\\"image\\\"
    ],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u0411\\u0430\\u043d\\u043d\\u0435\\u0440\\u044b \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0430\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": true,
    \\\"changeSave\\\": true,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:22:39';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 169;
        $this->model->sort = null;
        $this->model->name = 'configs_UserRbacView';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": true,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": false,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": false,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": \\\"{title}\\\",
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": [],
    \\\"hasMulti\\\": {
        \\\"PageViewType\\\": {
            \\\"page_view_type_ids\\\": \\\"id\\\"
        },
        \\\"PageView\\\": {
            \\\"page_view_ids\\\": \\\"id\\\"
        }
    },
    \\\"hasMany\\\": [],
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"RBAC \\u0434\\u043b\\u044f View\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": null,
    \\\"changeSave\\\": null,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:19:48';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 185;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-ShopOrder-/crud/shop-order/index-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '[
    2009
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:23:42';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 166;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'b540f1a9447588d59ba4375b9498d1b5fca06e7600ce7b8c38ccbd18767d9f97';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": \\\"dp-1\\\",
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"package\\\": null,
            \\\"shop_option\\\": null,
            \\\"text\\\": null,
            \\\"image\\\": null,
            \\\"shop_option_ids\\\": null,
            \\\"shop_brand_id\\\": null,
            \\\"related\\\": null,
            \\\"shelf_life\\\": null,
            \\\"shelf_life_unit\\\": null,
            \\\"weight\\\": null,
            \\\"size\\\": null,
            \\\"offer\\\": null,
            \\\"rating\\\": null,
            \\\"measure\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopProduct\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:17:01';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 241;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopProduct';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": true,
    \"indexSearch\": true,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"UserCompany\": {
            \"user_company_id\": \"id\"
        },
        \"ShopCategory\": {
            \"shop_category_id\": \"id\"
        },
        \"ShopBrand\": {
            \"shop_brand_id\": \"id\"
        }
    },
    \"hasMulti\": {
        \"ShopOption\": {
            \"shop_option_ids\": \"id\"
        },
        \"1\": {
            \"related\": \"id\"
        }
    },
    \"hasMany\": {
        \"ShopCoupon\": {
            \"min_price_order\": \"id\",
            \"shop_product_id\": \"id\"
        },
        \"ShopElement\": {
            \"shop_product_id\": \"id\"
        },
        \"ShopOverview\": {
            \"shop_product_id\": \"id\"
        },
        \"ShopQuestion\": {
            \"shop_product_id\": \"id\"
        },
        \"ShopReview\": {
            \"shop_product_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [
        \"accept\"
    ],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u044b\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": true,
    \"changeSave\": true,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": [
        \"\\u0421\\u041f\\u0420\\u0410\\u0412\\u041e\\u0427\\u041d\\u0418\\u041a \\u041d\\u041e\\u041c\\u0415\\u041d\\u041a\\u041b\\u0410\\u0422\\u0423\\u0420\\u0410\"
    ],
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:11:15';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 137;
        $this->model->sort = null;
        $this->model->name = 'Provider-Menu-/crud/menu/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"inline\\\": null,
            \\\"icon\\\": null,
            \\\"role\\\": null,
            \\\"json\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\menu\\\\Menu\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 14:08:43';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 236;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-ShopOption-/crud/shop-option/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    502,
    503
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:07:29';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 156;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopShipment-/crud/shop-shipment/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '68211347f4e15dd3fc1301c03f471d55265f95da01e458a2459b2692061fc8ba';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"code\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"date\\\": null,
            \\\"date_deliver\\\": null,
            \\\"shipment_type\\\": null,
            \\\"shop_courier_id\\\": null,
            \\\"responsible\\\": null,
            \\\"comment\\\": null,
            \\\"ware_place_ids\\\": null,
            \\\"user_place_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopShipment\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 21:00:43';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 193;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCatalog-/shop/seller/shop-catalog/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopCatalog\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": {
            \\\"user_company_id\\\": 210
        },
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:31:04';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 194;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop_order/system-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"code\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"number\\\": null,
            \\\"user_id\\\": null,
            \\\"parent\\\": null,
            \\\"children\\\": null,
            \\\"contact_name\\\": null,
            \\\"status_universal\\\": null,
            \\\"contact_phone\\\": null,
            \\\"add_contact_phone\\\": null,
            \\\"date\\\": null,
            \\\"comment_user\\\": null,
            \\\"responsible\\\": null,
            \\\"place_adress_id\\\": null,
            \\\"place_region_id\\\": null,
            \\\"distance\\\": null,
            \\\"user_company_ids\\\": null,
            \\\"operator\\\": null,
            \\\"comment_agent\\\": null,
            \\\"tasks\\\": null,
            \\\"source\\\": null,
            \\\"source_type\\\": null,
            \\\"called_time\\\": null,
            \\\"shop_reject_cause_id\\\": null,
            \\\"cpas_track\\\": null,
            \\\"status_client\\\": null,
            \\\"status_callcenter\\\": null,
            \\\"status_autodial\\\": null,
            \\\"status_logistics\\\": null,
            \\\"status_accept\\\": null,
            \\\"status_deliver\\\": null,
            \\\"date_deliver\\\": null,
            \\\"time_deliver\\\": null,
            \\\"date_approve\\\": null,
            \\\"date_return\\\": null,
            \\\"delayed_deliver_date\\\": null,
            \\\"shop_delay_id\\\": null,
            \\\"shop_delay_cause_id\\\": null,
            \\\"packaging\\\": null,
            \\\"labelled\\\": null,
            \\\"fragile\\\": null,
            \\\"weight\\\": null,
            \\\"weight_plan\\\": null,
            \\\"volume\\\": null,
            \\\"shop_shipment_id\\\": null,
            \\\"price\\\": null,
            \\\"prepayment\\\": null,
            \\\"deliver_price\\\": null,
            \\\"total_price\\\": null,
            \\\"shop_coupon_id\\\": null,
            \\\"shop_channel_id\\\": null,
            \\\"payment_type\\\": null,
            \\\"additional_payment_type\\\": null,
            \\\"additional_deliver\\\": null,
            \\\"additional_received_money\\\": null,
            \\\"accepted\\\": null,
            \\\"shop_element_ids\\\": null,
            \\\"ware_ids\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:33:31';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 195;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop-product/system-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"package\\\": null,
            \\\"shop_option\\\": null,
            \\\"text\\\": null,
            \\\"image\\\": null,
            \\\"shop_option_ids\\\": null,
            \\\"shop_brand_id\\\": null,
            \\\"related\\\": null,
            \\\"shelf_life\\\": null,
            \\\"shelf_life_unit\\\": null,
            \\\"weight\\\": null,
            \\\"size\\\": null,
            \\\"offer\\\": null,
            \\\"rating\\\": null,
            \\\"measure\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopProduct\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:33:38';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 196;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop-product/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"package\\\": null,
            \\\"shop_option\\\": null,
            \\\"text\\\": null,
            \\\"image\\\": null,
            \\\"shop_option_ids\\\": null,
            \\\"shop_brand_id\\\": null,
            \\\"related\\\": null,
            \\\"shelf_life\\\": null,
            \\\"shelf_life_unit\\\": null,
            \\\"weight\\\": null,
            \\\"size\\\": null,
            \\\"offer\\\": null,
            \\\"rating\\\": null,
            \\\"measure\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopProduct\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:33:51';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 198;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": \\\"dp-1\\\",
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"package\\\": null,
            \\\"shop_option\\\": null,
            \\\"text\\\": null,
            \\\"image\\\": null,
            \\\"shop_option_ids\\\": null,
            \\\"shop_brand_id\\\": null,
            \\\"related\\\": null,
            \\\"shelf_life\\\": null,
            \\\"shelf_life_unit\\\": null,
            \\\"weight\\\": null,
            \\\"size\\\": null,
            \\\"offer\\\": null,
            \\\"rating\\\": null,
            \\\"measure\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopProduct\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:35:03';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 199;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop-element/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"shop_product_id\\\": null,
            \\\"barcode\\\": null,
            \\\"barcode_type\\\": null,
            \\\"option_combine\\\": null,
            \\\"option_simple\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopElement\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:25:30';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 222;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-ShopOptionBranch-/crud/shop-option-branch/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    139
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:51:03';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 210;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCatalog-/crud/shop-catalog/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCatalog\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:31:17';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 235;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionType-/crud/shop_option_type/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionType\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:06:37';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 280;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionBranch-/crud/shop-option-branch/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"show\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionBranch\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:32';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 211;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCategory-/crud/shop-category/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCategory\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:33:32';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 201;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopElement';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"readonlyOn\\\": [],
    \\\"readonlyOff\\\": [],
    \\\"editOn\\\": [],
    \\\"editOff\\\": [],
    \\\"readonlyWidgetOn\\\": [],
    \\\"readonlyWidgetOff\\\": [],
    \\\"beforeSave\\\": true,
    \\\"afterSave\\\": true,
    \\\"afterDelete\\\": true,
    \\\"beforeDelete\\\": true,
    \\\"beforeValidate\\\": true,
    \\\"afterValidate\\\": true,
    \\\"afterFind\\\": true,
    \\\"afterRefresh\\\": true,
    \\\"dbase\\\": \\\"db\\\",
    \\\"formUrl\\\": null,
    \\\"formId\\\": null,
    \\\"lang\\\": \\\"ru\\\",
    \\\"sort\\\": null,
    \\\"defaultOrder\\\": {
        \\\"id\\\": 3
    },
    \\\"addID\\\": true,
    \\\"addBy\\\": true,
    \\\"addDel\\\": 1,
    \\\"addTranz\\\": true,
    \\\"addName\\\": true,
    \\\"addTitle\\\": true,
    \\\"addActive\\\": true,
    \\\"addAccept\\\": false,
    \\\"addCode\\\": false,
    \\\"addSort\\\": true,
    \\\"addGuid\\\": false,
    \\\"faker\\\": false,
    \\\"indexSearch\\\": 1,
    \\\"showDeleted\\\": false,
    \\\"showActive\\\": false,
    \\\"showAccept\\\": false,
    \\\"titleId\\\": \\\"ID\\\",
    \\\"titleCode\\\": \\\"\\u041a\\u043e\\u0434\\\",
    \\\"titleGuid\\\": \\\"GUID\\\",
    \\\"newRecordValues\\\": [],
    \\\"reverseDate\\\": true,
    \\\"customSort\\\": true,
    \\\"customFilter\\\": true,
    \\\"autoEx\\\": [
        \\\"id\\\",
        \\\"name\\\",
        \\\"created_at\\\",
        \\\"modified_at\\\",
        \\\"created_by\\\",
        \\\"modified_by\\\"
    ],
    \\\"nameAuto\\\": true,
    \\\"nameAutoWhenEmpty\\\": false,
    \\\"guidAuto\\\": false,
    \\\"nameValue\\\": {},
    \\\"guidValue\\\": null,
    \\\"nameWidth\\\": \\\"250px\\\",
    \\\"codeValue\\\": null,
    \\\"nameWidget\\\": \\\"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\\\",
    \\\"nameOptions\\\": [],
    \\\"nameIndex\\\": true,
    \\\"nameIndexUnique\\\": false,
    \\\"nameValidator\\\": null,
    \\\"nameValidatorUnique\\\": true,
    \\\"nameLang\\\": false,
    \\\"nameShowDyna\\\": true,
    \\\"nameShowForm\\\": true,
    \\\"nameShowView\\\": true,
    \\\"nameShowDetail\\\": true,
    \\\"merge\\\": true,
    \\\"dynaButtons\\\": [],
    \\\"depend\\\": [],
    \\\"hasOne\\\": {
        \\\"ShopProduct\\\": {
            \\\"shop_product_id\\\": \\\"id\\\"
        },
        \\\"ShopOption\\\": {
            \\\"option_combine\\\": \\\"id\\\",
            \\\"option_simple\\\": \\\"id\\\"
        }
    },
    \\\"hasMulti\\\": [],
    \\\"hasMany\\\": {
        \\\"ShopCatalog\\\": {
            \\\"shop_element_id\\\": \\\"id\\\"
        },
        \\\"WareEnterItem\\\": {
            \\\"shop_element_id\\\": \\\"id\\\"
        }
    },
    \\\"pageSize\\\": 10,
    \\\"isCard\\\": true,
    \\\"allPageSize\\\": 200,
    \\\"historyInterval\\\": null,
    \\\"type\\\": \\\"array\\\",
    \\\"jsonb\\\": [],
    \\\"name\\\": \\\"name\\\",
    \\\"clonable\\\": true,
    \\\"newRecord\\\": false,
    \\\"relation\\\": true,
    \\\"relationMany\\\": true,
    \\\"relationMulti\\\": true,
    \\\"relateMany\\\": [],
    \\\"relateMulti\\\": [],
    \\\"titles\\\": [],
    \\\"relationBtn\\\": true,
    \\\"relationWidth\\\": \\\"100px\\\",
    \\\"extraConfig\\\": false,
    \\\"extraColumn\\\": true,
    \\\"showSystemColumn\\\": false,
    \\\"makeMenu\\\": true,
    \\\"genName\\\": false,
    \\\"makeInsert\\\": true,
    \\\"columnCount\\\": 2,
    \\\"orderCheck\\\": false,
    \\\"order\\\": {
        \\\"id\\\": 3
    },
    \\\"menu\\\": true,
    \\\"restLink\\\": false,
    \\\"restMeta\\\": false,
    \\\"restFields\\\": [],
    \\\"restExtraFields\\\": [],
    \\\"ruleOn\\\": [],
    \\\"nameOn\\\": [
        \\\"active\\\"
    ],
    \\\"nameOff\\\": [],
    \\\"nameShowEx\\\": [
        \\\"modified_at\\\",
        \\\"modified_by\\\",
        \\\"created_by\\\",
        \\\"created_at\\\",
        \\\"deleted_at\\\",
        \\\"deleted_by\\\",
        \\\"deleted_text\\\"
    ],
    \\\"before\\\": null,
    \\\"after\\\": null,
    \\\"groupOff\\\": [],
    \\\"groupedRowOff\\\": [],
    \\\"pageSummaryOff\\\": [],
    \\\"pageSummaryOn\\\": [],
    \\\"column\\\": [],
    \\\"replace\\\": [],
    \\\"spa\\\": true,
    \\\"denyDB\\\": null,
    \\\"widget\\\": null,
    \\\"valueWidget\\\": null,
    \\\"filterWidget\\\": null,
    \\\"dynaWidget\\\": null,
    \\\"editClass\\\": null,
    \\\"preferConfig\\\": true,
    \\\"width\\\": null,
    \\\"height\\\": null,
    \\\"icon\\\": null,
    \\\"modalWidth\\\": null,
    \\\"modalHeight\\\": null,
    \\\"popoverSize\\\": null,
    \\\"popoverWidth\\\": null,
    \\\"popoverHeight\\\": null,
    \\\"namespace\\\": null,
    \\\"service\\\": null,
    \\\"method\\\": null,
    \\\"args\\\": null,
    \\\"title\\\": \\\"\\u042d\\u043b\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u0430\\\",
    \\\"value\\\": null,
    \\\"valueShow\\\": null,
    \\\"defaultValue\\\": null,
    \\\"labelType\\\": null,
    \\\"groupOddCssClass\\\": null,
    \\\"groupEvenCssClass\\\": null,
    \\\"subGroupOf\\\": null,
    \\\"enableEvent\\\": null,
    \\\"changeSubmit\\\": null,
    \\\"changeReloadPjax\\\": null,
    \\\"changeReload\\\": true,
    \\\"changeSave\\\": true,
    \\\"changeChangeAll\\\": false,
    \\\"ajax\\\": null,
    \\\"multiple\\\": null,
    \\\"popoverScroll\\\": null,
    \\\"addPlus\\\": null,
    \\\"between\\\": null,
    \\\"hiddenFromExport\\\": null,
    \\\"mergeHeader\\\": null,
    \\\"pageSummary\\\": null,
    \\\"showStats\\\": true,
    \\\"edit\\\": null,
    \\\"filter\\\": null,
    \\\"depends\\\": null,
    \\\"readonly\\\": false,
    \\\"readonlyWidget\\\": false,
    \\\"readonlyKernel\\\": false,
    \\\"showForm\\\": null,
    \\\"showDyna\\\": null,
    \\\"showDetail\\\": null,
    \\\"showView\\\": null,
    \\\"hasLabel\\\": null,
    \\\"hasPlaceholder\\\": null,
    \\\"dynamic\\\": null,
    \\\"group\\\": null,
    \\\"groupedRow\\\": null,
    \\\"relatedSave\\\": false,
    \\\"relatedDelete\\\": false,
    \\\"rules\\\": null,
    \\\"labelSpan\\\": null,
    \\\"groupFooter\\\": null,
    \\\"groupHeader\\\": null,
    \\\"info\\\": null,
    \\\"data\\\": null,
    \\\"options\\\": null,
    \\\"valueOptions\\\": null,
    \\\"filterOptions\\\": null,
    \\\"dynaOptions\\\": null,
    \\\"roleShow\\\": null,
    \\\"roleEdit\\\": null,
    \\\"roleFilter\\\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:25:32';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 197;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:35:03';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 262;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop_product/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopProduct\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:12:48';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 223;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopOptionType';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\",
                        \"title\",
                        \"shop_option_branch_id\",
                        \"show\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:51:12';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 263;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop-element/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_product_id\": null,
            \"barcode\": null,
            \"barcode_type\": null,
            \"option_combine\": null,
            \"option_simple\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopElement\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:13:44';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 246;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionBranch-/shop/seller/shop-order-item/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionBranch\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:40:56';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 216;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopElement';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"id\",
                        \"name\",
                        \"shop_product_id\",
                        \"barcode_type\",
                        \"barcode\",
                        \"shop_option_ids\",
                        \"active\",
                        \"deleted_at\",
                        \"deleted_by\",
                        \"deleted_text\",
                        \"created_at\",
                        \"modified_at\",
                        \"created_by\",
                        \"modified_by\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:47:53';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 206;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopOrder\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:28:16';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 207;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/shop/seller/main/dashboard-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": \\\"dp-1\\\",
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"shop_category_id\\\": null,
            \\\"package\\\": null,
            \\\"shop_option\\\": null,
            \\\"text\\\": null,
            \\\"image\\\": null,
            \\\"shop_option_ids\\\": null,
            \\\"shop_brand_id\\\": null,
            \\\"related\\\": null,
            \\\"shelf_life\\\": null,
            \\\"shelf_life_unit\\\": null,
            \\\"weight\\\": null,
            \\\"size\\\": null,
            \\\"offer\\\": null,
            \\\"rating\\\": null,
            \\\"measure\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopProduct\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:28:16';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 281;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOption-/crud/shop-option/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_option_type_id\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOption\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:32';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 267;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop-product/index-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"user_company_id\": null,
            \"shop_category_id\": null,
            \"package\": null,
            \"shop_option\": null,
            \"text\": null,
            \"image\": null,
            \"shop_option_ids\": null,
            \"shop_brand_id\": null,
            \"related\": null,
            \"shelf_life\": null,
            \"shelf_life_unit\": null,
            \"weight\": null,
            \"size\": null,
            \"offer\": null,
            \"rating\": null,
            \"measure\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopProduct\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:04:39';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 282;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/shop/seller/main/dashboard-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOrder\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:34';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 275;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop-element/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_product_id\": null,
            \"barcode\": null,
            \"barcode_type\": null,
            \"option_combine\": null,
            \"option_simple\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopElement\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:30';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 225;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopOption';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\",
                        \"shop_option_type_id\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:51:30';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 230;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCategory-/crud/shop_category/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCategory\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:59:47';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 232;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopProduct';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": true,
    \"indexSearch\": true,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"UserCompany\": {
            \"user_company_id\": \"id\"
        },
        \"ShopCategory\": {
            \"shop_category_id\": \"id\"
        },
        \"ShopBrand\": {
            \"shop_brand_id\": \"id\"
        }
    },
    \"hasMulti\": {
        \"ShopOption\": {
            \"shop_option_ids\": \"id\"
        },
        \"1\": {
            \"related\": \"id\"
        }
    },
    \"hasMany\": {
        \"ShopCoupon\": {
            \"min_price_order\": \"id\",
            \"shop_product_id\": \"id\"
        },
        \"ShopElement\": {
            \"shop_product_id\": \"id\"
        },
        \"ShopOverview\": {
            \"shop_product_id\": \"id\"
        },
        \"ShopQuestion\": {
            \"shop_product_id\": \"id\"
        },
        \"ShopReview\": {
            \"shop_product_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u044b\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": [
        \"\\u0421\\u041f\\u0420\\u0410\\u0412\\u041e\\u0427\\u041d\\u0418\\u041a \\u041d\\u041e\\u041c\\u0415\\u041d\\u041a\\u041b\\u0410\\u0422\\u0423\\u0420\\u0410\"
    ],
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:59:59';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 264;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopCatalog';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:24:18';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 238;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopBrand-/crud/shop-brand/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"location\\\": null,
            \\\"image\\\": null,
            \\\"rating\\\": null,
            \\\"user_company_id\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopBrand\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:10:30';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 239;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCatalog-/crud/shop-catalog/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": {
            \\\"id\\\": null,
            \\\"sort\\\": null,
            \\\"name\\\": null,
            \\\"guid\\\": null,
            \\\"title\\\": null,
            \\\"tranz\\\": null,
            \\\"active\\\": null,
            \\\"user_company_id\\\": null,
            \\\"parent\\\": null,
            \\\"shop_element_id\\\": null,
            \\\"currency\\\": null,
            \\\"price\\\": null,
            \\\"amount\\\": null,
            \\\"available\\\": null,
            \\\"price_old\\\": null
        },
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopCatalog\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": null,
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:10:30';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 268;
        $this->model->sort = null;
        $this->model->name = 'Provider-WareAccept-/crud/ware-accept/index-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"dc_returns_group\": null,
            \"date\": null,
            \"status\": null,
            \"shop_courier_id\": null,
            \"shop_shipment_id\": null,
            \"responsible\": null,
            \"comment\": null,
            \"completed\": null,
            \"completed_all\": null,
            \"total\": null,
            \"exchange\": null,
            \"refusal\": null,
            \"cancel\": null,
            \"date_transfer\": null,
            \"terminal\": null,
            \"add_delivery\": null,
            \"refund\": null,
            \"bonus\": null,
            \"cashless\": null,
            \"sales_amount\": null,
            \"courier_reward\": null,
            \"exchange_reward\": null,
            \"refund_reward\": null,
            \"salary_courier\": null,
            \"remain\": null,
            \"in_dollar\": null,
            \"currency\": null,
            \"converted\": null,
            \"closed\": null,
            \"closed_time\": null,
            \"source\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\ware\\\\WareAccept\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:04:39';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 233;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-ShopProduct-/crud/shop-product/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    3
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:00:19';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 218;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop_element/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \\\"behaviors\\\": null,
    \\\"count\\\": null,
    \\\"db\\\": null,
    \\\"id\\\": null,
    \\\"key\\\": null,
    \\\"keys\\\": null,
    \\\"models\\\": null,
    \\\"query\\\": {
        \\\"model\\\": null,
        \\\"modelClass\\\": \\\"zetsoft\\\\models\\\\shop\\\\ShopElement\\\",
        \\\"kernel\\\": false,
        \\\"transform\\\": true,
        \\\"sql\\\": null,
        \\\"on\\\": null,
        \\\"joinWith\\\": null,
        \\\"select\\\": null,
        \\\"selectOption\\\": null,
        \\\"distinct\\\": null,
        \\\"from\\\": null,
        \\\"groupBy\\\": null,
        \\\"join\\\": null,
        \\\"having\\\": null,
        \\\"union\\\": null,
        \\\"withQueries\\\": null,
        \\\"params\\\": [],
        \\\"queryCacheDuration\\\": null,
        \\\"queryCacheDependency\\\": null,
        \\\"where\\\": {
            \\\"created_by\\\": 455
        },
        \\\"limit\\\": null,
        \\\"offset\\\": null,
        \\\"orderBy\\\": {
            \\\"id\\\": 3
        },
        \\\"indexBy\\\": null,
        \\\"emulateExecution\\\": false,
        \\\"with\\\": null,
        \\\"asArray\\\": true,
        \\\"multiple\\\": null,
        \\\"primaryModel\\\": null,
        \\\"link\\\": null,
        \\\"via\\\": null,
        \\\"inverseOf\\\": null
    },
    \\\"totalCount\\\": null,
    \\\"andWhere\\\": [],
    \\\"orWhere\\\": [],
    \\\"where\\\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:48:14';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 271;
        $this->model->sort = null;
        $this->model->name = 'cards_PlaceAdress';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\"
                    ],
                    [
                        \"place_country_id\"
                    ],
                    [
                        \"region_form\",
                        \"place_region_id\"
                    ],
                    [
                        \"street\"
                    ],
                    [
                        \"home\"
                    ],
                    [
                        \"orientation\"
                    ],
                    [
                        \"postal_code\"
                    ],
                    [
                        \"place\"
                    ],
                    [
                        \"location\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:06:31';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 251;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopOptionBranch';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\",
                        \"show\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:58:16';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 273;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopOrder';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"date\",
                        \"responsible\"
                    ],
                    [
                        \"user_id\",
                        \"contact_name\"
                    ],
                    [
                        \"comment_user\",
                        \"contact_phone\"
                    ],
                    [
                        \"user_company_ids\"
                    ],
                    [
                        \"ware_ids\",
                        \"source\"
                    ],
                    [
                        \"tasks\"
                    ],
                    [
                        \"date_deliver\",
                        \"delayed_deliver_cause\"
                    ],
                    [
                        \"deliver_price\",
                        \"shop_channel_id\"
                    ],
                    [
                        \"shop_coupon_id\",
                        \"payment_type\"
                    ],
                    [
                        \"additional_payment_type\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:06:31';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 234;
        $this->model->sort = null;
        $this->model->name = 'Checkdyna-ShopOptionType-/crud/shop-option-type/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:03:58';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 220;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionType-/crud/shop-option-type/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionType\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:50:53';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 231;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopProduct';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\",
                        \"title\",
                        \"text\",
                        \"image\",
                        \"shop_category_id\",
                        \"shop_option_ids\",
                        \"shop_brand_id\",
                        \"related\",
                        \"best_before\",
                        \"shelf_life_unit\",
                        \"weight\",
                        \"size\",
                        \"offer\",
                        \"rating\",
                        \"measure\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:59:59';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 217;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopElement';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": 1,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": 1,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": {},
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"ShopProduct\": {
            \"shop_product_id\": \"id\"
        }
    },
    \"hasMulti\": {
        \"1\": {
            \"option_combine\": \"id\",
            \"option_simple\": \"id\"
        }
    },
    \"hasMany\": {
        \"ShopCatalog\": {
            \"shop_element_id\": \"id\"
        },
        \"WareEnterItem\": {
            \"shop_element_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u042d\\u043b\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u0430\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:47:53';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 290;
        $this->model->sort = null;
        $this->model->name = 'login';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = 'true';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:19:30';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 209;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop-element/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopElement\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:31:17';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 242;
        $this->model->sort = null;
        $this->model->name = 'Provider-Ware-/crud/ware/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"user_company_id\": null,
            \"text\": null,
            \"phone\": null,
            \"email\": null,
            \"photo\": null,
            \"type\": null,
            \"place_adress_id\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\ware\\\\Ware\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:40:51';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 243;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCatalogWare-/crud/shop-catalog-ware/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_catalog_id\": null,
            \"ware_id\": null,
            \"best_before\": null,
            \"amount\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCatalogWare\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:40:51';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 255;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionType-/crud/shop-option-type/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": \"\\u041e\\u043f\\u0435\\u0440\\u0430\",
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_option_branch_id\": null,
            \"show\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionType\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": [
            \"like\",
            \"name\",
            \"\\u041e\\u043f\\u0435\\u0440\\u0430\"
        ],
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:00:31';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 270;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/shop/admin/shop-order/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOrder\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"status_callcenter\": \"approved\"
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:04:41';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 250;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCategory-/crud/shop_category/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"icon\": null,
            \"shop_brand_ids\": null,
            \"shop_review_option_ids\": null,
            \"shop_option_type\": null,
            \"shop_category_id\": null,
            \"image\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCategory\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:53:25';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 247;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOffer-/crud/shop-offer/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_catalog_id\": null,
            \"type\": null,
            \"start\": null,
            \"end\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOffer\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:40:58';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 219;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionBranch-/crud/shop-option-branch/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionBranch\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:50:52';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 252;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopOptionBranch';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": [],
    \"hasMulti\": [],
    \"hasMany\": {
        \"ShopOptionType\": {
            \"shop_option_branch_id\": \"id\"
        },
        \"ShopReviewOption\": {
            \"shop_option_branch_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438 \\u043f\\u0430\\u0440\\u0430\\u043c\\u0435\\u0442\\u0440\\u043e\\u0432\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:58:16';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 229;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": true,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"ShopCategory\": {
            \"shop_category_id\": \"id\"
        }
    },
    \"hasMulti\": {
        \"ShopBrand\": {
            \"shop_brand_ids\": \"id\"
        },
        \"ShopReviewOption\": {
            \"shop_review_option_ids\": \"id\"
        }
    },
    \"hasMany\": {
        \"ShopCategory\": {
            \"shop_category_id\": \"id\"
        },
        \"ShopCoupon\": {
            \"shop_category_id\": \"id\"
        },
        \"ShopProduct\": {
            \"shop_category_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:54:53';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 203;
        $this->model->sort = null;
        $this->model->name = 'Provider-Menu-/crud/menu/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"inline\": null,
            \"icon\": null,
            \"role\": null,
            \"json\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\menu\\\\Menu\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:25:58';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 221;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOption-/crud/shop-option/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOption\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:50:53';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 248;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopShipment-/crud/shop-shipment/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"code\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"date\": null,
            \"date_deliver\": null,
            \"shipment_type\": null,
            \"shop_courier_id\": null,
            \"responsible\": null,
            \"comment\": null,
            \"ware_place_ids\": null,
            \"user_place_ids\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopShipment\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:41:01';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 253;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionBranch-/crud/shop_option_branch/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionBranch\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:58:30';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 227;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCategory-/crud/shop-category/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"icon\": null,
            \"shop_brand_ids\": null,
            \"shop_review_option_ids\": null,
            \"shop_option_type\": null,
            \"shop_category_id\": null,
            \"image\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCategory\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:53:08';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 240;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopProduct';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"name\",
                        \"title\",
                        \"text\",
                        \"image\",
                        \"shop_category_id\",
                        \"shop_option_ids\",
                        \"shop_brand_id\",
                        \"related\",
                        \"best_before\",
                        \"shelf_life_unit\",
                        \"weight\",
                        \"size\",
                        \"offer\",
                        \"rating\",
                        \"measure\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:11:15';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 226;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopOption';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"ShopOptionType\": {
            \"shop_option_type_id\": \"id\"
        }
    },
    \"hasMulti\": [],
    \"hasMany\": [],
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [
        \"title\"
    ],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u0417\\u043d\\u0430\\u0447\\u0435\\u043d\\u0438\\u044f \\u043f\\u0430\\u0440\\u0430\\u043c\\u0435\\u0442\\u0440\\u043e\\u0432\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": true,
    \"changeSave\": true,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:51:30';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 186;
        $this->model->sort = null;
        $this->model->name = 'sessionFormConfigs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"topBtn\": true,
    \"isForm\": true,
    \"topBtnType\": \"button\",
    \"topBtnEvent\": {
        \"click\": \"                      \\r\\n                           var parentWindow = window.parent.document;\\r\\n                           var panel = parentWindow.getElementById(\'jsPanel-edit-dyna\')\\r\\n                           console.log(parentWindow);\\r\\n                                                        \\r\\n                           var id = \'jamster-ShopOptionType\';\\r\\n                           var button = parentWindow.getElementById(id);\\r\\n                           console.log(id);\\r\\n                           console.log(button);\\r\\n                           \$(button).trigger(\'click\');\\r\\n                           \\r\\n                           panel.close();\\r\\n               \"
    },
    \"botBtn\": false
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-17 22:24:02';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 287;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopElement';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"id\",
                        \"name\",
                        \"shop_product_id\",
                        \"barcode_type\",
                        \"barcode\",
                        \"shop_option_ids\",
                        \"active\",
                        \"deleted_at\",
                        \"deleted_by\",
                        \"deleted_text\",
                        \"created_at\",
                        \"modified_at\",
                        \"created_by\",
                        \"modified_by\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:13:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 224;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopOptionType';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"ShopOptionBranch\": {
            \"shop_option_branch_id\": \"id\"
        }
    },
    \"hasMulti\": [],
    \"hasMany\": {
        \"ShopOption\": {
            \"shop_option_type_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041f\\u0430\\u0440\\u0430\\u043c\\u0435\\u0442\\u0440\\u044b \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u0430\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:51:12';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 215;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop-product/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"user_company_id\": null,
            \"shop_category_id\": \"101028\",
            \"package\": null,
            \"shop_option\": null,
            \"text\": null,
            \"image\": null,
            \"shop_option_ids\": null,
            \"shop_brand_id\": null,
            \"related\": null,
            \"shelf_life\": null,
            \"shelf_life_unit\": null,
            \"weight\": null,
            \"size\": null,
            \"offer\": null,
            \"rating\": null,
            \"measure\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopProduct\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"shop_category_id\": \"101028\"
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:46:20';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 208;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop-product/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopProduct\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:31:16';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 213;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"id\",
                        \"sort\",
                        \"name\",
                        \"title\",
                        \"tranz\",
                        \"active\",
                        \"icon\",
                        \"shop_brand_ids\",
                        \"shop_review_option_ids\",
                        \"shop_option_type\",
                        \"shop_category_id\",
                        \"image\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:41:40';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 249;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/crud/shop_product/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"user_company_id\": null,
            \"shop_category_id\": null,
            \"package\": null,
            \"shop_option\": null,
            \"text\": null,
            \"image\": null,
            \"shop_option_ids\": null,
            \"shop_brand_id\": null,
            \"related\": null,
            \"shelf_life\": null,
            \"shelf_life_unit\": null,
            \"weight\": null,
            \"size\": null,
            \"offer\": null,
            \"rating\": null,
            \"measure\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopProduct\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:48:09';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 212;
        $this->model->sort = null;
        $this->model->name = 'sessionFormConfigs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"topBtn\": true,
    \"isForm\": true,
    \"topBtnType\": \"button\",
    \"topBtnEvent\": {
        \"click\": \"                      \\r\\n                           var parentWindow = window.parent.document;\\r\\n                           var panel = parentWindow.getElementById(\'jsPanel-edit-dyna\')\\r\\n                           console.log(parentWindow);\\r\\n                                                        \\r\\n                           var id = \'jamster-ShopProduct\';\\r\\n                           var button = parentWindow.getElementById(id);\\r\\n                           console.log(id);\\r\\n                           console.log(button);\\r\\n                           \$(button).trigger(\'click\');\\r\\n                           \\r\\n                           panel.close();\\r\\n               \"
    },
    \"botBtn\": false
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:41:40';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 237;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOption-/crud/shop_option/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOption\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:08:52';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 274;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopOrder';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": false,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": true,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"\\u0417\\u0430\\u043a\\u0430\\u0437 \\u043a\\u043b\\u0438\\u0435\\u043d\\u0442\\u0430 \\u2116{number} \\u043e\\u0442 {created_at}. \\u0424.\\u0418.\\u041e {contact_name}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": null,
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"User\": {
            \"user_id\": \"id\",
            \"responsible\": \"id\",
            \"operator\": \"id\"
        },
        \"ShopOrder\": {
            \"parent\": \"id\",
            \"children\": \"id\"
        },
        \"PlaceAdress\": {
            \"place_adress_id\": \"id\"
        },
        \"PlaceRegion\": {
            \"place_region_id\": \"id\"
        },
        \"UserCompany\": {
            \"source\": \"id\"
        },
        \"ShopRejectCause\": {
            \"shop_reject_cause_id\": \"id\"
        },
        \"ShopDelay\": {
            \"shop_delay_id\": \"id\"
        },
        \"ShopDelayCause\": {
            \"shop_delay_cause_id\": \"id\"
        },
        \"ShopPackaging\": {
            \"packaging\": \"id\"
        },
        \"ShopShipment\": {
            \"shop_shipment_id\": \"id\"
        },
        \"ShopCoupon\": {
            \"shop_coupon_id\": \"id\"
        },
        \"ShopChannel\": {
            \"shop_channel_id\": \"id\"
        }
    },
    \"hasMulti\": {
        \"UserCompany\": {
            \"user_company_ids\": \"id\"
        },
        \"ShopElement\": {
            \"shop_element_ids\": \"id\"
        },
        \"Ware\": {
            \"ware_ids\": \"id\"
        }
    },
    \"hasMany\": {
        \"ShopOrder\": {
            \"parent\": \"id\",
            \"children\": \"id\"
        },
        \"ShopOrderItem\": {
            \"shop_order_id\": \"id\"
        },
        \"ShopPayment\": {
            \"shop_order_id\": \"id\"
        },
        \"CallsCdr\": {
            \"shop_order_id\": \"id\"
        },
        \"CallsCel\": {
            \"shop_order_id\": \"id\"
        },
        \"CallsOrder\": {
            \"shop_order_id\": \"id\"
        },
        \"CallsRecord\": {
            \"shop_order_id\": \"id\"
        },
        \"CallsUserman\": {
            \"shop_order_id\": \"id\"
        },
        \"CpasTracker\": {
            \"shop_order_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [
        \"company_ids\"
    ],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": {
        \"shop_order_id\": \"ShopOrderItem\",
        \"parent\": \"ShopOrder\",
        \"id\": \"ShopOrder\"
    },
    \"relateMulti\": {
        \"shop_order_id\": \"ShopOrderItem\"
    },
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u0417\\u0430\\u043a\\u0430\\u0437\\u044b\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": {
        \"date_deliver\": {
            \"config\": {
                \"startDate\": \"2020-11-17 12:12:59\"
            }
        }
    },
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:06:31';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 228;
        $this->model->sort = null;
        $this->model->name = 'cards_ShopCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '[
    {
        \"title\": \"\\u041f\\u0435\\u0440\\u0432\\u044b\\u0439 \\u044d\\u0442\\u0430\\u043f\",
        \"shows\": true,
        \"items\": [
            {
                \"title\": \"\\u0424\\u043e\\u0440\\u043c\\u0430\",
                \"shows\": true,
                \"items\": [
                    [
                        \"id\",
                        \"sort\",
                        \"name\",
                        \"title\",
                        \"tranz\",
                        \"active\",
                        \"icon\",
                        \"shop_brand_ids\",
                        \"shop_review_option_ids\",
                        \"shop_option_type\",
                        \"shop_category_id\",
                        \"image\"
                    ]
                ]
            }
        ]
    }
]';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:54:53';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 254;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopReview-/crud/shop-review/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"type\": null,
            \"shop_brand_id\": null,
            \"shop_product_id\": null,
            \"user_company_id\": null,
            \"rating\": null,
            \"parent_id\": null,
            \"rating_option\": null,
            \"text\": null,
            \"virtues\": null,
            \"drawbacks\": null,
            \"experience\": null,
            \"recommend\": null,
            \"anonymous\": null,
            \"like\": null,
            \"dislike\": null,
            \"photo\": null,
            \"user_id\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopReview\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:00:28';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 214;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopCategory';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": true,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"ShopCategory\": {
            \"shop_category_id\": \"id\"
        }
    },
    \"hasMulti\": {
        \"ShopBrand\": {
            \"shop_brand_ids\": \"id\"
        },
        \"ShopReviewOption\": {
            \"shop_review_option_ids\": \"id\"
        }
    },
    \"hasMany\": {
        \"ShopCategory\": {
            \"shop_category_id\": \"id\"
        },
        \"ShopCoupon\": {
            \"shop_category_id\": \"id\"
        },
        \"ShopProduct\": {
            \"shop_category_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [
        \"shop_option_type\"
    ],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041a\\u0430\\u0442\\u0435\\u0433\\u043e\\u0440\\u0438\\u0438\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": true,
    \"changeSave\": true,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 08:41:40';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 265;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopCatalog';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": true,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": true,
    \"nameValue\": {},
    \"guidValue\": {},
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"UserCompany\": {
            \"user_company_id\": \"id\"
        },
        \"ShopCatalog\": {
            \"parent\": \"id\"
        },
        \"ShopElement\": {
            \"shop_element_id\": \"id\"
        }
    },
    \"hasMulti\": [],
    \"hasMany\": {
        \"ShopCatalog\": {
            \"parent\": \"id\"
        },
        \"ShopCatalogWare\": {
            \"shop_catalog_id\": \"id\"
        },
        \"ShopOffer\": {
            \"shop_catalog_id\": \"id\"
        },
        \"ShopOrderItem\": {
            \"shop_catalog_id\": \"id\"
        },
        \"WareEnterItem\": {
            \"shop_catalog_id\": \"id\"
        },
        \"WareExitItem\": {
            \"shop_catalog_id\": \"id\"
        },
        \"WareTransItem\": {
            \"shop_catalog_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041a\\u0430\\u0442\\u0430\\u043b\\u043e\\u0433 \\u043c\\u0430\\u0433\\u0430\\u0437\\u0438\\u043d\\u0430\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:24:18';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 266;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCatalog-/crud/shop_catalog/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCatalog\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"created_by\": 455
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:25:29';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 259;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopOptionType';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"ShopOptionBranch\": {
            \"shop_option_branch_id\": \"id\"
        }
    },
    \"hasMulti\": [],
    \"hasMany\": {
        \"ShopOption\": {
            \"shop_option_type_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [
        \"accept\"
    ],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u041f\\u0430\\u0440\\u0430\\u043c\\u0435\\u0442\\u0440\\u044b \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u0430\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": true,
    \"changeSave\": true,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:00:39';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 277;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopCategory-/crud/shop-category/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"icon\": null,
            \"shop_brand_ids\": null,
            \"shop_review_option_ids\": null,
            \"shop_option_type\": null,
            \"shop_category_id\": null,
            \"image\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopCategory\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:32';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 292;
        $this->model->sort = null;
        $this->model->name = 'Provider-DynaConfig-/core/dynagrid/variant-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\dyna\\\\DynaConfig\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"dynaId\": \"ShopElement-\\/crud\\/shop-element\\/index\"
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 18:33:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 244;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopBrand-/crud/shop-brand/index-455';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"location\": null,
            \"image\": null,
            \"rating\": null,
            \"user_company_id\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopBrand\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 09:40:53';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 278;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopReview-/crud/shop-review/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"type\": null,
            \"shop_brand_id\": null,
            \"shop_product_id\": null,
            \"user_company_id\": null,
            \"rating\": null,
            \"parent_id\": null,
            \"rating_option\": null,
            \"text\": null,
            \"virtues\": null,
            \"drawbacks\": null,
            \"experience\": null,
            \"recommend\": null,
            \"anonymous\": null,
            \"like\": null,
            \"dislike\": null,
            \"photo\": null,
            \"user_id\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopReview\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:32';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 283;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopProduct-/shop/seller/main/dashboard-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": \"dp-1\",
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"user_company_id\": null,
            \"shop_category_id\": null,
            \"package\": null,
            \"shop_option\": null,
            \"text\": null,
            \"image\": null,
            \"shop_option_ids\": null,
            \"shop_brand_id\": null,
            \"related\": null,
            \"shelf_life\": null,
            \"shelf_life_unit\": null,
            \"weight\": null,
            \"size\": null,
            \"offer\": null,
            \"rating\": null,
            \"measure\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopProduct\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:34';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 257;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOption-/crud/shop-option/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '3db804bf8c6a34889723eb14cd60839ebf6145f7da5f4cba3e42ca623ad32a4c';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_option_type_id\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOption\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:00:32';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 261;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopBrand';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = 'e43c7eba5efd53f9c59d5edc8e7d7963483ae8ab0f7a1132776d9758d87fb492';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": \"{title}\",
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": null,
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"UserCompany\": {
            \"user_company_id\": \"id\"
        }
    },
    \"hasMulti\": [],
    \"hasMany\": {
        \"ShopOverview\": {
            \"shop_brand_id\": \"id\"
        },
        \"ShopProduct\": {
            \"shop_brand_id\": \"id\"
        },
        \"ShopQuestion\": {
            \"shop_brand_id\": \"id\"
        },
        \"ShopReview\": {
            \"shop_brand_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [
        \"location\"
    ],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u0411\\u0440\\u0435\\u043d\\u0434\\u044b\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": true,
    \"changeSave\": true,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 10:07:02';
        $this->model->user_id = 455;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 279;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOptionType-/crud/shop-option-type/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_option_branch_id\": null,
            \"show\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOptionType\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:32';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 284;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopOrder-/crud/shop-order/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"code\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"number\": null,
            \"user_id\": null,
            \"parent\": null,
            \"children\": null,
            \"contact_name\": null,
            \"status_universal\": null,
            \"contact_phone\": null,
            \"add_contact_phone\": null,
            \"date\": null,
            \"comment_user\": null,
            \"responsible\": null,
            \"place_adress_id\": null,
            \"place_region_id\": null,
            \"distance\": null,
            \"user_company_ids\": null,
            \"operator\": null,
            \"comment_agent\": null,
            \"tasks\": null,
            \"source\": null,
            \"source_type\": null,
            \"called_time\": null,
            \"shop_reject_cause_id\": null,
            \"cpas_track\": null,
            \"status_client\": null,
            \"status_callcenter\": null,
            \"status_autodial\": null,
            \"status_logistics\": null,
            \"status_accept\": null,
            \"status_deliver\": null,
            \"date_deliver\": null,
            \"time_deliver\": null,
            \"date_approve\": null,
            \"date_return\": null,
            \"delayed_deliver_date\": null,
            \"shop_delay_id\": null,
            \"shop_delay_cause_id\": null,
            \"packaging\": null,
            \"labelled\": null,
            \"fragile\": null,
            \"weight\": null,
            \"weight_plan\": null,
            \"volume\": null,
            \"shop_shipment_id\": null,
            \"price\": null,
            \"prepayment\": null,
            \"deliver_price\": null,
            \"total_price\": null,
            \"shop_coupon_id\": null,
            \"shop_channel_id\": null,
            \"payment_type\": null,
            \"additional_payment_type\": null,
            \"additional_deliver\": null,
            \"additional_received_money\": null,
            \"accepted\": null,
            \"shop_element_ids\": null,
            \"ware_ids\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopOrder\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:34';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 293;
        $this->model->sort = null;
        $this->model->name = 'Provider-DynaMulti-/core/dynagrid/filter-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": null,
        \"modelClass\": \"zetsoft\\\\models\\\\dyna\\\\DynaMulti\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": {
            \"dynaId\": \"ShopElement-\\/crud\\/shop-element\\/index\",
            \"active\": true,
            \"dyna_config_id\": 600
        },
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 18:33:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 285;
        $this->model->sort = null;
        $this->model->name = 'Provider-PlaceAdress-/crud/place-adress/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"place_country_id\": null,
            \"region_form\": null,
            \"place_region_id\": null,
            \"street\": null,
            \"home\": null,
            \"orientation\": null,
            \"postal_code\": null,
            \"place\": null,
            \"location\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\place\\\\PlaceAdress\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:46';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 272;
        $this->model->sort = null;
        $this->model->name = 'configs_PlaceAdress';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": true,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": false,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": {},
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": null,
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"PlaceCountry\": {
            \"place_country_id\": \"id\"
        },
        \"PlaceRegion\": {
            \"place_region_id\": \"id\"
        }
    },
    \"hasMulti\": [],
    \"hasMany\": {
        \"ShopOrder\": {
            \"place_adress_id\": \"id\"
        },
        \"Ware\": {
            \"place_adress_id\": \"id\"
        },
        \"UserCompany\": {
            \"place_adress_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u0410\\u0434\\u0440\\u0435\\u0441\\u0430\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": null,
    \"changeSave\": null,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:06:31';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 288;
        $this->model->sort = null;
        $this->model->name = 'configs_ShopElement';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"readonlyOn\": [],
    \"readonlyOff\": [],
    \"editOn\": [],
    \"editOff\": [],
    \"readonlyWidgetOn\": [],
    \"readonlyWidgetOff\": [],
    \"beforeSave\": true,
    \"afterSave\": true,
    \"afterDelete\": true,
    \"beforeDelete\": true,
    \"beforeValidate\": true,
    \"afterValidate\": true,
    \"afterFind\": true,
    \"afterRefresh\": true,
    \"dbase\": \"db\",
    \"formUrl\": null,
    \"formId\": null,
    \"lang\": \"ru\",
    \"sort\": null,
    \"defaultOrder\": {
        \"id\": 3
    },
    \"addID\": true,
    \"addBy\": true,
    \"addDel\": 1,
    \"addTranz\": true,
    \"addName\": true,
    \"addTitle\": true,
    \"addActive\": true,
    \"addAccept\": true,
    \"addCode\": false,
    \"addSort\": true,
    \"addGuid\": false,
    \"faker\": false,
    \"indexSearch\": 1,
    \"showDeleted\": false,
    \"showActive\": false,
    \"showAccept\": false,
    \"titleId\": \"ID\",
    \"titleCode\": \"\\u041a\\u043e\\u0434\",
    \"titleGuid\": \"GUID\",
    \"newRecordValues\": [],
    \"reverseDate\": true,
    \"customSort\": true,
    \"customFilter\": true,
    \"autoEx\": [
        \"id\",
        \"name\",
        \"created_at\",
        \"modified_at\",
        \"created_by\",
        \"modified_by\"
    ],
    \"nameAuto\": true,
    \"nameAutoWhenEmpty\": false,
    \"guidAuto\": false,
    \"nameValue\": {},
    \"guidValue\": null,
    \"nameWidth\": \"250px\",
    \"codeValue\": null,
    \"query\": {},
    \"nameWidget\": \"zetsoft\\\\widgets\\\\inputes\\\\ZHInputWidget\",
    \"nameOptions\": [],
    \"nameIndex\": true,
    \"nameIndexUnique\": false,
    \"nameValidator\": null,
    \"nameValidatorUnique\": true,
    \"nameLang\": false,
    \"nameShowDyna\": true,
    \"nameShowForm\": true,
    \"nameShowView\": true,
    \"nameShowDetail\": true,
    \"merge\": true,
    \"dynaButtons\": [],
    \"depend\": [],
    \"hasOne\": {
        \"ShopProduct\": {
            \"shop_product_id\": \"id\"
        }
    },
    \"hasMulti\": {
        \"1\": {
            \"option_combine\": \"id\",
            \"option_simple\": \"id\"
        }
    },
    \"hasMany\": {
        \"ShopCatalog\": {
            \"shop_element_id\": \"id\"
        },
        \"WareEnterItem\": {
            \"shop_element_id\": \"id\"
        }
    },
    \"pageSize\": 10,
    \"isCard\": true,
    \"allPageSize\": 200,
    \"historyInterval\": null,
    \"type\": \"array\",
    \"jsonb\": [],
    \"name\": \"name\",
    \"clonable\": true,
    \"newRecord\": false,
    \"relation\": true,
    \"relationMany\": true,
    \"relationMulti\": true,
    \"relateMany\": [],
    \"relateMulti\": [],
    \"titles\": [],
    \"relationBtn\": true,
    \"relationWidth\": \"100px\",
    \"extraConfig\": false,
    \"extraColumn\": true,
    \"showSystemColumn\": false,
    \"makeMenu\": true,
    \"genName\": false,
    \"makeInsert\": true,
    \"columnCount\": 2,
    \"orderCheck\": false,
    \"order\": {
        \"id\": 3
    },
    \"menu\": true,
    \"restLink\": false,
    \"restMeta\": false,
    \"restFields\": [],
    \"restExtraFields\": [],
    \"ruleOn\": [],
    \"nameOn\": [
        \"active\"
    ],
    \"nameOff\": [],
    \"nameShowEx\": [
        \"modified_at\",
        \"modified_by\",
        \"created_by\",
        \"created_at\",
        \"deleted_at\",
        \"deleted_by\",
        \"deleted_text\"
    ],
    \"before\": null,
    \"after\": null,
    \"groupOff\": [],
    \"groupedRowOff\": [],
    \"pageSummaryOff\": [],
    \"pageSummaryOn\": [],
    \"column\": [],
    \"replace\": [],
    \"spa\": true,
    \"denyDB\": null,
    \"widget\": null,
    \"valueWidget\": null,
    \"filterWidget\": null,
    \"dynaWidget\": null,
    \"editClass\": null,
    \"preferConfig\": true,
    \"width\": null,
    \"height\": null,
    \"icon\": null,
    \"modalWidth\": null,
    \"modalHeight\": null,
    \"popoverSize\": null,
    \"popoverWidth\": null,
    \"popoverHeight\": null,
    \"namespace\": null,
    \"service\": null,
    \"method\": null,
    \"args\": null,
    \"title\": \"\\u042d\\u043b\\u0435\\u043c\\u0435\\u043d\\u0442\\u044b \\u043f\\u0440\\u043e\\u0434\\u0443\\u043a\\u0442\\u0430\",
    \"value\": null,
    \"valueShow\": null,
    \"defaultValue\": null,
    \"labelType\": null,
    \"groupOddCssClass\": null,
    \"groupEvenCssClass\": null,
    \"subGroupOf\": null,
    \"enableEvent\": null,
    \"changeSubmit\": null,
    \"changeReloadPjax\": null,
    \"changeReload\": true,
    \"changeSave\": true,
    \"changeChangeAll\": false,
    \"ajax\": null,
    \"multiple\": null,
    \"popoverScroll\": null,
    \"addPlus\": null,
    \"between\": null,
    \"hiddenFromExport\": null,
    \"mergeHeader\": null,
    \"pageSummary\": null,
    \"showStats\": true,
    \"edit\": null,
    \"filter\": null,
    \"depends\": null,
    \"readonly\": false,
    \"readonlyWidget\": false,
    \"readonlyKernel\": false,
    \"showForm\": null,
    \"showDyna\": null,
    \"showDetail\": null,
    \"showView\": null,
    \"hasLabel\": null,
    \"hasPlaceholder\": null,
    \"dynamic\": null,
    \"group\": null,
    \"groupedRow\": null,
    \"relatedSave\": false,
    \"relatedDelete\": false,
    \"rules\": null,
    \"labelSpan\": null,
    \"groupFooter\": null,
    \"groupHeader\": null,
    \"info\": null,
    \"data\": null,
    \"options\": null,
    \"valueOptions\": null,
    \"filterOptions\": null,
    \"dynaOptions\": null,
    \"roleShow\": null,
    \"roleEdit\": null,
    \"roleFilter\": null
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:13:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 276;
        $this->model->sort = null;
        $this->model->name = 'Provider-Menu-/crud/menu/index-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"inline\": null,
            \"icon\": null,
            \"role\": null,
            \"json\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\menu\\\\Menu\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:11:31';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 286;
        $this->model->sort = null;
        $this->model->name = 'sessionFormConfigs';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"topBtn\": true,
    \"isForm\": true,
    \"topBtnType\": \"button\",
    \"topBtnEvent\": {
        \"click\": \"                      \\r\\n                           var parentWindow = window.parent.document;\\r\\n                           var panel = parentWindow.getElementById(\'jsPanel-edit-dyna\')\\r\\n                           console.log(parentWindow);\\r\\n                                                        \\r\\n                           var id = \'jamster-ShopElement\';\\r\\n                           var button = parentWindow.getElementById(id);\\r\\n                           console.log(id);\\r\\n                           console.log(button);\\r\\n                           \$(button).trigger(\'click\');\\r\\n                           \\r\\n                           panel.close();\\r\\n               \"
    },
    \"botBtn\": false
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:13:04';
        $this->model->user_id = 409;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 289;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop-element/index-0';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_product_id\": null,
            \"barcode\": null,
            \"barcode_type\": null,
            \"option_combine\": null,
            \"option_simple\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopElement\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 12:16:57';
        $this->model->user_id = 0;
        $this->save();


        $this->model = new CoreSession();

        $this->model->id = 291;
        $this->model->sort = null;
        $this->model->name = 'Provider-ShopElement-/crud/shop_element/system-409';
        $this->model->tranz = null;
        $this->model->active = 1;
        $this->model->session = '75f8f04c4343aa41bc299f7230fb783a59d8d54c15f6828a3b40940ac549e39f';
        $this->model->value = '{
    \"behaviors\": null,
    \"count\": null,
    \"db\": null,
    \"id\": null,
    \"key\": null,
    \"keys\": null,
    \"models\": null,
    \"query\": {
        \"model\": {
            \"id\": null,
            \"sort\": null,
            \"name\": null,
            \"title\": null,
            \"tranz\": null,
            \"accept\": null,
            \"active\": null,
            \"shop_product_id\": null,
            \"barcode\": null,
            \"barcode_type\": null,
            \"option_combine\": null,
            \"option_simple\": null
        },
        \"modelClass\": \"zetsoft\\\\models\\\\shop\\\\ShopElement\",
        \"kernel\": false,
        \"transform\": true,
        \"sql\": null,
        \"on\": null,
        \"joinWith\": null,
        \"select\": null,
        \"selectOption\": null,
        \"distinct\": null,
        \"from\": null,
        \"groupBy\": null,
        \"join\": null,
        \"having\": null,
        \"union\": null,
        \"withQueries\": null,
        \"params\": [],
        \"queryCacheDuration\": null,
        \"queryCacheDependency\": null,
        \"where\": null,
        \"limit\": null,
        \"offset\": null,
        \"orderBy\": {
            \"id\": 3
        },
        \"indexBy\": null,
        \"emulateExecution\": false,
        \"with\": null,
        \"asArray\": true,
        \"multiple\": null,
        \"primaryModel\": null,
        \"link\": null,
        \"via\": null,
        \"inverseOf\": null
    },
    \"totalCount\": null,
    \"andWhere\": [],
    \"orWhere\": [],
    \"where\": []
}';
        $this->model->type = '';
        $this->model->expire = '2020-11-18 18:32:58';
        $this->model->user_id = 409;
        $this->save();


    }

}