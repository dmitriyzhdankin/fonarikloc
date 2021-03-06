<?php

class shopCustomPlugin extends shopPlugin {
    
    protected static $plugin;
    protected static $added_js = false;
    
    public function __construct($system = null) {
        parent::__construct($system);
        if(!self::$added_js) {
            self::$added_js = true;
            waSystem::getInstance()->getResponse()->addJs('wa-apps/shop/plugins/custom/js/custom_backend.js');
            waSystem::getInstance()->getResponse()->addCss('wa-apps/shop/plugins/custom/css/custom_backend.css');
        }
    }
    protected static function getThisPlugin() {
        if (self::$plugin) {
            return self::$plugin;
        } else {
            return wa()->getPlugin('custom');
        }
    }
    
    public function addBackendSettingsScript() {
//        return array(
//            'sidebar_bottom_li' => '<script type="text/javascript" src="/wa-apps/shop/plugins/custom/js/custom_backend.js">'
//        );
    }
    
    public function addCategoriesForProduct() {
        //waSystem::getInstance()->getResponse()->addJs('wa-apps/shop/plugins/custom/js/custom_backend.js');
        $action = new shopCustomPluginBackendProductCategoriesAction();
        return array('edit_basics' => $action->display(false));
    }
    
    public function addCopyProductsButton() {
//        waSystem::getInstance()->getResponse()->addJs('wa-apps/shop/plugins/custom/js/custom_backend.js');
        
//        $action = new shopCustomPluginBackendProductCategoriesAction();
        return array('toolbar_section' => '<div class="block"><div class="copy-products" data-action="copy"><a href="#"><i class="icon16 folders"></i>Copy products</a></div></div>');
    }

    public static function getSameProducts() {
        self::getProductsFromOtherCategory();
        $plugin = self::getThisPlugin();
        $product_model = new shopProductModel();
        $product = $product_model->getByField('url', waRequest::param('product_url'));
        if ( $product && $product['category_id']) {
            $collection = new shopProductsCollection('category/'.$product['category_id']);
            $collection->addWhere('((p.count <> 0 OR p.count is null) AND p.price <> 0 )')->orderBy('rand()');
            $same_products = $collection->getProducts('*',15);
            if( $same_products ) {
                return $same_products;
            }
        }
        return false;
    }
    
    public static function getProductsFromOtherCategory() {
        $plugin = self::getThisPlugin();
        $product_model = new shopProductModel();
        $product = $product_model->getByField('url', waRequest::param('product_url'));
        if ( $product && $product['category_id']) {
            $category_model = new shopCategoryModel();
            $cat = $category_model->getById($product['category_id']);
            while( $cat['parent_id'] > 0 ) {
                $cat = $category_model->getById($cat['parent_id']);
            }
            switch( $cat['id'] ) {
                case 47 : {$need_cat_id = 11; break; }//tochilki => nogi
                case 11 : {$need_cat_id = 47; break; }//nogi => tochilki
                case 1 : {$need_cat_id = 21; break; }//fonari => acsessuar k fonar
                case 21 : {$need_cat_id = 1; break; }//acsessuar k fonar => fonari
                case 14 : {$need_cat_id = 25; break; }//multitul => instrument
                case 25 : {$need_cat_id = 14; break; }//instrument => multitul
                case 34 : {$need_cat_id = 33; break; }//odegda => acsessuar
                case 33 : {$need_cat_id = 34; break; }//acsessuar => odegda
            }
            $collection = new shopProductsCollection('category/'.$need_cat_id);
            $collection->addWhere('((p.count <> 0 OR p.count is null) AND p.price <> 0 )')->orderBy('rand()');
            $same_products = $collection->getProducts('*',10000);
            if( $same_products ) {
                return $same_products;
            }
        }
        return false;
    }
    
    public static function getProductCategory() {
        $plugin = self::getThisPlugin();
        $product_model = new shopProductModel();
        $product = $product_model->getByField('url', waRequest::param('product_url'));
        if ( $product && $product['category_id']) {
            $category_model = new shopCategoryModel();
            $category = $category_model->getById($product['category_id']);
            return $category['name'];
        }
        return false;
    }
    
    public static function getReviewsCount($product_id) {
        $plugin = self::getThisPlugin();
        $reviews_model = new shopProductReviewsModel();
        return $reviews_model->count($product_id, false);
    }
}