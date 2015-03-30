<?php
/**
* @category Gabi77
* @package Gabi77_GoogleRemarketingTags
* @copyright Copyright (c) 2015 Gabi77 (http://www.gabi77.com)
* @author Gabriel Janez <contact@gabi77.com>
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*/

class Gabi77_GoogleRemarketingTags_Model_Source_Product
{
public function toOptionArray() {
return array(
array('value' => 'ID', 'label' => Mage::helper('googleremarketingtags')->__('Product ID')),
array('value' => 'SKU', 'label' => Mage::helper('googleremarketingtags')->__('Sku')),
);
}
}