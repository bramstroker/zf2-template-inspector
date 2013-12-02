<?php
return array(
    'view_manager' => array(
        'strategies' => array(
            'StrokerTemplateStrategy'
        ),
        'template_map' => array(
            'zend-developer-tools/toolbar/stroker-template-inspector' => __DIR__ . '/../view/zend-developer-tools/toolbar/stroker-template-inspector.phtml',
            'stroker-template-inspector/highlight' => __DIR__ . '/../view/highlight.phtml'
        ),
    ),
    'zenddevelopertools' => array(
        'profiler' => array(
            'collectors' => array(
                'stroker-template-inspector' => 'StrokerTemplateInspector\Collector\TemplateCollector',
            ),
        ),
        'toolbar' => array(
            'entries' => array(
                'stroker-template-inspector' => 'zend-developer-tools/toolbar/stroker-template-inspector',
            ),
        ),
    ),
);