<?php

namespace Greg;

class Icalendar
{
    /**
     * @var Component
     */
    private $component;

    /**
     * @param Component $component
     */
    public function setComponent(Component $component)
    {
        $this->component = $component;
    }

    /**
     * @return Component
     */
    public function getComponent()
    {
        return $this->component;
    }
}