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
}