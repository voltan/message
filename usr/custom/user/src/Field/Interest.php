<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt New BSD License
 */

namespace Custom\User\Field;

use Pi;
use Module\User\CustomFieldHandler;

/**
 * Custom interest handler
 *
 *
 * @author Taiwen Jiang <taiwenjiang@tsinghua.org.cn>
 */
class Interest extends CustomFieldHandler
{
    /** @var string Field name and table name */
    protected $name = 'interest';

    /** @var string Form class */
    protected $form = '';

    /** @var string File to form template */
    protected $template = '';

    /** @var string Form filter class */
    protected $filter = '';

}