<?php
//OnManagerPageBeforeRender
$eventName = $modx->event->name;
switch($eventName) {
    case 'OnManagerPageBeforeRender':
        switch($scriptProperties['controller']->config['controller']){
            case 'resource/update':
                $check = $modx->user->isMember($modx->getOption('premisson_group'));
                if($allow_to_update = $modx->getOption('allow_to_update') && $check){
                    if(!is_array($allow_to_update)){
                        $allow_to_update = explode(",", $allow_to_update);
                        $allow_to_update = array_map('trim', $allow_to_update);
                    }
                    $template = $modx->getObject('modResource', $scriptProperties['controller']->scriptProperties['id'])->get('template');
                    if(in_array($template, $allow_to_update)){
                        $scriptProperties['controller']->failure('Доступ запрещен');
                        return;
                    }
                }
                break;
        }
        break;
}
