<?php
/**
 * Desc  功能说明
 * User: maogou
 * Date: 2017/7/9
 * Time: 下午9:40
 */
namespace Home\Model;

use Think\Model\RelationModel;

class UsersModel extends RelationModel {

    protected $_link = array(
        'Comment'=>array(
            'mapping_type'=>self::HAS_MANY,
            'foreign_key'=>'uid',
        ),

        'Card'=>array(
            'mapping_type' => self::HAS_ONE,
            'foreign_key'=>'uid',
        ),

        'Role'=>array(
            'mapping_type'=>self::MANY_TO_MANY,
            //两个表的 中间关系表
            'relation_table'=>'relations',
            //关联的外键名称 外键的默认规则是当前数据对象名称_id
            'foreign_key'=>'uid',
            //关联表的外键名称 默认的关联表的外键名称是表名_id
            'relation_foreign_key'=>'gid'
        )
    );
}