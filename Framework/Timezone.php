<?php

namespace Magonex\DateTime\Framework;

class Timezone extends \Magento\Framework\Stdlib\DateTime\Timezone {

    public function getDateFormat($type = \IntlDateFormatter::SHORT)
    {
        return (new \IntlDateFormatter(
        //$this->_localeResolver->getLocale(),
            'en_US',
            $type,
            \IntlDateFormatter::NONE
        ))->getPattern();
    }
}
