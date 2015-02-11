<?php

namespace Ardate;

class ArDate extends \Ardate\Arabic_Date {

    private $format = 'l dS F Y h:i:s A';

    /**
     * Convert given Date to Arabic
     * Date Parameter expected to unixtime , timestamp or  datetime
     * @param $date
     * @return string
     */
    public function convert($date)
    {
        if (!is_numeric($date))
        {
            $date = strtotime($date);
        }

        return $this->date($this->format, $date);
    }

    /**
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param string $format
     */
    public function setFormat($format)
    {
        $this->format = $format;
    }


}