<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierTemplateApi\Api;

/**
 * @SuppressWarnings(PHPMD.ShortVariable)
 */
interface DatabaseTemplateRepositoryInterface
{
    /**
     * Save DatabaseTemplate
     * @param \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface $databaseTemplate
     * @return int
     */
    public function save(\MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface $databaseTemplate): int;

    /**
     * Get DatabaseTemplate by id
     * @param int $databaseTemplateIid
     * @return \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface
     */
    public function get(int $databaseTemplateIid): \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface;

    /**
     * Get by Code value
     * @param string $code
     * @return \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByCode(string $code): \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface;

    /**
     * Get by AdapterCode value
     * @param string $adapterCode
     * @return \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getByAdapterCode(string $adapterCode): \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateInterface;

    /**
     * Delete DatabaseTemplate
     * @param int $databaseTemplateIid
     * @return void
     */
    public function deleteById(int $databaseTemplateIid);

    /**
     * Get a list of DatabaseTemplate
     * @param \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria
     * @return \MSP\NotifierTemplateApi\Api\DatabaseTemplateSearchResultsInterface
     */
    public function getList(
        \Magento\Framework\Api\SearchCriteriaInterface $searchCriteria = null
    ): \MSP\NotifierTemplateApi\Api\DatabaseTemplateSearchResultsInterface;
}
