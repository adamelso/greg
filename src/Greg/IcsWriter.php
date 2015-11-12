<?php

namespace Greg;

class IcsWriter
{
    public function write(Icalendar $icalendar)
    {
        $body = '';

        $body .= 'BEGIN:';
        $body .= $icalendar->getComponent()->getName();
        $body .= PHP_EOL;

        $body .= 'PRODID:';
        $body .= '-//';
        $body .= $icalendar->getComponent()->getProductIdentifier()->getOrganization();
        $body .= '-//';
        $body .= $icalendar->getComponent()->getProductIdentifier()->getProduct();
        $body .= '-//';
        $body .= strtoupper($icalendar->getComponent()->getProductIdentifier()->getLanguage());

        $body .= 'END:';
        $body .= $icalendar->getComponent()->getName();
        $body .= PHP_EOL;

        return $body;
    }
}
