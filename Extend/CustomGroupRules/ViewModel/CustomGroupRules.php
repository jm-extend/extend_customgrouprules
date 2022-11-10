<?php
/**
 * Extend Warranty
 *
 * @author      Extend Magento Team <magento@extend.com>
 * @category    Extend
 * @package     Warranty
 * @copyright   Copyright (c) 2022 Extend Inc. (https://www.extend.com/)
 */

declare(strict_types=1);

namespace Extend\CustomGroupRules\ViewModel;

use Extend\CustomGroupRules\Helper\Api\Data as DataHelper;
use Magento\Framework\View\Element\Block\ArgumentInterface;
use phpDocumentor\Reflection\PseudoTypes\False_;


/**
 * Class Warranty
 */
class CustomGroupRules implements ArgumentInterface
{
    /**
     * Data Helper
     *
     * @var DataHelper
     */
    private DataHelper $dataHelper;
    protected $_customerSession;
    private DataHelper $request;

    /**
     * custom PDP Rules  constructor
     *
     * @param DataHelper $dataHelper
     */
    public function __construct(
        DataHelper                                        $dataHelper,
        \Magento\Framework\App\Request\Http               $request,
        \Magento\Customer\Api\CustomerRepositoryInterface $customerRepository,
        \Magento\Customer\Model\SessionFactory            $customerSession
    )
    {
        $this->dataHelper = $dataHelper;
        $this->_request = $request;
        $this->_customerRepository = $customerRepository;
        $this->_customerSession = $customerSession;
    }


    /**
     * Check if custom PDP group rules enabled
     *
     * @return bool
     */
    public function isCustomGroupRulesEnabled(): bool
    {
        return $this->dataHelper->isCustomGroupRulesEnabled();
    }

    /**
     * Check is custom Rules PDP customer group
     *
     * @return array
     */
    public function getCustomGroupRulesCustomerGroups(): array
    {
        return $this->dataHelper->getCustomGroupRulesCustomerGroups();
    }

    /**
     * get current page
     *
     * @return string
     */
    public function getCurrentPage(): string
    {
        return $this->_request->getFullActionName();
    }

    /**
     *  get current customer group id
     *
     * @return bool|int
     */

    public function getCustomerGroupId()
    {
        $customer = $this->_customerSession->create();
        if ($customer->isLoggedIn()) {
            return $customer->getCustomer()->getGroupId();
        }

        //default group id = not logged in
        return 0;
    }

}
