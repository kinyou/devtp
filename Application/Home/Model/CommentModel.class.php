<?php
/**
 * Desc  功能说明
 * User: maogou
 * Date: 2017/7/9
 * Time: 下午10:36
 */

namespace Home\Model;

use Think\Model\RelationModel;

class CommentModel extends RelationModel {

    protected $_link = array(
        'Users'=>array(
            'mapping_type'=>self::BELONGS_TO,
            'foreign_key' => 'uid'
        )
    );
}