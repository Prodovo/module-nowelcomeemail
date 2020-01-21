<?php
/**
 * No Welcome Email
 * Copyright (C) 2020 Imageine Online
 * 
 * This file included in Imageineonline/NoWelcomeEmail is licensed under OSL 3.0
 * 
 * http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * Please see LICENSE.txt for the full text of the OSL 3.0 license
 */

namespace Imageineonline\NoWelcomeEmail\Plugin\Magento\Customer\Model;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

/**
 * Class EmailNotification
 * @package Imageineonline\NoWelcomeEmail\Plugin\Magento\Customer\Model
 */
class EmailNotification
{
    /**
     * Construct
     *
     * EmailNotification constructor.
     * @param ScopeConfigInterface $scopeConfig
     */
	public function __construct(
		ScopeConfigInterface $scopeConfig
	) { 
		$this->_scopeConfig = $scopeConfig;
	}

    /**
     * Intercept Login Email Sending
     *
     * @param \Magento\Customer\Model\EmailNotification $subject
     * @param \Closure $proceed
     * @param string $type
     * @param null $sendemailStoreId
     * @param string $backUrl
     * @param $customer
     * @param int $storeId
     * @return mixed
     */
    public function aroundNewAccount(
        \Magento\Customer\Model\EmailNotification $subject,
        \Closure $proceed,
        $type = 'registered',
        $sendemailStoreId = null,
        $backUrl = '',
        $customer,
        $storeId = 0
    ) {

        if( $type === null ) {
            $type = $subject::NEW_ACCOUNT_EMAIL_REGISTERED;
        }
		
		$isEnabled = $this->_scopeConfig->getValue('customer/create_account/disable_welcome_email', ScopeInterface::SCOPE_STORE);

        if(!$isEnabled){
			$result = $proceed($type, $sendemailStoreId, $backUrl, $customer, $storeId);
			return $result;
        }
		
    }
}