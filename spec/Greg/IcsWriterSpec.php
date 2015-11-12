<?php

namespace spec\Greg;

use Greg\Component\CalendarComponent;
use Greg\Icalendar;
use Greg\ProductIdentifier;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class IcsWriterSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Greg\IcsWriter');
    }

    function it_writes_an_iCalendar_object_to_an_ICS_file_format(Icalendar $icalendar, CalendarComponent $calendarComponent, ProductIdentifier $productIdentifier)
    {
        $icalendar->getComponent()->willReturn($calendarComponent);

        $calendarComponent->getName()->willReturn('VCALENDAR');

        $calendarComponent->getProductIdentifier()->willReturn($productIdentifier);

        $productIdentifier->getOrganization()->willReturn('ArchFizz');
        $productIdentifier->getProduct()->willReturn('Greg');
        $productIdentifier->getLanguage()->willReturn('en');

        $ics = <<<ICS
BEGIN:VCALENDAR
PRODID:-//ArchFizz//Greg//EN
VERSION:2.0
METHOD:PUBLISH
BEGIN:VEVENT
DTSTART:20151112T150000Z
DTEND:20151112T160000Z
LOCATION: The Internet
TRANSP:OPAQUE
UID:146627654820151112T142200Z
DESCRIPTION:Please click the link below to attend.\n\nhttp://google.com
SUMMARY:This is my event
PRIORITY:5
CLASS:PUBLIC
BEGIN:VALARM
TRIGGER:-PT15M
ACTION:DISPLAY
title:Reminder
END:VALARM
END:VEVENT
END:VCALENDAR

ICS;


        $this->write($icalendar)->shouldReturn($ics);
    }
}
