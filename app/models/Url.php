<?php

namespace app\models;

class Url extends \lithium\data\Model {
    protected $_schema = array(
        '_id' => array ('type' => 'id'),
        'url' => array('type' => 'string'),
        'slug' => array('type' => 'string')
    );

    protected $_meta = array(
        'key' => '_id'
    );

    public $validates = array(
        'url' => array(
            array('notEmpty', 'message' => 'Your non-existent URL is pretty short already.')
    ));

    public function save($entity, $data = null, array $options = array()) {
        // Url needs a protocol - if we haven't included one, prepend http://
        if(!preg_match('/^http(?:s)?\:\/\//', $data['url'])) {
            $data['url'] = 'http://' . $data['url'];
        }
        $data['slug'] = base_convert(static::count(), 10, 36);
        return parent::save($entity, $data, $options); 
    }
}
?>
