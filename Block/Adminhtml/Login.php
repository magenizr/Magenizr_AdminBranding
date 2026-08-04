<?php
declare(strict_types=1);

/**
 * Magenizr AdminBranding
 *
 * @copyright   Copyright (c) 2021 - 2024 Magenizr (https://magenizr.com.au)
 * @license     https://magenizr.com.au/license Magenizr EULA
 */

namespace Magenizr\AdminBranding\Block\Adminhtml;

class Login extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Magenizr\AdminBranding\Helper\Data
     */
    protected $helper;

    /**
     * Base constructor.
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param \Magenizr\AdminBranding\Helper\Data $helper
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magenizr\AdminBranding\Helper\Data $helper
    ) {
        $this->helper = $helper;

        parent::__construct($context);
    }

    /**
     * Return helper
     *
     * @return \Magenizr\AdminBranding\Helper\Data
     */
    public function getHelper()
    {
        return $this->helper;
    }

    /**
     * Check if additional text is enabled
     *
     * @return mixed
     */
    public function isAdditionalTextEnabled()
    {
        return $this->getHelper()->isSetFlag('magento_adminlogin_additional_text_enabled');
    }

    /**
     * Return additional text
     *
     * @return mixed
     */
    public function getAdditionalText()
    {
        return $this->getHelper()->getScopeConfig('magento_adminlogin_additional_text');
    }
}
