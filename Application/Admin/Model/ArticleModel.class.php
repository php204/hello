<?php
namespace admin\Model;
use Think\Model;
class ArticleModel extends Model {
    protected $_validate = array(
        array('title','require','文章名称不能为空',1,'regex',3),
        array('desc','require','文章描述不能为空',1,'regex',3),
    );     
}