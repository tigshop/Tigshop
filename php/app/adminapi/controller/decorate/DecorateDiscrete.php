<?php
//**---------------------------------------------------------------------+
//** 后台控制器文件 -- 装修模块
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\adminapi\controller\decorate;

use app\adminapi\AdminBaseController;
use app\service\admin\decorate\DecorateDiscreteService;
use think\App;
use think\Response;

/**
 * 装修模块控制器
 */
class DecorateDiscrete extends AdminBaseController
{
    protected DecorateDiscreteService $decorateDiscreteService;

    /**
     * 构造函数
     *
     * @param App $app
     * @param DecorateDiscreteService $decorateDiscreteService
     */
    public function __construct(App $app, DecorateDiscreteService $decorateDiscreteService)
    {
        parent::__construct($app);
        $this->decorateDiscreteService = $decorateDiscreteService;
        $this->checkAuthor('decorateDiscreteManage'); //权限检查
    }

    /**
     * 详情
     * @return Response
     */
    public function detail(): Response
    {
        $decorate_sn = $this->request->all('decorate_sn', '');
        $item = $this->decorateDiscreteService->getDetail($decorate_sn, request()->shopId);
        return $this->success(
             $item
        );
    }

    /**
     * 执行更新操作
     *
     * @return Response
     */
    public function update(): Response
    {
        $decorate_sn = $this->request->all('decorate_sn', '');
        $data = $this->request->only([
            'decorate_sn' => $decorate_sn,
            'data' => [],
        ], 'post');
        $result = $this->decorateDiscreteService->updateDecorateDiscrete($decorate_sn, $data, request()->shopId);
        if ($result) {
            return $this->success();
        } else {
            return $this->error(/** LANG */'装修模块更新失败');
        }
    }


    /**
     * 个人中心基础数据
     * @return Response
     */
    public function memberDecorateData(): Response
    {
        $menus = [
            [
                'type' => 'default',
                'pic_title' => '账号管理',
                'pic_thumb' => 'https://oss.tigshop.com/static/user/zhanghaoguanli.png',
                'pic_url' => 'https://oss.tigshop.com/static/user/zhanghaoguanli.png',
                'pic_link' => [
                    'path' => 'default',
                    'label' => '账号管理',
                    'name' => '账号管理',
                    'link' => '/pages/user/profile/index'
                ]
            ],
            [
                'type' => 'default',
                'pic_title' => '收货地址',
                'pic_thumb' => 'https://oss.tigshop.com/static/user/shouhuodizhi.png',
                'pic_url' => 'https://oss.tigshop.com/static/user/shouhuodizhi.png',
                'pic_link' => [
                    'path' => 'default',
                    'label' => '收货地址',
                    'name' => '收货地址',
                    'link' => '/pages/address/list'
                ]
            ],

            [
                'type' => 'default',
                'pic_title' => '发票管理',
                'pic_thumb' => 'https://oss.tigshop.com/static/user/fapiao.png',
                'pic_url' => 'https://oss.tigshop.com/static/user/fapiao.png',
                'pic_link' => [
                    'path' => 'default',
                    'label' => '发票管理',
                    'name' => '发票管理',
                    'link' => '/pages/user/invoiceManagement/index'
                ]
            ],
            [
                'type' => 'default',
                'pic_title' => '站内消息',
                'pic_thumb' => 'https://oss.tigshop.com/static/user/xiaoxi.png',
                'pic_url' => 'https://oss.tigshop.com/static/user/xiaoxi.png',
                'pic_link' => [
                    'path' => 'default',
                    'label' => '站内消息',
                    'name' => '站内消息',
                    'link' => '/pages/user/messageLog/index'
                ]
            ],
            [
                'type' => 'default',
                'pic_title' => '帮助中心',
                'pic_thumb' => 'https://oss.tigshop.com/static/user/issue.png',
                'pic_url' => 'https://oss.tigshop.com/static/user/issue.png',
                'pic_link' => [
                    'path' => 'default',
                    'label' => '帮助中心',
                    'name' => '帮助中心',
                    'link' => '/pages/article/issue/list'
                ]
            ],
            [
                'type' => 'default',
                'pic_title' => '资讯中心',
                'pic_thumb' => 'https://oss.tigshop.com/static/user/news.png',
                'pic_url' => 'https://oss.tigshop.com/static/user/news.png',
                'pic_link' => [
                    'path' => 'default',
                    'label' => '资讯中心',
                    'name' => '资讯中心',
                    'link' => '/pages/article/news/list?id=bzgg'
                ]
            ]

        ];
        return $this->success(
            [
            'menus' => $menus
            ]
        );
    }


}
