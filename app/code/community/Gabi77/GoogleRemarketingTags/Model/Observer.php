<?php
/**
* @category Gabi77
* @package Gabi77_GoogleRemarketingTags
* @copyright Copyright (c) 2015 Gabi77 (http://www.gabi77.com)
* @author Gabriel Janez <contact@gabi77.com>
* @license http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
*/

class Gabi77_GoogleRemarketingTags_Model_Observer
{
	public function controllerActionLayoutGenerateXmlBefore(Varien_Event_Observer $observer)
	{
		$layout = $observer->getEvent()->getLayout();
		$block = '' .
		'<reference name="before_body_end">
			<block type="googleremarketingtags/GoogleRemarketingTag" name="googleremarketingtags_block"></block>
		</reference>';

		$layout->getUpdate()->addUpdate($block);
		return $this;
	}
}