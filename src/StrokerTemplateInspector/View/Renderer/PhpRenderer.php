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

use StrokerTemplateInspector\Collector\TemplateCollector;
use Zend\View\Model\ModelInterface;
use \Zend\View\Renderer\PhpRenderer as BasePhpRenderer;

class PhpRenderer extends BasePhpRenderer
{
    /**
     * @var TemplateCollector
     */
    protected $templateCollector;

    /**
     * {@inheritDoc}
     */
    public function render($nameOrModel, $values = null)
    {
        $content = parent::render($nameOrModel, $values);

        if ($nameOrModel instanceof ModelInterface) {
            $template = $nameOrModel->getTemplate();
        } else {
            $template = $nameOrModel;
        }

        $filePath = $this->resolver($template);

        $this->templateCollector->addTemplate($template);

        return parent::render(
            'stroker-template-inspector/highlight',
            array(
                'content' => $content,
                'template' => $template,
                'file' => $filePath
            )
        );
    }

    /**
     * @return TemplateCollector
     */
    public function getTemplateCollector()
    {
        return $this->templateCollector;
    }

    /**
     * @param TemplateCollector $templateCollector
     */
    public function setTemplateCollector($templateCollector)
    {
        $this->templateCollector = $templateCollector;
    }
}