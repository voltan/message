<?php
/**
 * Pi Engine (http://pialog.org)
 *
 * @link            http://code.pialog.org for the Pi Engine source repository
 * @copyright       Copyright (c) Pi Engine http://pialog.org
 * @license         http://pialog.org/license.txt BSD 3-Clause License
 */

namespace Module\Widget\Form;

/**
 * Form class for block has list content
 * 
 * @author Zongshu Lin <lin40553024@163.com>
 */
class BlockListForm extends BlockCarouselForm
{
    /**
     * {@inheritDoc}
     */
    public function init()
    {
        $this->add(array(
            'name'          => 'title',
            'options'       => array(
                'label'     =>  _a('Title'),
            ),
            'attributes'    => array(
                'type'      => 'text',
                'required'  => true,
            )
        ));

        $this->add(array(
            'name'          => 'name',
            'options'       => array(
                'label'     =>  _a('Unique name'),
            ),
            'attributes'    => array(
                'type'      => 'text',
                'required'  => true,
            )
        ));

        $this->add(array(
            'name'          => 'description',
            'options'       => array(
                'label'     =>  _a('Description'),
            ),
            'attributes'    => array(
                'type'      => 'text',
            )
        ));

        $this->add(array(
            'name'          => 'template',
            'options'       => array(
                'label'     => _a('Template'),
            ),
            'type'          =>  'select',
            'attributes'    => array(
                'required'  => true,
                'options'   => array(
                    'list-title'    => _a('Title only'),
                    'list-summary'  => _a('Title and summary'),
                ),
            )
        ));

        $this->add(array(
            'name'  => 'security',
            'type'  => 'csrf',
        ));

        $this->add(array(
            'name'  => 'id',
            'type'  => 'hidden',
        ));

        $this->add(array(
            'name'  => 'content',
            'type'  => 'hidden',
        ));

        $this->add(array(
            'name'  => 'title_hidden',
            'type'  => 'hidden',
            'attributes'    => array(
                'value'     => 1,
            ),
        ));

        $this->add(array(
            'name'          => 'submit',
            'type'          => 'submit',
            'attributes'    => array(
                'value'     =>  _a('Submit'),
            )
        ));
    }
}
