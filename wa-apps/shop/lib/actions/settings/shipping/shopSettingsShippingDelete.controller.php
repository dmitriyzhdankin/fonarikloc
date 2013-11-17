<?php
class shopSettingsShippingDeleteController extends waJsonController
{
    public function execute()
    {
        if ($plugin_id = waRequest::post('plugin_id')) {
            $model = new shopPluginModel();
            if ($plugin = $model->getByField(array('id' => $plugin_id, 'type' => 'shipping'))) {
                $model->deleteById($plugin['id']);
            } else {
                throw new waException("Shipping plugin {$plugin_id} not found", 404);
            }

        }
    }
}
