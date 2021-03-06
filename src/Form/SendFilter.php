<?php
/**
 * Pi Engine (http://piengine.org)
 *
 * @link            http://code.piengine.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://piengine.org
 * @license         http://piengine.org/license.txt BSD 3-Clause License
 */

namespace Module\Message\Form;

use Pi;
use Zend\InputFilter\InputFilter;

/**
 * Filter of send message
 *
 * @author Xingyu Ji <xingyu@eefocus.com>
 */
class SendFilter extends InputFilter
{
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->add(array(
            'name' => 'name',
            'required' => true,
            'filters' => array(
                array(
                    'name' => 'StringTrim',
                ),
            ),
        ));

        $this->add(array(
            'name' => 'content',
            'filters' => array(
                array(
                    'name' => 'StringTrim',
                ),
                array(
                    'name' => 'StripTags',
                ),
            ),
        ));
    }
}
