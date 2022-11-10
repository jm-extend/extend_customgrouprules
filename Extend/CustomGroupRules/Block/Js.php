<?php
namespace Extend\CustomGroupRules\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Extend\CustomGroupRules\Helper\Api\Data as DataHelper;



class Js extends \Magento\Framework\View\Element\Template
{
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ScopeConfigInterface $scopeConfig,
        DataHelper                                        $dataHelper,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Customer\Model\SessionFactory            $customerSession
 )
    {
        parent::__construct($context);
        $this->_scopeConfig = $scopeConfig;
        $this->dataHelper = $dataHelper;
        $this->_customerRepository = $customerRepository;
        $this->_customerSession = $customerSession;
    }

  /*  public function jsgetCustomerGroupRulesEnabled(): bool
    {
        return $this->dataHelper->isCustomGroupRulesEnabled();
    }

    public function jsgetCustomGroupRulesCustomerGroups(): array
    {
          return $this->dataHelper->getCustomGroupRulesCustomerGroups();
    }

    public function jsgetCustomerGroupId(): int
    {
        $customer = $this->_customerSession->create();
        if ($customer->isLoggedIn()) {
            return $customer->getCustomer()->getGroupId();
        }

        //default group id = not logged in
        return 0;
    }
*/
}
