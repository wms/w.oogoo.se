<?php

namespace app\controllers;
use app\models\Url;

class UrlController extends \lithium\action\Controller {

    public function create() {
        $url = Url::create();
        if($this->request->data) {
            $url->save($this->request->data);
        }
        return compact('url');
    }
}

?>
