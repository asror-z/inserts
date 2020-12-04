<?php

namespace zetsoft\inserts\eyuf;

use zetsoft\system\actives\ZInsert;
use zetsoft\system\Az;
use zetsoft\system\kernels\ZMigration;
use zetsoft\models\core\CoreQueue;

class CoreQueueInsert extends ZInsert
{

    public function run()
    {

        $this->model = new CoreQueue();

        $this->model->id = 27;
        $this->model->sort = null;
        $this->model->name = '>reactphp>childprocess>ping mail.ru -t';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'reactphp';
        $this->model->service = 'childprocess';
        $this->model->method = 'runcommand';
        $this->model->args = 'ping mail.ru -t';
        $this->model->cmd = '
        $this->model->status = 'queue';
        $this->model->session = '46373dfd849ab32c1f5b9feab04f516034e3ac01dcdc5f756544220c5a715d6c';
        $this->model->pid = 29316;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 24;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 25;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 26;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 28;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 29;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 22;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 23;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 30;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = '';
        $this->model->status = 'queue';
        $this->model->session = '';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 44;
        $this->model->sort = null;
        $this->model->name = '>reactphp>childProcess>ping mail.ru -t';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'reactphp';
        $this->model->service = 'childProcess';
        $this->model->method = 'runCommand';
        $this->model->args = 'ping mail.ru -t';
        $this->model->cmd = 'OUT > ,T:\\PHP\\Projects\\zetsoft>call d:\\Develop\\Projects\\ALL\\server\\php7\\nssm-ALL.cmd ,OUT > ,Message: ,###		STARTING		=>	 | actionRun,Host: 10.10.3.207 | PC: 10.10.3.207 | User: 127.0.0.1 | asrorz | WORKPC,CMD | INFO | 30-07-2020 04:48:36 | 18.64MB/22MB | 14852,ERR > Exception \'yii\\base\\UnknownPropertyException\' with message \'Getting unknown property: zetsoft\\system\\module\\ZCmdApp::reactphp\',in T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Component.php:154,Stack trace:,#0 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\di\\ServiceLocator.php(77): yii\\base\\Component->__get(),#1 T:\\PHP\\Projects\\zetsoft\\service\\utility\\Execs.php(276): yii\\di\\ServiceLocator->__get(),#2 T:\\PHP\\Projects\\zetsoft\\service\\utility\\Execs.php(250): zetsoft\\service\\utility\\Execs->service(),#3 T:\\PHP\\Projects\\zetsoft\\cncmd\\ALL\\cores\\QueueController.php(77): zetsoft\\service\\utility\\Execs->serviceRun(),#4 [internal function]: zetsoft\\cncmd\\ALL\\cores\\QueueController->actionRun(),#5 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\InlineAction.php(57): call_user_func_array(),#6 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Controller.php(157): yii\\base\\InlineAction->runWithParams(),#7 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\console\\Controller.php(164): yii\\base\\Controller->runAction(),#8 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Module.php(528): yii\\console\\Controller->runAction(),#9 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\console\\Application.php(180): yii\\base\\Module->runAction(),#10 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\console\\Application.php(147): yii\\console\\Application->runAction(),#11 T:\\PHP\\Projects\\zetsoft\\vendor\\yiisoft\\yii2\\base\\Application.php(386): yii\\console\\Application->handleRequest(),#12 T:\\PHP\\Projects\\zetsoft\\configs\\ALL.php(135): yii\\base\\Application->run(),#13 T:\\PHP\\Projects\\zetsoft\\excmd\\ALL\\asrorz.php(13): require(\'T:\\\\PHP\\\\Projects...\'),#14 {main},';
        $this->model->status = 'finished';
        $this->model->session = '';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 35;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 14240;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 32;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 26776;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 34;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 17740;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 31;
        $this->model->sort = null;
        $this->model->name = '>calls>marceAMI>124';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call222';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
        $this->model->status = 'finished';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = null;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 33;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = 'calls';
        $this->model->service = 'marceAMI';
        $this->model->method = 'call';
        $this->model->args = '124';
        $this->model->cmd = 'OUT > 
        $this->model->status = 'process';
        $this->model->session = 'ea439086d5558e691104139d1433ebdf83b5bbeb800100d7ae32539bea4d8645';
        $this->model->pid = 1256;
        $this->save();


        $this->model = new CoreQueue();

        $this->model->id = 45;
        $this->model->sort = null;
        $this->model->name = '';
        $this->model->title = '';
        $this->model->tranz = null;
        $this->model->accept = null;
        $this->model->active = 1;
        $this->model->app = null;
        $this->model->namespace = '';
        $this->model->service = '';
        $this->model->method = '';
        $this->model->args = '';
        $this->model->cmd = '';
        $this->model->status = '';
        $this->model->session = '';
        $this->model->pid = null;
        $this->save();


    }

}