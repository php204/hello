<?php
namespace admin\Model;
use Think\Model;
class LinkModel extends Model {
    protected $_validate = array(
        array('title','require','链接名称不能为空',1,'regex',3),
       // array('title','','链接名称已经存在！',1,'unique',3), 

        array('url','require','链接地址不能为空',1,'regex',3),
       // array('url','','链接地址已经存在！',1,'unique',3), 

        //array('editorValue','require','链接描述不能为空',1,'regex',3),
       // array('editorValue','','链接描述已经存在！',1,'unique',3), 
    );     
}