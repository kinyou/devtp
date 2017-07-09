<?php
/**
 * Desc  功能说明
 * User: maogou
 * Date: 2017/7/9
 * Time: 下午10:28
 */
namespace Home\Model;

use Think\Model\RelationModel;

class CardModel extends RelationModel {
    protected $_link =array(
        'Users'=>array(
            'mapping_type' => self::BELONGS_TO,
            'foreign_key' => 'id',
        ),
    );
}