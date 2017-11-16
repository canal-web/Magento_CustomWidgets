<?php
class Canalweb_CustomWidgets_Block_Productskulink
    extends Mage_Core_Block_Template
    implements Mage_Widget_Block_Interface
{
    protected function _toHtml()
    {
        $sku = $this->getSku();
        $product = Mage::getModel('catalog/product')->loadByAttribute('sku', $sku);
        if (!$product) return;

        $url = $product->getProductUrl();
        $title = $this->getLabel() ? $this->getLabel() : $product->getName();

        $html = '<a class="widget-product-link" href="' . $url . '">' . $title . '</a>';

        return $html;
    }
};