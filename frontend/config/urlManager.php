<?php
return [
    'class' => 'yii\web\UrlManager',
    'hostInfo' => 'frontendHostInfo',
    'enablePrettyUrl' => true,
    'showScriptName' => false,
    'rules' => [
        // Вставляем это регулярное выражение для ЧПУ
        '' => 'site/index',
        '<_a:about|contact|signup|login>' => 'site/<_a>',
        '<_c:[\w\-]+>' => '<_c>/index',
        '<_c:[\w\-]+>/<id:\d+>' => '<_c>/view',
        '<_c:[\w\-]+>/<_a:[\w-]+>' => '<_c>/<_a>',
        '<_c:[\w\-]+>/<id:\d+>/<_a:[\w\-]+>' => '<_c>/<_a>',
    ],
];