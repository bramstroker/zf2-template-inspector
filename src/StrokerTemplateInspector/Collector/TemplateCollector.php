<?php
/**
 * TemplateCollector
 *
 * @category  StrokerTemplateInspector
 * @package   StrokerTemplateInspector
 * @copyright 2013 ACSI Holding bv (http://www.acsi.eu)
 * @version   SVN: $Id$
 */

namespace StrokerTemplateInspector\Collector;

use Zend\Mvc\MvcEvent;
use ZendDeveloperTools\Collector\CollectorInterface;

class TemplateCollector implements CollectorInterface
{
    /**
     * @var array
     */
    protected $templates = array();

    /**
     * Collector Name.
     *
     * @return string
     */
    public function getName()
    {
        return 'stroker-template-inspector';
    }

    /**
     * Collector Priority.
     *
     * @return integer
     */
    public function getPriority()
    {
        return 100;
    }

    /**
     * Collects data.
     *
     * @param MvcEvent $mvcEvent
     */
    public function collect(MvcEvent $mvcEvent)
    {
    }

    /**
     * @return array
     */
    public function getTemplates()
    {
        return $this->templates;
    }

    /**
     * @param string $template
     */
    public function addTemplate($template)
    {
        $this->templates[] = $template;
    }
}