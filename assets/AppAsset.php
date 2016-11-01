<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    //public $basePath = '@webroot';
    //public $baseUrl = '@web';
    public $sourcePath='@bower/plantilla/';
    public $css = [
        //'css/site.css',
        'assets/css/bootstrap.css',
		'components/select2/dist/css/select2.css',
        'components/font-awesome/css/font-awesome.css',
        'assets/css/ace-fonts.css',
        'assets/css/ace.css',
        'assets/css/ace-skins.css',
        'assets/css/ace-rtl.css',
        'assets/js/themes/sunburst.css',
        'assets/css/ace.onpage-help.css',
		'components/jquery-colorbox/example1/colorbox.css',
		'components/_mod/jquery-ui/jquery-ui.css',
    ];
    public $js = [
        'assets/js/ace-extra.js',
        'components/jquery/dist/jquery.js',
        'components/bootstrap/dist/js/bootstrap.js',
        'components/_mod/jquery-ui.custom/jquery-ui.custom.js',
        'components/jqueryui-touch-punch/jquery.ui.touch-punch.js',
        'components/_mod/easypiechart/jquery.easypiechart.js',
        'components/jquery.sparkline/index.js',
        'components/Flot/jquery.flot.js',
        'components/Flot/jquery.flot.pie.js',
        'components/Flot/jquery.flot.resize.js',
		
		'components/jquery-colorbox/jquery.colorbox.js',
        
        'assets/js/src/elements.scroller.js',
        'assets/js/src/elements.colorpicker.js',
        'assets/js/src/elements.fileinput.js',
        'assets/js/src/elements.typeahead.js',
        'assets/js/src/elements.wysiwyg.js',
        'assets/js/src/elements.spinner.js',
        'assets/js/src/elements.treeview.js',
        'assets/js/src/elements.wizard.js',
        'assets/js/src/elements.aside.js',
        'assets/js/src/ace.js',
        'assets/js/src/ace.basics.js',
        'assets/js/src/ace.scrolltop.js',
        'assets/js/src/ace.ajax-content.js',
        'assets/js/src/ace.touch-drag.js',
        'assets/js/src/ace.sidebar.js',
        'assets/js/src/ace.sidebar-scroll-1.js',
        'assets/js/src/ace.submenu-hover.js',
        'assets/js/src/ace.widget-box.js',
        'assets/js/src/ace.settings.js',
        'assets/js/src/ace.settings-rtl.js',
        'assets/js/src/ace.settings-skin.js',
        'assets/js/src/ace.widget-on-reload.js',
        'assets/js/src/ace.searchbox-autocomplete.js',
        'docs/assets/js/language/javascript.js',
        'docs/assets/js/language/css.js',
        'docs/assets/js/language/html.js',
        'docs/assets/js/language/generic.js',
        'docs/assets/js/rainbow.js',
        'assets/js/src/ace.onpage-help.js',
        'assets/js/src/elements.onpage-help.js',
		
		
		'components/bootstrap/dist/js/bootstrap.js',
		'components/fuelux/js/wizard.js',
		'components/jquery-validation/dist/additional-methods.js',
		'components/bootbox.js/bootbox.js',
		'components/jquery.maskedinput/dist/jquery.maskedinput.js',
		'components/select2/dist/js/select2.js',
		'components/jquery-validation/dist/jquery.validate.js',
		'components/jquery/dist/jquery.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
