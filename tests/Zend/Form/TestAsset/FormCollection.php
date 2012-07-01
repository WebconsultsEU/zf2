<?php
/**
 * Zend Framework
 *
 * LICENSE
 *
 * This source file is subject to the new BSD license that is bundled
 * with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://framework.zend.com/license/new-bsd
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@zend.com so we can send you a copy immediately.
 *
 * @category   Zend
 * @package    Zend_Form
 * @subpackage UnitTest
 * @copyright  Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license    http://framework.zend.com/license/new-bsd     New BSD License
 */

namespace ZendTest\Form\TestAsset;

use Zend\Form\Element\Color as ColorElement;
use Zend\Form\Form;

class FormCollection extends Form
{
    public function __construct()
    {
        parent::__construct('collection');

        $element = new ColorElement('color');
        $this->add(array(
            'type' => 'Zend\Form\Element\Collection',
            'name' => 'colors',
            'attributes' => array(
                'count' => 2,
                'targetElement' => $element
            )
        ));
    }
}
