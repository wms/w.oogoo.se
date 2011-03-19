<?php

namespace app\controllers;

use app\models\Url;

class StatsController extends \lithium\action\Controller {
    public function index() {
        $urls = Url::all(array(
            'order' => array('hits' => 'desc')
        ));
        return compact('urls');
    }
}
