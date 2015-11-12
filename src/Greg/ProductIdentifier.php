<?php

namespace Greg;

class ProductIdentifier
{
    /**
     * @var string
     */
    private $organization;

    /**
     * @var string
     */
    private $product;

    /**
     * ISO 639-1 language code in lower-case format.
     *
     * @var string
     */
    private $language;

    /**
     * @param string $organization
     * @param string $product
     * @param string $language
     */
    public function __construct($organization, $product, $language)
    {
        if (2 !== strlen($language)) {
            throw new \InvalidArgumentException('Language code must conform to the ISO 639-1 standard.');
        }

        $this->organization = $organization;
        $this->product = $product;
        $this->language = strtolower($language);
    }

    /**
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @return string
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }
}