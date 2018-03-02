<?php
/**
 * Automatically created by MageSpecialist CodeMonkey
 * https://github.com/magespecialist/m2-MSP_CodeMonkey
 */

declare(strict_types=1);

namespace MSP\NotifierTemplateApi\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

interface DatabaseTemplateInterface extends ExtensibleDataInterface
{
    const ID = 'template_id';
    const CODE = 'code';
    const ADAPTER_CODE = 'adapter_code';
    const NAME = 'name';
    const TEMPLATE = 'template';

    /**
     * Get value for rule_id
     * @return int
     */
    public function getId();

    /**
     * Set value for rule_id
     * @param int $value
     * @return void
     */
    public function setId($value);

    /**
     * Get value for code
     * @return string
     */
    public function getCode();

    /**
     * Set value for code
     * @param string $value
     * @return void
     */
    public function setCode($value);

    /**
     * Get value for adapter_code
     * @return string
     */
    public function getAdapterCode();

    /**
     * Set value for adapter_code
     * @param string $value
     * @return void
     */
    public function setAdapterCode($value);

    /**
     * Get value for name
     * @return string
     */
    public function getName();

    /**
     * Set value for name
     * @param string $value
     * @return void
     */
    public function setName($value);

    /**
     * Get value for template
     * @return string
     */
    public function getTemplate();

    /**
     * Set value for template
     * @param string $value
     * @return void
     */
    public function setTemplate($value);

    /**
     * Retrieve existing extension attributes object or create a new one
     * @return \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface|null
     */
    public function getExtensionAttributes();

    /**
     * Set an extension attributes object
     * @param \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface $extensionAttributes
     * @return $this
     */
    public function setExtensionAttributes(
        \MSP\NotifierTemplateApi\Api\Data\DatabaseTemplateExtensionInterface $extensionAttributes
    );
}
