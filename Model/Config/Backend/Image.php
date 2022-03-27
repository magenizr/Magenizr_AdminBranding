<?php
declare(strict_types=1);

/**
 * Magenizr AdminBranding
 *
 * @copyright   Copyright (c) 2021 Magenizr (https://www.magenizr.com)
 * @license     https://www.magenizr.com/license Magenizr EULA
 */

namespace Magenizr\AdminBranding\Model\Config\Backend;

/**
 * Class Image
 *
 */
class Image extends \Magento\Config\Model\Config\Backend\Image
{
    // @codingStandardsIgnoreStart
    /**
     * Return path to directory for upload file
     *
     * @return string
     * @throw \Magento\Framework\Exception\LocalizedException
     */
    protected function _getUploadDir()
    {
        return $this->_mediaDirectory->getAbsolutePath(
            $this->_appendScopeInfo(\Magenizr\AdminBranding\Helper\Data::UPLOAD_DIR)
        );
    }

    /**
     * Makes a decision about whether to add info about the scope.
     *
     * @return boolean
     */
    protected function _addWhetherScopeInfo()
    {
        return true;
    }

    /**
     * Getter for allowed extensions of uploaded files.
     *
     * @return string[]
     */
    protected function _getAllowedExtensions()
    {
        return ['jpg', 'jpeg', 'gif', 'png', 'svg'];
    }
    // @codingStandardsIgnoreEnd
}
