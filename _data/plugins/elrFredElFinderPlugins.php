id: 9
source: 1
name: elrFredElFinderPlugins
category: 'euler Theme'
properties: 'a:0:{}'

-----

/** elFinder Plugin Options **/
switch ($modx->event->name) {
    case 'FredOnElfinderRoots':
        $params = $modx->getOption('params', $scriptProperties);
        if (empty($params)) return false;
        // Enable Sanitizer
            $params->bind['upload.pre mkdir.pre mkfile.pre rename.pre archive.pre ls.pre'][] = 'Plugin.Sanitizer.cmdPreprocess';
            $params->bind['paste.copyfrom upload.presave'][] = 'Plugin.Sanitizer.onUpLoadPreSave';
            $params->plugin['Sanitizer'] = [
                'enable' => true,
                'targets'  => array('\\','/',':','*','?','"','<','>','|','#',' ','_',','),
                'replace'  => '-',
                'callBack' => null
            ];
        // Enable Normalizer
            $params->bind['upload.pre mkdir.pre mkfile.pre rename.pre archive.pre ls.pre'][] = 'Plugin.Normalizer.cmdPreprocess';
            $params->bind['paste.copyfrom upload.presave'][] = 'Plugin.Normalizer.onUpLoadPreSave';
            $params->plugin['Normalizer'] = [
                'enable'    => true,
                'nfc'       => true,
                'nfkc'      => true,
                'umlauts'   => true,
                'lowercase' => true,
                'convmap'   => array()
            ];
        // Enable Auto Rotate
        //    $params->bind['upload.presave'][] = 'Plugin.AutoRotate.onUpLoadPreSave';
        //    $params->plugin['AutoRotate'] = [
        //        'enable'         => true,
        //        'quality'        => 95,
        //        'offDropWith'    => null,
        //        'onDropWith'     => null
        //    ];
        // Enable Auto Resize
        //    $params->bind['upload.presave'][] = 'Plugin.AutoResize.onUpLoadPreSave';
        //    $params->plugin['AutoResize'] = [
        //        'enable'         => true,
        //        'maxWidth'       => 1024,
        //        'maxHeight'      => 1024,
        //        'quality'        => 95,
        //        'preserveExif'   => false,
        //        'forceEffect'    => false,
        //        'targetType'     => IMG_GIF|IMG_JPG|IMG_PNG|IMG_WBMP,
        //        'offDropWith'    => null,
        //        'onDropWith'     => null
        //    ];
        break;
}

return true;