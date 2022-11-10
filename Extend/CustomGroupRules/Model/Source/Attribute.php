<?php
/**
 * Created By : Extend 2022
 */

namespace Extend\CustomGroupRules\Model\Source;

use Magento\Framework\App\Helper\AbstractHelper;

class Attribute implements \Magento\Framework\Option\ArrayInterface


{
    /**
     *
     * @var \Magento\Customer\Model\ResourceModel\Group\Collection
     */
    protected $_customerGroupColl;
    protected $_options;


    /**
     * @param \Magento\Backend\Block\Template\Context $context
     * @param \Magento\Customer\Model\ResourceModel\Group\Collection $customerGroupColl
     *
     */

    public function __construct(
        \Magento\Customer\Model\ResourceModel\Group\Collection $customerGroupColl
    )
    {
        $this->_customerGroupColl = $customerGroupColl;

    }

    /**
     *
     * @return array
     */
    public function getCustomerGroups()
    {
        $customerGroups = $this->_customerGroupColl->toOptionArray();
        return $customerGroups;
    }


    public function toOptionArray()
    {
        if (!$this->_options) {
            $this->_options = $this->_customerGroupColl->toOptionArray();
        }
        return $this->_options;
    }


}
