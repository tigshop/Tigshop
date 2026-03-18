<?php
//**---------------------------------------------------------------------+
//**   设置项模型
//**---------------------------------------------------------------------+
//**   版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//**   作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//**   提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\model\setting;

use think\Model;

class Config extends Model
{
    protected $pk = 'id';
    protected $table = 'config';
    protected $json = ['data'];
    // 设置JSON数据返回数组
    protected $jsonAssoc = true;

    //商户后台登陆后需返回默认配置项
    const SHOP_LAYOUT = 'topMenu';
    const SHOP_NAVTHEME = 'dark';

    // 定义全局的查询范围
    protected $globalScope = ['del'];

    public function scopeDel($query)
    {
        $query->where('is_del',0);
    }
}
