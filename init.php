<?php
$pluginContainer = ClassRegistry::getObject('PluginContainer');
$pluginContainer->installed('cc_satomi','0.1');


$hookContainer = ClassRegistry::getObject('HookContainer');
$hookContainer->registerElementHook(
    'news', // target element name.
    '../../Plugin/CcSatomi/View/Element/satomi', // additional template you want to inject.
    false // it should be true when you want to inject before the target template.
);