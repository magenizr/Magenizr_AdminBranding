<?php
declare(strict_types=1);

/**
 * Magenizr AdminBranding
 *
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminBranding\Helper;

use \Magento\Framework\App\Request\Http;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    /* Section in core config data */
    const SECTION = 'admin/magenizr_adminbranding';

    /* Name of upload directory in ./media/ */
    const UPLOAD_DIR = 'magenizr_adminbranding';

    /**
     * @var \Magento\Framework\App\Filesystem\DirectoryList
     */
    private $directoryList;

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    private $storeManager;

    /**
     * @var \Magento\Framework\Filesystem\Driver\File
     */
    private $fileSystem;

    /**
     * Data constructor.
     * @param \Magento\Framework\App\Filesystem\DirectoryList $directoryList
     * @param \Magento\Store\Model\StoreManagerInterface $storeManager
     * @param \Magento\Framework\App\Helper\Context $context
     */
    public function __construct(
        \Magento\Framework\Filesystem\Driver\File $fileSystem,
        \Magento\Framework\App\Filesystem\DirectoryList $directoryList,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Framework\App\Helper\Context $context
    ) {
        $this->fileSystem = $fileSystem;
        $this->directoryList = $directoryList;
        $this->storeManager = $storeManager;

        parent::__construct($context);
    }

    /**
     * @param $image
     * @param $enabled
     * @param $file
     * @return bool|string
     */
    public function getAdminLogoSrc($image, $enabled, $file)
    {
        // Return default image if not enabled
        if (!$this->isSetFlag($enabled) || !$this->isEnabled()) {
            return $image;
        }

        // Path to media folder ( e.g /var/www/src/[project]/pub/media )
        $mediaPath = $this->directoryList->getPath('media');

        // Uploaded image file via system.xml
        $file = explode(',', $this->getScopeConfig($file));

        if (isset($file[0])) {
            // Absolute path to image file
            $mediaPathAbsolute = implode('/', [
                $mediaPath, // e.g /var/www/src/[project]/pub/media
                self::UPLOAD_DIR, // e.g magenizr_adminbranding/default/
                $file[0] // e.g magento_branding.png
            ]);

            // Check if image file actually exists on the filesystem
            if ($this->fileSystem->isReadable($mediaPathAbsolute)) {
                $mediaPathRelative = '../../../../../../media';

                $image = implode('/', [
                    $mediaPathRelative,
                    self::UPLOAD_DIR, // e.g magenizr_adminbranding/default/
                    $file[0] // e.g magento_branding.png
                ]);

                return $image;
            }
        }

        return $image;
    }

    /**
     * Return status of the module
     *
     * @return mixed
     */
    public function isEnabled()
    {
        return $this->isSetFlag('enabled');
    }

    /**
     * Use isSetFlag to check boolean fields
     *
     * @param $field
     * @return mixed
     */
    public function isSetFlag($field)
    {
        return $this->scopeConfig->isSetFlag(
            self::SECTION . '/' . $field,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }

    /**
     * Get module configuration values from core_config_data
     *
     * @param $field
     * @return mixed
     */
    public function getScopeConfig($field)
    {
        return $this->scopeConfig->getValue(
            self::SECTION . '/' . $field,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
    }
}
