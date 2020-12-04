<?php

namespace zetsoft\inserts\market;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\page\PageView;

class PageViewInsert extends ZInsert
{

    public function run()
    {

        $this->model = new PageView();

        $this->model->id = 11042;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-element/index';
        $this->model->title = 'Элементы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2255;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10831;
        $this->model->sort = null;
        $this->model->name = '/core/menu/update-ajax';
        $this->model->title = 'Редактирование Курьеры';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10832;
        $this->model->sort = null;
        $this->model->name = '/core/menu/update';
        $this->model->title = 'Редактирование  Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10834;
        $this->model->sort = null;
        $this->model->name = '/core/menu/view';
        $this->model->title = 'Просмотр  Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10857;
        $this->model->sort = null;
        $this->model->name = '/core/product/deleteAddress';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10821;
        $this->model->sort = null;
        $this->model->name = '/core/menu/create-ajax';
        $this->model->title = 'Создание Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10793;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesTemplates';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10859;
        $this->model->sort = null;
        $this->model->name = '/core/product/disVote';
        $this->model->title = 'disVote';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12739;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/create-process';
        $this->model->title = 'Создание Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10769;
        $this->model->sort = null;
        $this->model->name = '/core/fop/fop1';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2218;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10889;
        $this->model->sort = null;
        $this->model->name = '/core/product/setToCartByElementId';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10830;
        $this->model->sort = null;
        $this->model->name = '/core/menu/indexCategory';
        $this->model->title = 'Список Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11028;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/update1';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12625;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/view-process';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6263;
        $this->model->sort = null;
        $this->model->name = '/shop/client/adress/main';
        $this->model->title = 'Создание Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1651;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12690;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12642;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/update-process';
        $this->model->title = 'Редактирование Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12643;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/view-process';
        $this->model->title = 'Просмотр Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12650;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/create-process';
        $this->model->title = 'Создание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11029;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/update2';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6254;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/related';
        $this->model->title = 'related';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12685;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/index2sukhrob';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12702;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order/create-process';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1836;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11025;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/indexShahzod';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12640;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/create-process-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12623;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/create-process';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6063;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/system';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11741;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/ZUsersDataList';
        $this->model->title = 'ZUsersDataList';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2385;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6013;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/system';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6055;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/choose';
        $this->model->title = 'Подобрать Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6061;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/index';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8756;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/session';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12646;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/view-process';
        $this->model->title = 'Просмотр Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10612;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/system';
        $this->model->title = 'Доставка заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6199;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexAbl';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 5987;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/all';
        $this->model->title = 'Админ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6042;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/filter';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10918;
        $this->model->sort = null;
        $this->model->name = '/core/widget/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10919;
        $this->model->sort = null;
        $this->model->name = '/core/widget/selectModel';
        $this->model->title = 'selectModel';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 5990;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/mainAz';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11026;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexXOld';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6054;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6201;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexD';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6078;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/system';
        $this->model->title = 'Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6081;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/update';
        $this->model->title = 'Редактирование Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6027;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/process';
        $this->model->title = 'Перенос даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6089;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/create';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6092;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6094;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/index-download';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6095;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/index';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12665;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/update-process';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6097;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/orders';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6037;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/delete';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 5989;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/main';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6033;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/view';
        $this->model->title = 'Просмотр';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12667;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6104;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/update';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6106;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/view-return';
        $this->model->title = 'Просмотр приёмки от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6146;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6072;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/create';
        $this->model->title = 'Создание Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6076;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/index';
        $this->model->title = 'Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12012;
        $this->model->sort = null;
        $this->model->name = '/core/read/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6047;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/sh';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12689;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/update-process';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12679;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/mainX1Z';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6248;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/create';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6253;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6255;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/system';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10668;
        $this->model->sort = null;
        $this->model->name = '/core/grape/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6268;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/create';
        $this->model->title = 'Создание Нового адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10917;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sample_2';
        $this->model->title = 'sample_2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6070;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/choose';
        $this->model->title = 'Подобрать Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6086;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/choose-orders';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6188;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/index';
        $this->model->title = 'Оператор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1629;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6198;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6204;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexSherzod';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6077;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/shahzod';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6022;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/delete';
        $this->model->title = 'Перенос даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6024;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/index';
        $this->model->title = 'Перенос даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6025;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/orderDyna';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6176;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/create';
        $this->model->title = 'Создание перемещения между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6187;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/view';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6026;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/orders';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6030;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/system';
        $this->model->title = 'Перенос даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6323;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/shipping-m';
        $this->model->title = 'Доставка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6245;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/other/main/index';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1648;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6141;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/delete';
        $this->model->title = 'Отгрузка товаров со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6114;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/create';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6021;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/create';
        $this->model->title = 'Перенос даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6233;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/create';
        $this->model->title = 'Создание Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6034;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6036;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/create';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6043;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6046;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/related';
        $this->model->title = 'related';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6048;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/system';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6003;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/check';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6008;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/delete';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6018;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/view';
        $this->model->title = 'Просмотр Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7296;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7301;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main2';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7304;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/navbar';
        $this->model->title = 'navbar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6350;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/redirect/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1682;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6189;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/dashboard/index';
        $this->model->title = 'Оператор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1630;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6196;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/index-javohir';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6197;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/index-javohir2';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6200;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexAziz';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6205;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexSherzod1';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6057;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/create';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6091;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/delete-orders';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6299;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/no-complect/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11545;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/refundOrders';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6287;
        $this->model->sort = null;
        $this->model->name = '/shop/client/order/history';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1659;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6288;
        $this->model->sort = null;
        $this->model->name = '/shop/client/order/main';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1659;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6262;
        $this->model->sort = null;
        $this->model->name = '/shop/client/adress/create';
        $this->model->title = 'Создание Нового адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1651;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6134;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6140;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/create';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6119;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/index';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6121;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/process';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6311;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/about-m';
        $this->model->title = 'О нашем сервисе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6312;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/about';
        $this->model->title = 'О нашем сервисе';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6315;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/contacts';
        $this->model->title = 'Наши контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6309;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/indexTest';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1670;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6347;
        $this->model->sort = null;
        $this->model->name = '/shop/courier/main/orders';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1678;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6251;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/example_relation';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6349;
        $this->model->sort = null;
        $this->model->name = '/shop/courier/main/process-shipment';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1678;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6050;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/testcard';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6052;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7282;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/all';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7286;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/autoDialCheckbox_old';
        $this->model->title = 'autoDialCheckbox_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7289;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/create-order-item';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7293;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/example_relation';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7295;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/header';
        $this->model->title = 'header';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7306;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/periodFilter';
        $this->model->title = 'periodFilter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6274;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/placea';
        $this->model->title = 'Тестовые компоненты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12762;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/mainOld';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6284;
        $this->model->sort = null;
        $this->model->name = '/shop/client/main/main';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1657;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6173;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7310;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/statusCheckbox1';
        $this->model->title = 'statusCheckbox1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bags-shopping';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6322;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/payment';
        $this->model->title = 'Оплата';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7312;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/system';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7316;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/update';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7272;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/related';
        $this->model->title = 'related';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6261;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6273;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/orderForm';
        $this->model->title = 'Тестовые компоненты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6328;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/create';
        $this->model->title = 'Создание Справочника';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1674;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6339;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/search';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1675;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6317;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/oferta-m';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6340;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1675;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6341;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/test2';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1675;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6342;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bullhorn';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1675;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6343;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-truck-container';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1675;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10167;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/review-product-iframe';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6207;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexXolmat2';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6289;
        $this->model->sort = null;
        $this->model->name = '/shop/client/settings/main';
        $this->model->title = 'Настройки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1660;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6237;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/index';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8857;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/view';
        $this->model->title = 'Просмотр Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6321;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/payment-m';
        $this->model->title = 'Оплата';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6326;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/warranty-m';
        $this->model->title = 'Гарантии';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6327;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/warranty';
        $this->model->title = 'warranty';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6304;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1669;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7279;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/other/cdr';
        $this->model->title = 'Купоны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1634;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6303;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shipment-ready/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1667;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7287;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7269;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/example_relation';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7271;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7276;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/update';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7305;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/navbar1';
        $this->model->title = 'navbar1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7263;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/choose';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6316;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/help';
        $this->model->title = 'Помощь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6319;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/ofertaAjax';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6320;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/ofertaCheck-Out';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6335;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1675;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7280;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/other/status';
        $this->model->title = 'Купоны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1634;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6301;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shipment-ready/index';
        $this->model->title = 'Готов к отгрузке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1667;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6338;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/news/index';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1675;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6331;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/index';
        $this->model->title = 'EyufManual';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1674;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8735;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/index';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7284;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/autoDialCheckbox1';
        $this->model->title = 'autoDialCheckbox1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7290;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/create';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7297;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main-javohir';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7298;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main-older';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9963;
        $this->model->sort = null;
        $this->model->name = '/core/pond/pond-upload';
        $this->model->title = 'pond-upload';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2068;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7299;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11032;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/mainFozil';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7300;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main1';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7302;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/mainX';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10670;
        $this->model->sort = null;
        $this->model->name = '/core/grape/selected';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10166;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/review-company';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7309;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/statusCheckbox';
        $this->model->title = 'statusCheckbox';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7317;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/update_';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7319;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10669;
        $this->model->sort = null;
        $this->model->name = '/core/grape/save';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11552;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/view-return';
        $this->model->title = 'Просмотр приёмки от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7283;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/autoDialCheckbox';
        $this->model->title = 'autoDialCheckbox';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8148;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/system';
        $this->model->title = 'Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8153;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/view';
        $this->model->title = 'Просмотр Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9913;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/related';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10412;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single-productAzizjonSherzod2';
        $this->model->title = 'single-productAzizjonSherzod2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8140;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/view';
        $this->model->title = 'Просмотр';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8147;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/index';
        $this->model->title = 'Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10282;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/monitoring';
        $this->model->title = 'Мониторинг';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6031;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/update';
        $this->model->title = 'Редактировать Доставки заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8238;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/update';
        $this->model->title = 'Редактирование Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6334;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/view';
        $this->model->title = 'Просмотр  Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1674;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8239;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/view';
        $this->model->title = 'Просмотр Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6310;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1670;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8175;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/create';
        $this->model->title = 'Создание Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8179;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/index';
        $this->model->title = 'Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8183;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/update';
        $this->model->title = 'Редактирование Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8185;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/view';
        $this->model->title = 'Просмотр Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8161;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/index';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8162;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/order-items';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8163;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/process';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8165;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/system';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8138;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6209;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/update';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6090;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/currency';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8216;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/on-complect/index';
        $this->model->title = 'На комплектации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1666;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8221;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/on-complect/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1666;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8561;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8450;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1836;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8455;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1836;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6270;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/index';
        $this->model->title = 'Тестовые компоненты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10920;
        $this->model->sort = null;
        $this->model->name = '/core/widget/settings';
        $this->model->title = 'Настройка Опций Виджета ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10921;
        $this->model->sort = null;
        $this->model->name = '/core/widget/shahzod';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10922;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget';
        $this->model->title = 'widget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10761;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2215;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12757;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/items';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8562;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/items';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8610;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/delete-orders';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8612;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/index-download';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8614;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/orderItems';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8615;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/orders';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8616;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/process';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8621;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/update';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8623;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/view-return';
        $this->model->title = 'Просмотр приёмки от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10828;
        $this->model->sort = null;
        $this->model->name = '/core/menu/index';
        $this->model->title = 'Список Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8143;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/create';
        $this->model->title = 'Создание Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8624;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/view';
        $this->model->title = 'Просмотр приёмки от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10040;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/getPrice';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6348;
        $this->model->sort = null;
        $this->model->name = '/shop/courier/main/process-return';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1678;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8799;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8637;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/analytics/main';
        $this->model->title = 'Аналитикa';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1916;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8582;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/clean2';
        $this->model->title = 'clean2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8595;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8602;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/yandexTracking';
        $this->model->title = 'Отслеживание товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8567;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/choose';
        $this->model->title = 'Подобрать заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8571;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/index';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8574;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/orderDyna';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8575;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/orders';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8576;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/process';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8228;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/create';
        $this->model->title = 'Создание Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8234;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/relate11';
        $this->model->title = 'relate11';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8235;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/stats';
        $this->model->title = 'stats';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6305;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index2';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1669;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6306;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/index3';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1669;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6307;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/chat-message/main';
        $this->model->title = 'Сообщения';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1669;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8555;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8557;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/create';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8739;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/view-ajax';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8740;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/view';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 5991;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/main_Z';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8586;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/create-order';
        $this->model->title = 'Создание Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8587;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/create';
        $this->model->title = 'Создание Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8591;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/googleTracking';
        $this->model->title = 'Отслеживание товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8592;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/index';
        $this->model->title = 'Отслеживание товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8594;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/indexZoir';
        $this->model->title = 'Отслеживание товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6101;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/refundOrders';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9889;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10928;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2230;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8715;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/index';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8716;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/system';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8722;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1926;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8726;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/items';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1926;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9960;
        $this->model->sort = null;
        $this->model->name = '/core/lists/infinity-all';
        $this->model->title = 'infinity-all';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2067;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8729;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1926;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8566;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8936;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/view';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8606;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/choose';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8608;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/create';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8730;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/create-ajax';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8731;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/create';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9886;
        $this->model->sort = null;
        $this->model->name = '/core/crud/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8565;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8755;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/process';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8758;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/update';
        $this->model->title = 'Редактировать Доставки заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8707;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/choose';
        $this->model->title = 'Подобрать Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8759;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/view-ajax';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8744;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-question/index';
        $this->model->title = 'Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1930;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8604;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/choose-dc';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8613;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/index';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8710;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/createCheck';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8711;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/delete';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8748;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8833;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/stats-calls';
        $this->model->title = 'Статусы звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8835;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/stats-details';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8841;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/other/stats-worked-older';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1942;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8801;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/create';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8803;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/datepicker-statusX';
        $this->model->title = 'datepicker-statusX';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8810;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/index-orign';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8811;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/index';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8814;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexX2';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8816;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexX5';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8817;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexX6';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8818;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexXolmat';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8819;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/main';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8820;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/periodPicker2';
        $this->model->title = 'periodPicker2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8822;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/sh';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8823;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/shahzod';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8824;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/system';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8826;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/top-require-components';
        $this->model->title = 'top-require-components';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8828;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/update';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8830;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12013;
        $this->model->sort = null;
        $this->model->name = '/core/read/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8741;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-question/create';
        $this->model->title = 'Создание Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1930;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9031;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/main/clients';
        $this->model->title = 'Клиенты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1920;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9017;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/create';
        $this->model->title = 'Создание Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8832;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/navbar';
        $this->model->title = 'navbar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9122;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/index';
        $this->model->title = 'Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9128;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/view';
        $this->model->title = 'Просмотр Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8899;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/index';
        $this->model->title = 'Поступление товаров в склад!';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9118;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/delete';
        $this->model->title = 'Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8851;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/index';
        $this->model->title = 'Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8852;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/system';
        $this->model->title = 'Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8840;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/other/statistics';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1942;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8842;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/other/status-calc';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1942;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8843;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/other/status-javohir';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1942;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8844;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/other/statusDilmurod';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1942;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8798;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/checkStatus';
        $this->model->title = 'checkStatus';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8808;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/index-j';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8901;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/process';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8831;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/components';
        $this->model->title = 'components';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9041;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order-item/update';
        $this->model->title = 'Редактирование Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1928;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8815;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexX3';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9021;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/index';
        $this->model->title = 'Навигация товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9022;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/indexZ';
        $this->model->title = 'Навигация товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9129;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/main/create';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1631;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8845;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/choose';
        $this->model->title = 'Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9135;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/main/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1631;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8930;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/index';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8932;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/system';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9115;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/choose';
        $this->model->title = 'Подобрать Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9393;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8926;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/delete';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10923;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget2';
        $this->model->title = 'widget2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10924;
        $this->model->sort = null;
        $this->model->name = '/core/widget/widget3';
        $this->model->title = 'widget3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9388;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1927;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9047;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/shop-order/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1940;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9048;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/shop-order/create';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1940;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9052;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/shop-order/items';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1940;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9054;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/shop-order/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1940;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9055;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1940;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9039;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order-item/index';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1928;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9030;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/main/catalog';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1920;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9032;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/main/dashboard';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1920;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9033;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/main/index';
        $this->model->title = 'Панель организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1920;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8578;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/shipment';
        $this->model->title = 'РНазначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9015;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/create-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9029;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/view';
        $this->model->title = 'Просмотр Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8809;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/index-javohir';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9478;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/sh';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9400;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/deleteItems';
        $this->model->title = 'deleteItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9404;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9035;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order-item/create-ajax';
        $this->model->title = 'Создание Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1928;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8236;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/system';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9132;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/main/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1631;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6318;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/oferta';
        $this->model->title = 'Оферта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8780;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/status-top';
        $this->model->title = 'status-top';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1936;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7268;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/dynaTopRequire';
        $this->model->title = 'dynaTopRequire';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6246;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6007;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/createCheck';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8922;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7303;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/mainZoir';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9450;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/s';
        $this->model->title = 'Создание Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7265;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/create';
        $this->model->title = 'Создание Заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8446;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order/create';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1836;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8125;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/choose';
        $this->model->title = 'Подобрать заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9403;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/index';
        $this->model->title = 'Отгрузка товаров со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9405;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/process';
        $this->model->title = 'Новое списание со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8128;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/delete';
        $this->model->title = 'Доставка заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9385;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/shop-order/create';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1927;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9958;
        $this->model->sort = null;
        $this->model->name = '/core/grape/main';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9295;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/jamshid_AdminMain/index_jamshid';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1610;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9454;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/top-sh';
        $this->model->title = 'top-sh';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8141;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/choose';
        $this->model->title = 'Подобрать Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12653;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/create-process';
        $this->model->title = 'Создание Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8151;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/update';
        $this->model->title = 'Редактирование Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6181;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/index';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6182;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/process';
        $this->model->title = 'Перемещение товаров между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6150;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/system';
        $this->model->title = 'Отгрузка товаров со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6325;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/support-service';
        $this->model->title = 'Служба поддержки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6333;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/update';
        $this->model->title = 'Редактирование  Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1674;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9586;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/create';
        $this->model->title = 'Создание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6069;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/tracker/main';
        $this->model->title = 'Статистика Трэкинга';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1618;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9587;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/delete';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9591;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/index';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9593;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/process';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9594;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/sh';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9595;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/system';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9563;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/index';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9409;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/update';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9397;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/create-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9449;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/status-accept';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9051;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/shop-order/index';
        $this->model->title = 'Заказы колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1940;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6142;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/deleteItems';
        $this->model->title = 'deleteItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cash-register';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8812;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/index7';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6344;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/rate-chat/sample';
        $this->model->title = 'sample';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1676;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6083;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/view';
        $this->model->title = 'Просмотр Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7799;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/main/index';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1835;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6293;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/main/index';
        $this->model->title = 'В ожидании комплектации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7308;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/sh';
        $this->model->title = 'Создание Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9572;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/view';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9962;
        $this->model->sort = null;
        $this->model->name = '/core/pond/pond-delete';
        $this->model->title = 'pond-delete';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2068;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6294;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/main/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8605;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/choose-orders';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6084;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/calculate';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6275;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/saveOrder';
        $this->model->title = 'saveOrder';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10925;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2230;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9918;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sartirovka';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9919;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/saveUpdate';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9922;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sorting2';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9924;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/statistics';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9899;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9900;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content123';
        $this->model->title = 'content123';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9907;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/dynaform';
        $this->model->title = 'dynaform';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9911;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter_';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9912;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/norms';
        $this->model->title = 'norms';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9914;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/relation';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9916;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetSetting';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9917;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetSort';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9923;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sortingOld';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9925;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/stat_chart';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9640;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/system';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9926;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/stat_view';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9927;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/test';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8171;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/view2';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9566;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/sh';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8164;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/sh';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8925;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/create';
        $this->model->title = 'Создание перемещения между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9885;
        $this->model->sort = null;
        $this->model->name = '/core/crud/create';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9883;
        $this->model->sort = null;
        $this->model->name = '/core/core/verify';
        $this->model->title = 'verify';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-truck-container';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9930;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/configs';
        $this->model->title = 'configs';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-chart-pie-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9932;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/content_old';
        $this->model->title = 'content_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9933;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaContent';
        $this->model->title = 'dynaContent';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9934;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaform';
        $this->model->title = 'dynaform';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9935;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynaSettings';
        $this->model->title = 'dynaSettings';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9936;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/dynawidget';
        $this->model->title = 'dynawidget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9878;
        $this->model->sort = null;
        $this->model->name = '/core/core/error';
        $this->model->title = 'error';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8232;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6203;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexNumbers';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9896;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/apply';
        $this->model->title = 'apply';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9940;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/all';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9941;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/api';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9942;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/blocks';
        $this->model->title = 'blocks';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9943;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/render-php-grape';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9944;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/render-php';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9945;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/user';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9946;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-copy';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9947;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-copy_1';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9953;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9954;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/viewOb';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9910;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter2';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9897;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/columns';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9955;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other/htm';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2062;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9957;
        $this->model->sort = null;
        $this->model->name = '/core/files/play';
        $this->model->title = 'play';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2063;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6202;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexFayzullo';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9898;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/configs';
        $this->model->title = 'configs';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-eye';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9901;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentD';
        $this->model->title = 'contentD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9903;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentSh';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9904;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contentShahzod';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9905;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/content_';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9908;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/dynawidget';
        $this->model->title = 'dynawidget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-album-collection';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9909;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/filter';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10497;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/income';
        $this->model->title = 'Расчет прибыли';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10051;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main';
        $this->model->title = 'Описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9592;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/order-items';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10035;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10041;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9939;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/admin';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10049;
        $this->model->sort = null;
        $this->model->name = '/shop/paysys/paysys';
        $this->model->title = 'Создание Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2085;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10048;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9558;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/create';
        $this->model->title = 'Создание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9564;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/order-items';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9565;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/process';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9895;
        $this->model->sort = null;
        $this->model->name = '/core/crud/view';
        $this->model->title = 'Просмотр Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9880;
        $this->model->sort = null;
        $this->model->name = '/core/core/oauth_';
        $this->model->title = 'oauth_';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9881;
        $this->model->sort = null;
        $this->model->name = '/core/core/queue';
        $this->model->title = 'queue';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9882;
        $this->model->sort = null;
        $this->model->name = '/core/core/return';
        $this->model->title = 'return';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10122;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-catalog/empty/empty';
        $this->model->title = 'empty';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2096;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9929;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/columns';
        $this->model->title = 'columns';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9951;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-test';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10221;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-catalog/sale';
        $this->model->title = 'sale';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2112;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10265;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/empty/emptyBySatus';
        $this->model->title = 'emptyBySatus';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2118;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10045;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/system';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9879;
        $this->model->sort = null;
        $this->model->name = '/core/core/oauth';
        $this->model->title = 'oauth';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10171;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/review-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10267;
        $this->model->sort = null;
        $this->model->name = '/shop/user/market-index/main-m';
        $this->model->title = 'Категория';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2119;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9567;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/system';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10169;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/review-product-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10833;
        $this->model->sort = null;
        $this->model->name = '/core/menu/view-ajax';
        $this->model->title = 'Просмотр тестовых компонентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10124;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common/main';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2097;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10284;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/question-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10108;
        $this->model->sort = null;
        $this->model->name = '/shop/user/brand-index/main';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2087;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10217;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-catalog/empty';
        $this->model->title = 'Описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2112;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10050;
        $this->model->sort = null;
        $this->model->name = '/shop/user/common1';
        $this->model->title = 'Категория';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2086;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10218;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-catalog/information';
        $this->model->title = 'information';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2112;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10288;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/review1';
        $this->model->title = 'Отзывы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10216;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main/empty/emptyBySatus';
        $this->model->title = 'emptyBySatus';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2111;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10353;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/review';
        $this->model->title = 'Отзывы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10176;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main/main';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2107;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10114;
        $this->model->sort = null;
        $this->model->name = '/shop/user/cpa/a20';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2093;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10223;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/status';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10280;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/map';
        $this->model->title = 'Карта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10355;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single-product-map';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10359;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single-productPrice';
        $this->model->title = 'Цены';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10365;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/tab_product';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10174;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/modal/review-reply';
        $this->model->title = 'review-reply';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2106;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10266;
        $this->model->sort = null;
        $this->model->name = '/shop/user/market-index/index';
        $this->model->title = 'Компании';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2119;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10358;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single-product';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10268;
        $this->model->sort = null;
        $this->model->name = '/shop/user/market-index/main';
        $this->model->title = 'Категория';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2119;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10421;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-basket/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2136;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10427;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-viewed/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2139;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10397;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/empty/product_id_empty';
        $this->model->title = 'product_id_empty';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2132;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10283;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/price';
        $this->model->title = 'Цены';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10286;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/review-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10164;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-question/review-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2102;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10175;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main/main-menu';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2107;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10163;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-question/question-new';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2102;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10430;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-wish/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-heart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2141;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10345;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/clean1';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10364;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/tab-single-product-market';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10220;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-catalog/new';
        $this->model->title = 'new';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2112;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10347;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/common';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10348;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/map';
        $this->model->title = 'Карта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10350;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/questionsAnswers';
        $this->model->title = 'Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10277;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/characteristics';
        $this->model->title = 'Характеристика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10351;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/review-product';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10392;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/css/style';
        $this->model->title = 'style';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2131;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10393;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/empty/empty';
        $this->model->title = 'empty';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2132;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10396;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/empty/notFound';
        $this->model->title = 'notFound';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-images';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2132;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10423;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-compare/main-m';
        $this->model->title = 'main-m';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2138;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10173;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/modal/review-company';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2106;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10287;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/review';
        $this->model->title = 'Отзывы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10352;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/review-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10360;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single-productPriceJ';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10413;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single-productPrice';
        $this->model->title = 'Цены';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10415;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single-productSalohiddin';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10416;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single_product_characteristics';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10419;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/tab-single-product-common';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10400;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/information';
        $this->model->title = 'Информация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10401;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/map';
        $this->model->title = 'Карта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10429;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-wish/main-m';
        $this->model->title = 'main-m';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-heart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2141;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10402;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/markets-list';
        $this->model->title = 'Описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10403;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/monitoring';
        $this->model->title = 'Мониторинг';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10404;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/price';
        $this->model->title = 'Цены';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10408;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/review';
        $this->model->title = 'Отзывы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10409;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/review1';
        $this->model->title = 'Отзывы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10420;
        $this->model->sort = null;
        $this->model->name = '/shop/user/search/search';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2135;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10433;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/logout';
        $this->model->title = 'Logout';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10410;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/review-product';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8229;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/delete';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8233;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/relate';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6313;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/behruz_support';
        $this->model->title = 'behruz_support';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6314;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/contacts-m';
        $this->model->title = 'Наши контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8173;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/choose';
        $this->model->title = 'Подобрать Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8569;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/create';
        $this->model->title = 'Новое назначение заказа курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10411;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single-productAbdulloh';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8738;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/update';
        $this->model->title = 'Редактирование Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10399;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/common-m';
        $this->model->title = 'Описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6006;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/create';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7307;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/periodPicker';
        $this->model->title = 'periodPicker';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7311;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/statusCheckbox_old';
        $this->model->title = 'statusCheckbox_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10394;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/empty/emptyy';
        $this->model->title = 'Описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2132;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10395;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/empty/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2132;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10047;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10424;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-compare/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2138;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9399;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/delete';
        $this->model->title = 'Отгрузка товаров со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10422;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-basket/mainAz';
        $this->model->title = 'mainAz';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2136;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10425;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-viewed/array';
        $this->model->title = 'array';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2139;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8172;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/progressive/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1635;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6297;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/no-complect/index';
        $this->model->title = 'Не комплект';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12659;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/view-process';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8757;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/shipment';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9391;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/shop-order/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1927;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8839;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/status-operator';
        $this->model->title = 'Управление статусом оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10786;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getOptions';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'partFile';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10344;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/characteristics';
        $this->model->title = 'Характеристика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10349;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/market';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10655;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_item';
        $this->model->title = 'chess_item';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10656;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view';
        $this->model->title = 'chess_view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9915;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/resetFilter';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9920;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/setActive';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9384;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/shop-order/choose';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1927;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10123;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common/main-m';
        $this->model->title = 'Категория';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2097;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10125;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common/mainBosya';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2097;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12793;
        $this->model->sort = null;
        $this->model->name = '/core/read/multiItems';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8802;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/datepicker-status';
        $this->model->title = 'datepicker-status';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-credit-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6029;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/shipment';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6241;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/update';
        $this->model->title = 'Редактирование Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12786;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/password_res';
        $this->model->title = 'Восстановление пароля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2570;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6068;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/view';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6346;
        $this->model->sort = null;
        $this->model->name = '/shop/courier/main/orderItems';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1678;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8609;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/currency';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10599;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/accept-courier';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10600;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/company-order';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10601;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/courier-report';
        $this->model->title = 'Отчёт по курьерам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10602;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/order-status';
        $this->model->title = 'Статус заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10603;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/pay-backs';
        $this->model->title = 'Выкупы для Колл-Центр';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10604;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/portion-order';
        $this->model->title = 'Проверка порции заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10605;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/reject-causes';
        $this->model->title = 'Причины отказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9949;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-2';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10657;
        $this->model->sort = null;
        $this->model->name = '/core/grape/block';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10658;
        $this->model->sort = null;
        $this->model->name = '/core/grape/edit';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10661;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getBlocks';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10662;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getOptions';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFile';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10663;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getOptionsAbl';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10665;
        $this->model->sort = null;
        $this->model->name = '/core/grape/index';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10666;
        $this->model->sort = null;
        $this->model->name = '/core/grape/indexBosya';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10667;
        $this->model->sort = null;
        $this->model->name = '/core/grape/index_';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6276;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/success';
        $this->model->title = 'Состояния заказов покупателей';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10809;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRustam';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10810;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexSherzod';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10811;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexSherzod1';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10812;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/main';
        $this->model->title = 'Конструктор';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10813;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/reset';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10788;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getWidgetPart';
        $this->model->title = 'getWidgetPart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'ajax\'];::type[\'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10789;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesCards';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10606;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/courier';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10792;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesMainV2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10795;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/index2';
        $this->model->title = 'index2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10796;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexA';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10797;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexAbror';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10808;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRavBasic';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10816;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/selected';
        $this->model->title = 'selected';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10802;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMaladoy-khusan';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10803;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMaladoy';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10817;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/templates';
        $this->model->title = 'templates';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10804;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexMirbosit';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10805;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10814;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/save';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10766;
        $this->model->sort = null;
        $this->model->name = '/core/filter/dynaFilter';
        $this->model->title = 'dynaFilter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2217;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10819;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/widgets';
        $this->model->title = 'widgets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10767;
        $this->model->sort = null;
        $this->model->name = '/core/filter/setFilter';
        $this->model->title = 'setFilter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2217;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10748;
        $this->model->sort = null;
        $this->model->name = '/core/asror/widget';
        $this->model->title = 'widget';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2209;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10693;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/universe';
        $this->model->title = 'universe';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10751;
        $this->model->sort = null;
        $this->model->name = '/core/edit/edit';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2211;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10745;
        $this->model->sort = null;
        $this->model->name = '/core/asror/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2209;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10752;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editable';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2211;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10825;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editor2';
        $this->model->title = 'editor2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10781;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBlockAssets';
        $this->model->title = 'getBlockAssets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10782;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBlocks';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10743;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setOnline';
        $this->model->title = 'setOnline';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2208;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9036;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order-item/create';
        $this->model->title = 'Создание Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1928;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10754;
        $this->model->sort = null;
        $this->model->name = '/core/error/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2212;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10607;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/asror';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10052;
        $this->model->sort = null;
        $this->model->name = '/shop/user/category-index/main';
        $this->model->title = 'Категория';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2089;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9948;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-editor';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9956;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/other/video';
        $this->model->title = 'video';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2062;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10659;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getAssets';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10660;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getBlockAssets';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10664;
        $this->model->sort = null;
        $this->model->name = '/core/grape/getWidget';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10896;
        $this->model->sort = null;
        $this->model->name = '/core/widget/accordion2';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10784;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getForm';
        $this->model->title = 'getForm';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10785;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getGeneral';
        $this->model->title = 'getGeneral';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10801;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexJahongir';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10852;
        $this->model->sort = null;
        $this->model->name = '/core/product/addVote';
        $this->model->title = 'addVote';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10742;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setInProsess';
        $this->model->title = 'setInProsess';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2208;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10791;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesMain';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10873;
        $this->model->sort = null;
        $this->model->name = '/core/product/infinity';
        $this->model->title = 'infinity';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10806;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10854;
        $this->model->sort = null;
        $this->model->name = '/core/product/clearFilterFromSession';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10818;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/temps';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10807;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexRav3';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10861;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCartOrders';
        $this->model->title = 'getCartOrders';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10863;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10878;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClearSupervisor';
        $this->model->title = 'rangeClearSupervisor';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10744;
        $this->model->sort = null;
        $this->model->name = '/core/agent/superviserStats';
        $this->model->title = 'superviserStats';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2208;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10762;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2215;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10756;
        $this->model->sort = null;
        $this->model->name = '/core/error/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2212;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10799;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10790;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/grapesCards2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10654;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess';
        $this->model->title = 'Конструктор отчетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10794;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10897;
        $this->model->sort = null;
        $this->model->name = '/core/widget/class';
        $this->model->title = 'class';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10885;
        $this->model->sort = null;
        $this->model->name = '/core/product/setLang';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10747;
        $this->model->sort = null;
        $this->model->name = '/core/asror/testing';
        $this->model->title = 'testing';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-truck-container';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2209;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10783;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getBranch';
        $this->model->title = 'getBranch';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10779;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/depdropData3';
        $this->model->title = 'depdropData3';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bullhorn';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10874;
        $this->model->sort = null;
        $this->model->name = '/core/product/like';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10780;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getAssets';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10875;
        $this->model->sort = null;
        $this->model->name = '/core/product/modalContent';
        $this->model->title = 'modalContent';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shield';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10787;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/getWidget';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajaxFilePreg';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10900;
        $this->model->sort = null;
        $this->model->name = '/core/widget/getAssets';
        $this->model->title = 'getAssets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10872;
        $this->model->sort = null;
        $this->model->name = '/core/product/getStatByDay1';
        $this->model->title = 'getStatByDay1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gears';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10884;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFiltertest';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10869;
        $this->model->sort = null;
        $this->model->name = '/core/product/getMarkets';
        $this->model->title = 'getMarkets';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10883;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFilter2';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10890;
        $this->model->sort = null;
        $this->model->name = '/core/product/sort';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-thumbs-up';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10902;
        $this->model->sort = null;
        $this->model->name = '/core/widget/Mirbosit';
        $this->model->title = 'Mirbosit';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-laptop-house';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10888;
        $this->model->sort = null;
        $this->model->name = '/core/product/setToCart';
        $this->model->title = 'setToCart';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10879;
        $this->model->sort = null;
        $this->model->name = '/core/product/saveOrder';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10876;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClear';
        $this->model->title = 'rangeClear';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10961;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/process';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10778;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/depdropData';
        $this->model->title = 'depdropData';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10870;
        $this->model->sort = null;
        $this->model->name = '/core/product/getOption';
        $this->model->title = 'getOption';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10871;
        $this->model->sort = null;
        $this->model->name = '/core/product/getStatByDay';
        $this->model->title = 'getStatByDay';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10826;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editorBosya';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10892;
        $this->model->sort = null;
        $this->model->name = '/core/region/getRegion';
        $this->model->title = 'getRegion';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2227;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10860;
        $this->model->sort = null;
        $this->model->name = '/core/product/getByScroll';
        $this->model->title = 'getByScroll';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-save';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10886;
        $this->model->sort = null;
        $this->model->name = '/core/product/setOrderToAgent';
        $this->model->title = 'setOrderToAgent';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10899;
        $this->model->sort = null;
        $this->model->name = '/core/widget/dilshod';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10777;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/cleanGrapes';
        $this->model->title = 'ZetGrapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10887;
        $this->model->sort = null;
        $this->model->name = '/core/product/setReview';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10895;
        $this->model->sort = null;
        $this->model->name = '/core/widget/accordion';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10673;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/test';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10827;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editorRav';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10829;
        $this->model->sort = null;
        $this->model->name = '/core/menu/index2';
        $this->model->title = 'Список Меню';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10850;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToCompare';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10905;
        $this->model->sort = null;
        $this->model->name = '/core/widget/reset';
        $this->model->title = 'Сохранение Настроек Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10855;
        $this->model->sort = null;
        $this->model->name = '/core/product/clearViewedSession';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10906;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleIlyas';
        $this->model->title = 'sampleIlyas';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calculator';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10858;
        $this->model->sort = null;
        $this->model->name = '/core/product/dislike';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10862;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCartProductItems';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10964;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/view';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10908;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm2';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-gift';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10909;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormA';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10910;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormAziz';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10911;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormOb';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10912;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormRav';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10913;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormS';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10914;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormS2';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10915;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNormUmid';
        $this->model->title = 'sampleWidgetNormUmid';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-folder-open';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10929;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/widget2';
        $this->model->title = 'widget2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-microphone';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2230;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10760;
        $this->model->sort = null;
        $this->model->name = '/core/error_old/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2215;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10893;
        $this->model->sort = null;
        $this->model->name = '/core/report/getReport';
        $this->model->title = 'getReport';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cubes';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2228;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10746;
        $this->model->sort = null;
        $this->model->name = '/core/asror/option';
        $this->model->title = 'option';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-router';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2209;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10966;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/api/deleteItems';
        $this->model->title = 'deleteItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-keyboard';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2239;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10967;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/api/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2239;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10672;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/main1';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10974;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/order-report/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10965;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/api/delete';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2239;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10973;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/order-report/index';
        $this->model->title = 'Отчёт по курьерам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10937;
        $this->model->sort = null;
        $this->model->name = '/core/word/actObReturn';
        $this->model->title = 'actObReturn';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2232;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10938;
        $this->model->sort = null;
        $this->model->name = '/core/word/banderol';
        $this->model->title = 'banderol';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2232;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10940;
        $this->model->sort = null;
        $this->model->name = '/core/word/contract';
        $this->model->title = 'contract';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2232;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10995;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/create';
        $this->model->title = 'Создание Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10800;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexFozil';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10898;
        $this->model->sort = null;
        $this->model->name = '/core/widget/class2';
        $this->model->title = 'class2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10903;
        $this->model->sort = null;
        $this->model->name = '/core/widget/option';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10864;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyAbl';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11020;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify/verify-email';
        $this->model->title = 'verify-email';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2251;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11021;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify/verify-phone';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2251;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10671;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-catalog/catalog';
        $this->model->title = 'catalog';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2112;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10977;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/api/deleteItems';
        $this->model->title = 'deleteItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2246;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8154;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/choose';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12015;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexR';
        $this->model->title = 'indexR';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10907;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10979;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/api/delete';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2247;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10972;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/catalog-ware/index';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6265;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/main';
        $this->model->title = 'Создание Пользователь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2735;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7314;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/update-after';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7278;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10978;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/api/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2246;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7808;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item/update';
        $this->model->title = 'Редактирование Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1837;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10936;
        $this->model->sort = null;
        $this->model->name = '/core/word/actOb';
        $this->model->title = 'actOb';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2232;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10999;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/index';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11000;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/system';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11003;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/update';
        $this->model->title = 'Редактирование Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11005;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/view';
        $this->model->title = 'Просмотр Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11006;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/choose';
        $this->model->title = 'Подобрать Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12014;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexAs';
        $this->model->title = 'indexAs';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11008;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/create';
        $this->model->title = 'Создание Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11012;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/index';
        $this->model->title = 'Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11016;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/update';
        $this->model->title = 'Редактирование Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11018;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/view';
        $this->model->title = 'Просмотр Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11112;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-courier/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2274;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10927;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/sampleWidgetNorm';
        $this->model->title = 'sampleWidgetNorm';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock-open-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2230;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10975;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/api/choose-dc';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2245;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9453;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/shah';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10866;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyD';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10971;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/catalog-ware/create';
        $this->model->title = 'Создание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2242;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11019;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/verify/need-verify-email';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2251;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8577;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/session';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6324;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/info/shipping';
        $this->model->title = 'Доставка';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-industry';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1671;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8180;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/system';
        $this->model->title = 'Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6045;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7285;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/autoDialCheckboxShahzod';
        $this->model->title = 'autoDialCheckboxShahzod';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10894;
        $this->model->sort = null;
        $this->model->name = '/core/widget/1';
        $this->model->title = '1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6286;
        $this->model->sort = null;
        $this->model->name = '/shop/client/order/accepted';
        $this->model->title = 'История заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1659;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8135;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/session';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11102;
        $this->model->sort = null;
        $this->model->name = '/core/agent/callStatusTime';
        $this->model->title = 'callStatusTime';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2208;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11965;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/view-WareTrans-item';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11053;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/update_old';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9950;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape-context';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11966;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/view-WareExit-item';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10993;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/choose';
        $this->model->title = 'Подобрать Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11013;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/system';
        $this->model->title = 'Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10165;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/review-brand';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10901;
        $this->model->sort = null;
        $this->model->name = '/core/widget/indexBosya';
        $this->model->title = 'indexBosya';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-save';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10822;
        $this->model->sort = null;
        $this->model->name = '/core/menu/create';
        $this->model->title = 'Проверка покупки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6066;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/update';
        $this->model->title = 'Редактирование Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6277;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/successBack';
        $this->model->title = 'Проверка покупки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11107;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/update';
        $this->model->title = 'Редактирование Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11108;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/view';
        $this->model->title = 'Просмотр Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11110;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-courier/create';
        $this->model->title = 'Создание Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2274;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6062;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/shahzod';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10867;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany_abl';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11103;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/main/help/change';
        $this->model->title = 'change';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2271;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11068;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_clear_filter';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6128;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/view';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11064;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/delete';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9902;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/contents';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11067;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/system';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11052;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/delete';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11058;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/create-order-item-update';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11059;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/createWithProcess';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11060;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/index2';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11061;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexProblemTest';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11062;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/processUpdate';
        $this->model->title = 'Изменить заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11963;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/view-WareEnter-item';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11063;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/update-order-item';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11054;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/main/index2';
        $this->model->title = 'В ожидании комплектации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11056;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11057;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/system';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10053;
        $this->model->sort = null;
        $this->model->name = '/shop/user/category-index/mainZ';
        $this->model->title = 'Категория';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2089;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9931;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/content';
        $this->model->title = 'content';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10445;
        $this->model->sort = null;
        $this->model->name = '/shop/user/wish-viewed/empty/empty';
        $this->model->title = 'empty';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-tools';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2148;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9952;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-grape';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11106;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11964;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/stats-details_cdr';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10959;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/create';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9959;
        $this->model->sort = null;
        $this->model->name = '/core/grape/templates';
        $this->model->title = 'templates';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2064;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6267;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/check-out-clean-abl';
        $this->model->title = 'Проверка покупки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6278;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/update';
        $this->model->title = 'Редактирование Тестовые компоненты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11109;
        $this->model->sort = null;
        $this->model->name = '/shop/user/report/enter-sum';
        $this->model->title = 'Характеристика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2273;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10432;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/login-register';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6238;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/system';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11116;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/api/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2275;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8709;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/create';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11115;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/api/deleteItems';
        $this->model->title = 'deleteItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2275;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8718;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/update-ajax';
        $this->model->title = 'Редактирование Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8719;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/update';
        $this->model->title = 'Редактирование Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8728;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1926;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10594;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/mainA';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10595;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/test';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1609;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11288;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2269;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11290;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/update';
        $this->model->title = 'Редактирование Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2269;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11291;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/view';
        $this->model->title = 'Просмотр Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2269;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10815;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/saveEski';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9928;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/variant';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10741;
        $this->model->sort = null;
        $this->model->name = '/core/agent/setCallDate';
        $this->model->title = 'setCallDate';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2208;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6259;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/update';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9937;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/sorting';
        $this->model->title = 'sorting';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11105;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11289;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2269;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11972;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/system';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2269;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6298;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/no-complect/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1665;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11976;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view2';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9921;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sorting';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11991;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/create';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11993;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/delete';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11997;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/index';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11985;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/api/delete';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2431;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11989;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/choose';
        $this->model->title = 'Подобрать Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11986;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/api/deleteItems';
        $this->model->title = 'deleteItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2431;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11987;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/api/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2431;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8837;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/stats-market';
        $this->model->title = 'Статистика по времени работы операторов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11984;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/api/measure';
        $this->model->title = 'measure';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2429;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12008;
        $this->model->sort = null;
        $this->model->name = '/core/read/create';
        $this->model->title = 'Создание Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12016;
        $this->model->sort = null;
        $this->model->name = '/core/read/indexRav';
        $this->model->title = 'indexRav';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12017;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_2';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12019;
        $this->model->sort = null;
        $this->model->name = '/core/read/relate';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12020;
        $this->model->sort = null;
        $this->model->name = '/core/read/system';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12023;
        $this->model->sort = null;
        $this->model->name = '/core/read/view';
        $this->model->title = 'Просмотр Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12024;
        $this->model->sort = null;
        $this->model->name = '/core/read/1/indexAs2';
        $this->model->title = 'indexAs2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2428;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11983;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/api/deleteItems';
        $this->model->title = 'deleteItems';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-certificate';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2429;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9938;
        $this->model->sort = null;
        $this->model->name = '/core/dynasettings/visualdyna';
        $this->model->title = 'visualdyna';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2060;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6147;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/process';
        $this->model->title = 'Новое списание со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10222;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/main';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6210;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8563;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10856;
        $this->model->sort = null;
        $this->model->name = '/core/product/compare';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11975;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_query';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6177;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/delete';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8911;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/view';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8838;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/stats-worked';
        $this->model->title = 'Статистика по времени работы операторов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12005;
        $this->model->sort = null;
        $this->model->name = '/core/help/view-orders';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2411;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12006;
        $this->model->sort = null;
        $this->model->name = '/core/help/api/status';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2412;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12007;
        $this->model->sort = null;
        $this->model->name = '/core/read/choose';
        $this->model->title = 'Подобрать Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12009;
        $this->model->sort = null;
        $this->model->name = '/core/read/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12018;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_U';
        $this->model->title = 'index_U';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10609;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/datepicker-statusX1';
        $this->model->title = 'datepicker-statusX1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-check';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6154;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/view';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6028;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/session';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6332;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/man/testajax';
        $this->model->title = 'Создание Справочник';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-chrome';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1674;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8753;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/orderDyna';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9024;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/shipment';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8560;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/getPrice';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11356;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/indexSukhrob';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10499;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/operators';
        $this->model->title = 'Отчет по операторам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11379;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/order-report/index1';
        $this->model->title = 'Отчёт по курьерам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2244;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11364;
        $this->model->sort = null;
        $this->model->name = '/core/core/exit';
        $this->model->title = 'exit';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bullhorn';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12004;
        $this->model->sort = null;
        $this->model->name = '/core/help/view-order-item';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2411;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10851;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToWish';
        $this->model->title = 'addToWish';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11381;
        $this->model->sort = null;
        $this->model->name = '/core/product/autodial';
        $this->model->title = 'autodial';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10361;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single_product_characteristics';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11384;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessTest';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11385;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessUniversalReportTest';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9906;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/delete';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10755;
        $this->model->sort = null;
        $this->model->name = '/core/error/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2212;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9389;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/shop-order/items';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1927;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12003;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/view';
        $this->model->title = 'Просмотр Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11355;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/status-operator-Old-Working_version';
        $this->model->title = 'Управление статусом оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10128;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common/mainZ';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2097;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10960;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/index';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8579;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8227;
        $this->model->sort = null;
        $this->model->name = '/shop/cpatrack/main/choose';
        $this->model->title = 'Подобрать Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1681;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8747;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-question/view';
        $this->model->title = 'Просмотр Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1930;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9601;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/view2';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9126;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/update';
        $this->model->title = 'Редактирование Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10498;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/index';
        $this->model->title = 'Универсальный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9600;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/view';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9884;
        $this->model->sort = null;
        $this->model->name = '/core/crud/choose';
        $this->model->title = 'Подобрать Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9891;
        $this->model->sort = null;
        $this->model->name = '/core/crud/relate';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9892;
        $this->model->sort = null;
        $this->model->name = '/core/crud/system';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11382;
        $this->model->sort = null;
        $this->model->name = '/core/word/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2232;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10170;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/review-product';
        $this->model->title = 'review-product';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6107;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/view';
        $this->model->title = 'Просмотр приёмки от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10904;
        $this->model->sort = null;
        $this->model->name = '/core/widget/option_ilyas';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8721;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/view';
        $this->model->title = 'Просмотр Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12604;
        $this->model->sort = null;
        $this->model->name = '/core/product/cdk_clear_filter';
        $this->model->title = 'cdk_clear_filter';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8708;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/create-ajax';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10610;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexPhone';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10444;
        $this->model->sort = null;
        $this->model->name = '/shop/user/wish-viewed/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2147;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6266;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/add-adress';
        $this->model->title = 'Добавить Адресс';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8132;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/orders';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8137;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/system';
        $this->model->title = 'Доставка заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10514;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/update-region';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10279;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/information';
        $this->model->title = 'Информация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10281;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/markets-list';
        $this->model->title = 'Описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10285;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/questions-answers';
        $this->model->title = 'Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10346;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/common-jaxa';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10354;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single-product-characteristicsAxror';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10363;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/tab-single-product-common';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11360;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/select3';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11992;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/createCheck';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11998;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/system';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gg-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12001;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/update';
        $this->model->title = 'Редактирование Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11531;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/calculate';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11988;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/check';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12605;
        $this->model->sort = null;
        $this->model->name = '/core/report/cdk-report-n';
        $this->model->title = 'СКД Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2228;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11543;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/orders';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11544;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/process';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11547;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/status-accept';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11550;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/update';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11553;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/view';
        $this->model->title = 'Просмотр приёмки от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11554;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/api/choose-dc';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2328;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9134;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/main/update';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1631;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8934;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/update';
        $this->model->title = 'Редактирование Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11557;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/index2';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9584;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/choose';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6004;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/choose';
        $this->model->title = 'Подобрать Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11559;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/return-items';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11351;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/createElement';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10398;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/characteristics';
        $this->model->title = 'Характеристика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6012;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/index';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11359;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/updateV1_working';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7801;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item/create';
        $this->model->title = 'Создание Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1837;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11363;
        $this->model->sort = null;
        $this->model->name = '/core/core/delete';
        $this->model->title = 'delete';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2056;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11982;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/api/delete';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2429;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8127;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/create';
        $this->model->title = 'Новое назначение заказа курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11345;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/indexSukhrob';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10962;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/system';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11532;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/choose-orders';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11534;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/create';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11536;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/delete-orders';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11538;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/donwload';
        $this->model->title = 'donwload';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11542;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/orderItems';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11104;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/create';
        $this->model->title = 'Создание Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6135;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/create-ajax-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6345;
        $this->model->sort = null;
        $this->model->name = '/shop/courier/main/main';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1678;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8170;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/view';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10037;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/create';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11567;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/test';
        $this->model->title = 'Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6208;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11111;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-courier/delete';
        $this->model->title = 'Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2274;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8720;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/view-ajax';
        $this->model->title = 'Просмотр Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11369;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/login';
        $this->model->title = 'Вход | Регистрация';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11807;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/address/index';
        $this->model->title = 'Адрес';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2373;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11354;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/autodial';
        $this->model->title = 'Управление статусом оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11027;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/test';
        $this->model->title = 'Статистика по времени работы операторов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11541;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/index';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11830;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/index';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2378;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11831;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/indexTest';
        $this->model->title = 'ЧАВО';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2378;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11832;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/faqs/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2378;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11720;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/map/index';
        $this->model->title = 'Карта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2381;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11859;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/index';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11725;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11726;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test2';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11727;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/test3';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11861;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/profile';
        $this->model->title = 'profile';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11728;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/update';
        $this->model->title = 'update';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11729;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/view';
        $this->model->title = 'view';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11738;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/edit';
        $this->model->title = 'Измененить пароль';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2385;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11739;
        $this->model->sort = null;
        $this->model->name = '/core/user/change-password/edit_OLD';
        $this->model->title = 'edit_OLD';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2385;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11740;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/index';
        $this->model->title = 'Users';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2385;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11858;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/contacts';
        $this->model->title = 'contacts';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11862;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/statistics';
        $this->model->title = 'Статистика';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11810;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/accept';
        $this->model->title = 'accept';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11863;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/table';
        $this->model->title = 'table';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11712;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2370;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11811;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/fast-register-frame';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11812;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-institution';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11813;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login-frame';
        $this->model->title = 'login-frame';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-book';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11814;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login-o2';
        $this->model->title = 'Вход в систему';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11815;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/login';
        $this->model->title = 'Вход в систему';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11816;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/logout';
        $this->model->title = 'Logout';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11864;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-user';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11817;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register-frame';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11818;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11819;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/user-check';
        $this->model->title = 'user-check';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cart-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11820;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify-scholar';
        $this->model->title = 'verify-scholar';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-database';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11821;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify';
        $this->model->title = 'verify';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11535;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/currency';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11721;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/create';
        $this->model->title = 'create';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11722;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/detail';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11723;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/index';
        $this->model->title = 'Новости';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11724;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/news/search';
        $this->model->title = 'Контакты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2382;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10608;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/main/create';
        $this->model->title = 'Панель организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1920;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11713;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/create-region';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11348;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/indexXolmat';
        $this->model->title = 'Универсальный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6302;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shipment-ready/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1667;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7273;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/system';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11558;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/refundOrders';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9411;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/view';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6145;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/index';
        $this->model->title = 'Отгрузка товаров со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12617;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/create-process-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8800;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/create-order-item';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8807;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/exportToExcel';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8813;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/indexX';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8752;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/index';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10126;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common/mainDilmurod';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2097;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8596;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/shipment';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8601;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/view';
        $this->model->title = 'Просмотр Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8581;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/view';
        $this->model->title = 'Просмотр';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9016;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/create-order';
        $this->model->title = 'Создание Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9133;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/main/test';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1631;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8585;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/create-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8737;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/update-ajax';
        $this->model->title = 'Редактирование Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10362;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single_product_questions_answers';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8168;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/update';
        $this->model->title = 'Редактирование возврата от клиента';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10504;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/universal-report/skd-dailyreport';
        $this->model->title = 'СКД Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2163;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10406;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/questions-answers';
        $this->model->title = 'Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12773;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_item1';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10127;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-common/mainpage';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2097;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11546;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/return-items';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12021;
        $this->model->sort = null;
        $this->model->name = '/core/read/tabular';
        $this->model->title = 'Изменить все - Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9598;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/update';
        $this->model->title = 'Редактирование возврата от клиента';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9573;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/view2';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6279;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/view';
        $this->model->title = 'Просмотр Тестовые компоненты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cropLength';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10115;
        $this->model->sort = null;
        $this->model->name = '/shop/user/filter-catalog/main';
        $this->model->title = 'Продукты по категориям';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2094;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8218;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/on-complect/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1666;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11974;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-courier/system';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2272;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10969;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/api/delete';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11346;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10916;
        $this->model->sort = null;
        $this->model->name = '/core/widget/sampleWidgetNorm_';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2229;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11287;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-courier/create';
        $this->model->title = 'Создание Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2269;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10853;
        $this->model->sort = null;
        $this->model->name = '/core/product/afterEditCoreCategory';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10865;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompanyAZ';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10880;
        $this->model->sort = null;
        $this->model->name = '/core/product/setCurrency';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10881;
        $this->model->sort = null;
        $this->model->name = '/core/product/setCurrencyRadio';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10356;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single-product-map2';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12610;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/update-process';
        $this->model->title = 'Редактирование Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12618;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6185;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/update';
        $this->model->title = 'Редактирование Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-phone-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12611;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/view-process';
        $this->model->title = 'Просмотр Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6243;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/view';
        $this->model->title = 'Просмотр Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12620;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/view-process';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12615;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6124;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/system';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paperclip';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12609;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/create-process';
        $this->model->title = 'Создание Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12612;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/create-process';
        $this->model->title = 'Создание Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12654;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/update-process';
        $this->model->title = 'Редактирование Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11537;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/delete';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11860;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/main';
        $this->model->title = 'Статистика в формате стран по программам';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11548;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/system';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11969;
        $this->model->sort = null;
        $this->model->name = '/core/report/cdk-report';
        $this->model->title = 'СКД Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2228;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12622;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/view-process';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12630;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/view-process';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12613;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/update-process';
        $this->model->title = 'Редактирование Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12614;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/view-process';
        $this->model->title = 'Просмотр Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1619;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9042;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order-item/view';
        $this->model->title = 'Просмотр Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1928;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9123;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/system';
        $this->model->title = 'Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-envelope';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12647;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/create-process';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12652;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/view-process';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12660;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/create-process';
        $this->model->title = 'Создание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8131;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/orderDyna';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12655;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user-company/view-process';
        $this->model->title = 'Просмотр Организации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1620;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12634;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/update-process';
        $this->model->title = 'Редактирование Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12633;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/create-process';
        $this->model->title = 'Создание Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12645;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/update-process';
        $this->model->title = 'Редактирование Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12644;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cel/create-process';
        $this->model->title = 'Создание Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1644;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12668;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/index_2';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12638;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/update-process';
        $this->model->title = 'Редактирование Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12637;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/create-process';
        $this->model->title = 'Создание Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12639;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/view-process';
        $this->model->title = 'Просмотр Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12648;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/update-process';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12649;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/order/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1633;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10043;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11352;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/process';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12661;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/update-process';
        $this->model->title = 'Редактирование Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12662;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-return/view-process';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1977;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9117;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/create';
        $this->model->title = 'Создание Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print-slash';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12658;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11065;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/example';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12669;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/test';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12683;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12670;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-order/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1910;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12663;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/create-process';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12666;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/view-process';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12664;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/return';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12621;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12684;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/index2';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12631;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/update-process';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11357;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/processSukhrob';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12688;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/processLobar';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12636;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/create-process-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12687;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/indexA_1';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12624;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/update-process';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12676;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main4';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12677;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/mainOld';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12696;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/view-process';
        $this->model->title = 'Просмотр Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12681;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/update-process';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12682;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12671;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/create-process';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12673;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12745;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12678;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/mainX09';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12656;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/main/index6';
        $this->model->title = 'В ожидании комплектации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1664;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12680;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/process';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12632;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12718;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/update-process';
        $this->model->title = 'Редактирование Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12756;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/form';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12719;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/view-process';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12744;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/view-process';
        $this->model->title = 'Просмотр Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12716;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item/view-process';
        $this->model->title = 'Просмотр Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1837;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12705;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/full';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12730;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexQ';
        $this->model->title = 'indexQ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12703;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order/update-process';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1836;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12704;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1836;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12720;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/main2';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12714;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item/create-process';
        $this->model->title = 'Создание Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1837;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12750;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/loginPage';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12743;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/update-process';
        $this->model->title = 'Редактирование Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12742;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cel/create-process';
        $this->model->title = 'Создание Детализация звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2250;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12717;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/create-process';
        $this->model->title = 'Создание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12741;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/view-process';
        $this->model->title = 'Просмотр Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12715;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item/update-process';
        $this->model->title = 'Редактирование Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1837;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12713;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/view-process';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12755;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/forVveb';
        $this->model->title = 'forVveb';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12751;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/loginPageFozil';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12740;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/calls-cdr/update-process';
        $this->model->title = 'Редактирование Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cogs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2249;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12731;
        $this->model->sort = null;
        $this->model->name = '/core/crud/index_o';
        $this->model->title = 'index_o';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12753;
        $this->model->sort = null;
        $this->model->name = '/core/report/completed-report';
        $this->model->title = 'СКД Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2228;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12733;
        $this->model->sort = null;
        $this->model->name = '/core/crud/item';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12749;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/loginCRM';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12712;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12747;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/process2';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12752;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/registerCRM';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12734;
        $this->model->sort = null;
        $this->model->name = '/core/crud/itemMulti';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12693;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/view-process';
        $this->model->title = 'Просмотр Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12746;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/form';
        $this->model->title = 'form';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12748;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12675;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main3';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12635;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/view-process';
        $this->model->title = 'Просмотр Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-shopping-basket';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12771;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess1';
        $this->model->title = 'Страны 1';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10939;
        $this->model->sort = null;
        $this->model->name = '/core/word/clear-session';
        $this->model->title = 'clear-session';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2232;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12695;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/update-process';
        $this->model->title = 'Редактирование Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12692;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/update-process';
        $this->model->title = 'Редактирование Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12706;
        $this->model->sort = null;
        $this->model->name = '/core/elfind/view-bekzod';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2061;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12691;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/create-process';
        $this->model->title = 'Создание Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10407;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/review-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12698;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/create-process-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12699;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12700;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/update-process';
        $this->model->title = 'Редактирование Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12701;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/view-process';
        $this->model->title = 'Просмотр Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12821;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/indexSukhrob';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12806;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/update-process';
        $this->model->title = 'Редактирование Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12824;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/system';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12788;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/restore';
        $this->model->title = 'Восстановление пароля';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2570;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12801;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/create-process';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12823;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/shahzod';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12785;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/new_password';
        $this->model->title = 'new_password';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bell-plus';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2570;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12815;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/previous';
        $this->model->title = 'previous';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-address-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2567;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12790;
        $this->model->sort = null;
        $this->model->name = '/core/read/asukhrob';
        $this->model->title = 'Salam';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12804;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/autodial-process';
        $this->model->title = 'autodial-process';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12818;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/create-process';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12819;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/create';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12797;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report/report_view';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2571;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12825;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/update-process';
        $this->model->title = 'Редактирование Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12802;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/update-process';
        $this->model->title = 'Редактирование Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12803;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product/view-process';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1616;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12791;
        $this->model->sort = null;
        $this->model->name = '/core/read/index_U2';
        $this->model->title = 'index_U2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12795;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report/reports';
        $this->model->title = 'отчеты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2571;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12820;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/index';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12787;
        $this->model->sort = null;
        $this->model->name = '/core/restoreEmail/password_restore';
        $this->model->title = 'password_restore';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2570;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12796;
        $this->model->sort = null;
        $this->model->name = '/core/universal-report/report_item';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2571;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12779;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register_old';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12798;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/create-process';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12778;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/register_2';
        $this->model->title = 'Регистрация в интранет системе EYUF';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12816;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/stackItem';
        $this->model->title = 'stackItem';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2567;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12775;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_view1';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12817;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/choose';
        $this->model->title = 'Подобрать Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12807;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/view-process';
        $this->model->title = 'Просмотр Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12783;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/agent_stat/sdf';
        $this->model->title = 'Расчет прибыли';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1608;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12826;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/update';
        $this->model->title = 'Редактирование Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12800;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/view-process';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12781;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/main/index2';
        $this->model->title = 'Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2379;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12789;
        $this->model->sort = null;
        $this->model->name = '/core/read/asexport';
        $this->model->title = 'asexport';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12827;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/view-process';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12828;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/view';
        $this->model->title = 'Просмотр Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-plus-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12814;
        $this->model->sort = null;
        $this->model->name = '/core/errorNur/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-bar-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2567;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12782;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/user/index1';
        $this->model->title = 'Users';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2385;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12805;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-catalog/create-process';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2433;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12799;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/update-process';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10405;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/mobile/question-reply';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2133;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12780;
        $this->model->sort = null;
        $this->model->name = '/eyuf/cores/auth/verify_old';
        $this->model->title = 'verify_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2375;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8834;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/stats-callsX';
        $this->model->title = 'Статусы звонков';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12774;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_query1';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12776;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/DynaChessItemcreate';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12777;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/sortingBackup';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10926;
        $this->model->sort = null;
        $this->model->name = '/core/widget/ready/option';
        $this->model->title = 'Настройка Опций Виджетов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2230;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6096;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/orderItems';
        $this->model->title = 'Редактирование';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6098;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/process';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6139;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/create-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6152;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/update';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6019;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/choose';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8855;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/user/update';
        $this->model->title = 'Редактирование Пользователи';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1943;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8750;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/create';
        $this->model->title = 'Новое назначение заказа курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8593;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/indexZ';
        $this->model->title = 'Отслеживание товаров';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8599;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/tracking/update';
        $this->model->title = 'Редактирование Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1912;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12641;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/create-process';
        $this->model->title = 'Создание Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-birthday-cake';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9027;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/update';
        $this->model->title = 'Редактирование Заказы к доставке';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-wifi';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6308;
        $this->model->sort = null;
        $this->model->name = '/shop/cores/faqs/index';
        $this->model->title = 'Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-laptop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1670;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9136;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/other/cell/cell';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1647;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10417;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single_product_questions_answers';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8931;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-trans/process';
        $this->model->title = 'Перемещение товаров между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1957;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6040;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/example_relation';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6257;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/testcard';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crosshairs';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12672;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/shop-order/update-process';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1649;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8453;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order/update';
        $this->model->title = 'Редактирование Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-money-check-edit-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1836;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7805;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item/index';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1837;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 7810;
        $this->model->sort = null;
        $this->model->name = '/shop/deliver/shop-order-item/view';
        $this->model->title = 'Просмотр Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lastfm-square';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1837;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9407;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/system';
        $this->model->title = 'Отгрузка товаров со склада';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6206;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/indexXolmat';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6244;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/other/cdr/cdr';
        $this->model->title = 'Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1646;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6272;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/order';
        $this->model->title = 'Проверка покупки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8136;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/shipment';
        $this->model->title = 'РНазначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12772;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chess_chart';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12763;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6231;
        $this->model->sort = null;
        $this->model->name = '/shop/calls/calls-cdr/choose';
        $this->model->title = 'Подобрать Звонки колл центра';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-comment-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1643;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12616;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-exit/view-process';
        $this->model->title = 'Просмотр Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1624;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11024;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-enter/example';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1622;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8754;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/orders';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8746;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-question/update';
        $this->model->title = 'Редактирование Вопросы и ответы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-cubes';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1930;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10611;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/courier';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9023;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/navigation/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1909;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10418;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single_product_shahzod';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8603;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/calculate';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8157;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/delete';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11350;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-element/create-element-ajax';
        $this->model->title = 'Создание Элементы продукта';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-barcode-read';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1614;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12674;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/create-process';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10042;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/items';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9559;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/delete';
        $this->model->title = 'Возврат товаров от клиентов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9398;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/create';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10935;
        $this->model->sort = null;
        $this->model->name = '/core/word/act';
        $this->model->title = 'act';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cubes';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2232;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10768;
        $this->model->sort = null;
        $this->model->name = '/core/fop/fop';
        $this->model->title = 'Бренды';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-rocket rss';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2218;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6193;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/xolmat/create';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1636;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10426;
        $this->model->sort = null;
        $this->model->name = '/shop/user/session-viewed/main-m';
        $this->model->title = 'main-m';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2139;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11113;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-courier/update';
        $this->model->title = 'Редактирование Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2274;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11114;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/shop-courier/view';
        $this->model->title = 'Просмотр Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2274;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8706;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-catalog/check';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1925;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8725;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/index';
        $this->model->title = 'Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1926;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10798;
        $this->model->sort = null;
        $this->model->name = '/core/grapes/indexAziz';
        $this->model->title = 'Grapes';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-edit';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2220;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10849;
        $this->model->sort = null;
        $this->model->name = '/core/product/addToCart';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10877;
        $this->model->sort = null;
        $this->model->name = '/core/product/rangeClearCalls';
        $this->model->title = 'rangeClearCalls';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift-card';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10882;
        $this->model->sort = null;
        $this->model->name = '/core/product/setFilter';
        $this->model->title = 'Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-bar-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8133;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/process';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10278;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/common';
        $this->model->title = 'Описание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2123;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10357;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/backup/single-product-res';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2126;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8894;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-enter/create';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1954;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8836;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/stats/stats-market-count';
        $this->model->title = 'Статистика по времени работы операторов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1941;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 11540;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/export/index-download';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2327;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10963;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/place-country/update';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2238;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12022;
        $this->model->sort = null;
        $this->model->name = '/core/read/update';
        $this->model->title = 'Редактирование Адреса';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-location-arrow';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10219;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-catalog/main';
        $this->model->title = 'main';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2112;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10596;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/return-items';
        $this->model->title = 'Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-cube';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6102;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-accept/system';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1621;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6183;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/system';
        $this->model->title = 'Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-gift';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12619;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-trans/update-process';
        $this->model->title = 'Редактирование Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1628;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12629;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-delay/create-process';
        $this->model->title = 'Создание Доставка заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1613;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13434;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/create_2';
        $this->model->title = 'Создание Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8821;
        $this->model->sort = null;
        $this->model->name = '/shop/supervisor/main/process';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1939;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8749;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-shipment/create-ajax';
        $this->model->title = 'Создание Доставка заказов';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1931;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10613;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/update-region';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1911;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10414;
        $this->model->sort = null;
        $this->model->name = '/shop/user/product-single/others/single-productPriceJ';
        $this->model->title = 'Продукт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2134;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13435;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-accept/process2';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1913;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13436;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/createOtabek';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12686;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-order/index4';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1615;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13437;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/create_';
        $this->model->title = 'Создание';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12651;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/ware-return/update-process';
        $this->model->title = 'Редактирование Перемещение между складами';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1626;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13438;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/create-process';
        $this->model->title = 'Создание Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13439;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/index1';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13440;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/indexOld';
        $this->model->title = 'Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13441;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-product/view-elements';
        $this->model->title = 'Редактирование Продукты';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-desktop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1929;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12694;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/create-process';
        $this->model->title = 'Создание Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-download';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6016;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-catalog/update';
        $this->model->title = 'Редактирование Каталог магазина';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1612;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13442;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/all_approve';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13443;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main6';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13444;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/main_20.10.2020';
        $this->model->title = 'Панель Оператора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13445;
        $this->model->sort = null;
        $this->model->name = '/shop/agent/manual/periodFilter2';
        $this->model->title = 'periodFilter2';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-camcorder';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1632;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13446;
        $this->model->sort = null;
        $this->model->name = '/shop/complect/shop-order/process3';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2083;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9556;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/choose';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9570;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/ware-return/update';
        $this->model->title = 'Редактирование возврата от клиента';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1975;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13447;
        $this->model->sort = null;
        $this->model->name = '/core/crud/create_2';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13448;
        $this->model->sort = null;
        $this->model->name = '/core/crud/create_jam';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13449;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor-auto';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13450;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor';
        $this->model->title = 'Модификации';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13451;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor_';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13452;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor_old';
        $this->model->title = 'Изменение данных';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13453;
        $this->model->sort = null;
        $this->model->name = '/core/crud/editor_щдч';
        $this->model->title = 'Изменение данных';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13454;
        $this->model->sort = null;
        $this->model->name = '/core/crud/import';
        $this->model->title = 'Новое поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13455;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexAbl';
        $this->model->title = 'indexAbl';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13456;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexC';
        $this->model->title = 'indexC';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13457;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexX';
        $this->model->title = 'indexX';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13458;
        $this->model->sort = null;
        $this->model->name = '/core/crud/indexzoir';
        $this->model->title = 'indexzoir';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9893;
        $this->model->sort = null;
        $this->model->name = '/core/crud/tabular';
        $this->model->title = 'Изменить все - Потребности';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2057;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12711;
        $this->model->sort = null;
        $this->model->name = '/shop/warehouse/ware-exit/create-process-item';
        $this->model->title = 'Создание Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1956;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10168;
        $this->model->sort = null;
        $this->model->name = '/shop/user/item-review/review-product-new';
        $this->model->title = 'History';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2104;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13459;
        $this->model->sort = null;
        $this->model->name = '/shop/user/main-common/redirect';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2113;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 6271;
        $this->model->sort = null;
        $this->model->name = '/shop/client/checkout/main';
        $this->model->title = 'Проверка покупки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1654;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13460;
        $this->model->sort = null;
        $this->model->name = '/core/user/user-auth/test';
        $this->model->title = 'Вход';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2143;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10980;
        $this->model->sort = null;
        $this->model->name = '/shop/logistics/shop-shipment/api/shipment';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2247;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13461;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/formBuild';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10692;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/index';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13462;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/item';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13463;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/itemMulti';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13464;
        $this->model->sort = null;
        $this->model->name = '/core/dyna/relate';
        $this->model->title = 'Просмотр testd';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-paper-plane';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2058;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13465;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editableabl';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2211;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13466;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editableabltwo';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2211;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13467;
        $this->model->sort = null;
        $this->model->name = '/core/edit/editableOff';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2211;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10824;
        $this->model->sort = null;
        $this->model->name = '/core/menu/editor';
        $this->model->title = 'Главная страница';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2223;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10868;
        $this->model->sort = null;
        $this->model->name = '/core/product/getCompany_s_sh';
        $this->model->title = 'Создание Веб-действия';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-pie-chart';
        $this->model->type = 'ajax';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2225;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13468;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/main/jamshid_AdminMain/index';
        $this->model->title = 'Панель администратора';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-globe';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1610;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 8130;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/index';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1617;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13469;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/chessD';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13470;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/details';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13471;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/detailsWareAccept';
        $this->model->title = 'Страны';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-landmark';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13472;
        $this->model->sort = null;
        $this->model->name = '/core/dynagrid/processWareAccept';
        $this->model->title = 'Приёмка от курьера';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2059;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13473;
        $this->model->sort = null;
        $this->model->name = '/core/error/exception_old';
        $this->model->title = 'exception_old';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-pie-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2212;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10683;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/daily-report/index';
        $this->model->title = 'Ежедневный отчёт';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-calendar-times-o';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2165;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 9392;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop-order/shop-order/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 1927;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13474;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop_option_type/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2739;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12792;
        $this->model->sort = null;
        $this->model->name = '/core/read/items';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13475;
        $this->model->sort = null;
        $this->model->name = '/core/read/multiRelateItems';
        $this->model->title = 'Подобрать товары для переноса даты доставки';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2427;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 12822;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-product_old/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2572;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 10970;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/shop-shipment/api/shipment';
        $this->model->title = 'Назначение заказов курьеру';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2241;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13476;
        $this->model->sort = null;
        $this->model->name = '/core/tranz/flush';
        $this->model->title = 'flush';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-map-marker-alt';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2733;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13477;
        $this->model->sort = null;
        $this->model->name = '/core/tranz/save';
        $this->model->title = 'save';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-plus-circle';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2733;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13478;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop_option_branch/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2738;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13479;
        $this->model->sort = null;
        $this->model->name = '/core/chat/index';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2730;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13480;
        $this->model->sort = null;
        $this->model->name = '/core/chat/index2';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2730;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13481;
        $this->model->sort = null;
        $this->model->name = '/core/chat/indexA';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2730;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13482;
        $this->model->sort = null;
        $this->model->name = '/core/chat/indexAbl';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2730;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13483;
        $this->model->sort = null;
        $this->model->name = '/core/chat/index_J';
        $this->model->title = 'Чат';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-print';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2730;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13484;
        $this->model->sort = null;
        $this->model->name = '/core/chat/test';
        $this->model->title = 'test';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-balance-scale';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2730;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13485;
        $this->model->sort = null;
        $this->model->name = '/core/error/templates/exception';
        $this->model->title = 'exception';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-crop';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2731;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13486;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/choose';
        $this->model->title = 'Подобрать Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13487;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/create-process';
        $this->model->title = 'Создание прихода в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13488;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/create';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13489;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/indexToshkent';
        $this->model->title = 'Заказы Узбекистан';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13490;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/items';
        $this->model->title = 'Элементы заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13491;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/process';
        $this->model->title = 'Редактирование Поступление товаров в склад';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-film';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13492;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/update';
        $this->model->title = 'Редактирование заказа';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13493;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/view-process';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-power-off';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13494;
        $this->model->sort = null;
        $this->model->name = '/core/help/order-toshkent/view';
        $this->model->title = 'Просмотр Заказы';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-lock';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2732;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13495;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/user-profile/profile-settings';
        $this->model->title = 'Новый заказ';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fas fa-line-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2736;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13496;
        $this->model->sort = null;
        $this->model->name = '/shop/admin/user/user-profile/profile-settings_Old';
        $this->model->title = 'Создание Пользователь';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fa fa-area-chart';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2736;
        $this->save();


        $this->model = new PageView();

        $this->model->id = 13497;
        $this->model->sort = null;
        $this->model->name = '/shop/seller/shop_option/index';
        $this->model->title = 'index';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->icon = 'fal fa-graduation-cap';
        $this->model->type = 'html';
        $this->model->check = 1;
        $this->model->page_view_type_id = 2737;
        $this->save();


    }

}
