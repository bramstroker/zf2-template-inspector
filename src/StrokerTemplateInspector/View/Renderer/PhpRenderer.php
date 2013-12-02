<?php
/**
 * PhpRenderer
 *
 * @category  StrokerTemplateInspector\View\Renderer
 * @package   StrokerTemplateInspector\View\Renderer
 * @copyright 2013 ACSI Holding bv (http://www.acsi.eu)
 * @version   SVN: $Id$
 */

namespace StrokerTemplateInspector\View\Renderer;

use \Zend\View\Renderer\PhpRenderer as BasePhpRenderer;

class PhpRenderer extends BasePhpRenderer
{
    public function render($nameOrModel, $values = null)
    {
        $content = parent::render($nameOrModel, $values);
        if (is_string($nameOrModel)) {
            $file = $this->resolver($nameOrModel);
            $content .= '<div style="z-index: 99999; border: 1px solid red; background: yellow; padding: 2px; position: absolute;">' . $nameOrModel . '(' . $file . ')</div>';
        }
        return $content;
    }
}
