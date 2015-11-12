<?php

namespace Greg\Component;

use Greg\Component;

class CalendarComponent implements Component
{
    const CALENDAR_COMPONENT = 'VCALENDAR';
    const PRODUCT_IDENTIFIER = 'PRODID';

    /**
     * @link https://tools.ietf.org/html/rfc5545#section-3.7.3a
     *
     * @var string
     */
    private $productIdentifier;

    /**
     * @param string $productIdentifier
     */
    public function __construct($productIdentifier)
    {
        $this->productIdentifier = $productIdentifier;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return self::CALENDAR_COMPONENT;
    }

    /**
     * @return string
     */
    public function getProductIdentifier()
    {
        return $this->productIdentifier;
    }
}

