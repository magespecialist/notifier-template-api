<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierTemplateApi\Api;

interface DatabaseTemplateSearchResultsInterface extends \Magento\Framework\Api\SearchResultsInterface
{
    /**
     * Get an array of objects
     * @return \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface[]
     */
    public function getItems();

    /**
     * Set objects list
     * @param \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface[] $items
     * @return $this
     */
    public function setItems(array $items);
}
