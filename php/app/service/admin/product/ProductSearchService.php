<?php
//**---------------------------------------------------------------------+
//** 服务层文件 -- 商品
//**---------------------------------------------------------------------+
//** 版权所有：江西佰商科技有限公司. 官网：https://www.tigshop.com
//**---------------------------------------------------------------------+
//** 作者：Tigshop团队，yq@tigshop.com
//**---------------------------------------------------------------------+
//** 提示：Tigshop商城系统为非免费商用系统，未经授权，严禁使用、修改、发布
//**---------------------------------------------------------------------+

namespace app\service\admin\product;

use app\service\admin\merchant\ShopProductCategoryService;
use app\service\common\BaseService;
use utils\Util;

/**
 * 商品服务类
 */
class ProductSearchService extends BaseService
{
    protected $brandIds = [];
    protected $categoryId = 0;
    protected $keyword = '';
    protected $page = 1;
    protected $size = 25;
    protected $introType = '';
    protected $minPrice = 0;
    protected $maxPrice = 0;
    protected $sortOrder = '';
    protected $sortField = '';
    protected $filterParams;
    protected $pageType;
    protected $couponId;

    protected $shopId;

    protected $shopCategoryId;

    protected int $productStatus = 1;

    protected int $isDelete = 0;

    public function __construct($params, $pageType = 'search')
    {
        if (isset($params['page'])) {
            $this->page = $params['page'] > 0 ? intval($params['page']) : 1;
        }
        if (isset($params['size'])) {
            $this->size = $params['size'] > 0 ? intval($params['size']) : 25;
        }
        if (isset($params['cat'])) {
            $this->categoryId = $params['cat'] > 0 ? intval($params['cat']) : 0;
        }
        if (isset($params['brand'])) {
            $this->brandIds = !empty($params['brand']) ? array_map('intval', explode(',', $params['brand'])) : [];
        }
        if (isset($params['keyword'])) {
            $this->keyword = !empty($params['keyword']) ? trim($params['keyword']) : '';
        }
        if (isset($params['sort']) && in_array($params['sort'], ['time', 'sale', 'price'])) {
            $this->sortField = !empty($params['sort']) ? trim($params['sort']) : '';
        }
        if (isset($params['order']) && in_array($params['order'], ['desc', 'asc'])) {
            $this->sortOrder = !empty($params['order']) ? trim($params['order']) : '';
        }
        if (isset($params['max'])) {
            $this->maxPrice = $params['max'] > 0 ? intval($params['max']) : 0;
        }
        if (isset($params['min'])) {
            $this->minPrice = $params['min'] > 0 ? intval($params['min']) : 0;
        }
        if (isset($params["intro"])) {
            $this->introType = !empty($params['intro']) ? trim($params['intro']) : '';
        }
        if (!empty($params['coupon_id'])) {
            $this->couponId = $params['coupon_id'];
        }

        if (isset($params['shop_id'])) {
            $this->shopId = $params['shop_id'];
        }
        if (isset($params['shop_category_id']) && $params['shop_category_id'] > 0) {
            $this->shopCategoryId = $params['shop_category_id'];
        }
        if (isset($params['product_status'])){
            $this->productStatus = $params['product_status'];
        }

        $this->pageType = $pageType;
        $this->filterParams = [
            'brand_ids' => $this->brandIds,
            'category_id' => $this->categoryId,
            'keyword' => $this->keyword,
            'max_price' => $this->maxPrice,
            'min_price' => $this->minPrice,
            'intro_type' => $this->introType,
            'is_delete' => 0,
            'coupon_id' => $this->couponId,
            'shop_category_id' => $this->shopCategoryId,
            'shop_id' => $this->shopId,
            'product_status' => $this->productStatus,
        ];
    }

    public function getProductList(): array
    {
        $params = array_merge($this->filterParams, [
            'page' => $this->page,
            'size' => $this->size <= 50 ? $this->size : 25,
        ]);
        $params['sort_order'] = '';
        if ($this->sortField == '') {
            $params['sort_field'] = '';
        } elseif ($this->sortField == 'sale') {
            $params['sort_field'] = 'virtual_sales';
            $params['sort_order'] = 'desc';
        } elseif ($this->sortField == 'time') {
            $params['sort_field'] = 'product_id';
            $params['sort_order'] = 'desc';
        } elseif ($this->sortField == 'price') {
            $params['sort_field'] = 'product_price';
            $params['sort_order'] = $this->sortOrder;
        }
        $product_list = app(ProductService::class)->getProductList($params);
        foreach ($product_list as &$item) {
            $productDetailService = new ProductDetailService($item['product_id']);
            $productAvailability = $productDetailService->getProductSkuDetail($item['product_sku']['0']['sku_id'] ?? 0,
                0,
                '');
            $item['price'] = $productAvailability['price'];
            $item['is_seckill'] = $productAvailability['is_seckill'];
            $item['seckill_end_time'] = $productAvailability['seckill_end_time'];
            $item['seckill_stock'] = $productAvailability['stock'];
        }
        return $product_list;
    }
    public function getProductCount(): int
    {
        $count = app(ProductService::class)->getFilterCount($this->filterParams);
        return $count;
    }
    // 筛选列表
    public function getFilterLists(): array
    {
        $filter = [
            'category' => [],
            'brand' => [],
            'shop_category' => [],
            'max_price' => 0,
        ];
        if ($this->categoryId > 0) {
            $filter['category'] = app(CategoryService::class)->getChildCategoryList($this->categoryId);
        } else {
            if ($this->introType) {
                // 按类型
                $filter['category'] = app(ProductService::class)->getProductCategorys($this->filterParams);
            } else {
                if ($this->keyword) {
                    $filter['category'] = app(ProductService::class)->getProductCategorys($this->filterParams);
                } else {
                    $filter['category'] = app(CategoryService::class)->getChildCategoryList(0);
                }
            }
        }
        if ($this->shopId > 0) {
            if ($this->shopCategoryId > 0) {
                $filter['shop_category'] = app(ShopProductCategoryService::class)->getChildCategoryList($this->shopCategoryId,
                    $this->shopId);
            } else {
                $filter['shop_category'] = app(ShopProductCategoryService::class)->getChildCategoryList(0,
                    $this->shopId);
            }
        }
        $params = $this->filterParams;
        unset($params['brand_ids']);
        $filter['brand'] = app(ProductService::class)->getProductBrands($params);
        $filter['max_price'] = app(ProductService::class)->getProductMaxPrice($params);
        return $filter;
    }
    public function getFilterSeleted(): array
    {
        $seleted = [
            'category' => '',
            'brand' => '',
            'keyword' => '',
            'intro' => '',
            'shop_category' => ''
        ];
        if ($this->categoryId > 0) {
            $seleted['category'] = Util::lang(app(CategoryService::class)->getName($this->categoryId), '', [], 3);
        }
        if ($this->brandIds) {
            $brand_names = app(BrandService::class)->getNames($this->brandIds);
            $seleted['brand'] = implode(',', $brand_names);
        }
        if ($this->keyword) {
            $seleted['keyword'] = $this->keyword;
        }
        if ($this->introType) {
            $seleted['intro'] = $this->introType;
        }
        if ($this->shopCategoryId) {
            $seleted['shop_category'] = app(ShopProductCategoryService::class)->getName($this->shopCategoryId);
        }

        return $seleted;
    }
}
