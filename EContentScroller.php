<?php

/**
 * Wrapper for Jquery Custom Content Scroller
 *
 * @author turi
 */
class EContentScroller extends CWidget {
    
    private $cssFile = 'jquery.mCustomScrollbar.css';
    private $jsFile = 'jquery.mCustomScrollbar.concat.min.js';
    
    /**
     * 
     * @var string CSS class name or Element Id 
     */
    public $target = '.content';
    
    /**
     *
     * @var array options array to pass jquery plugin 
     */
    public $options = array();
    
    /**
     * Init widget
     */
    public function init() {
        $dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'resources';

        $baseUrl = Yii::app()->getAssetManager()->publish($dir);

        $this->cssFile = $baseUrl . DIRECTORY_SEPARATOR . $this->cssFile;
        $this->jsFile = $baseUrl . DIRECTORY_SEPARATOR . $this->jsFile;

        $this->registerClientScript();
        
        parent::init();
    }
    
    protected function registerClientScript() {
        $cs = Yii::app()->clientScript;

        $cs->registerCssFile($this->cssFile);
        $cs->registerCoreScript('jquery');
        $cs->registerScriptFile($this->jsFile, CClientScript::POS_END);
    }
    
    
    public function run() {
        $options = (isset($this->options)) ? $this->options : array();
        
        $js = "$('{$this->target}').mCustomScrollbar(".CJavaScript::encode($options).");";
        
        $cs = Yii::app()->clientScript;
        $cs->registerScript('contentscroller',$js, CClientScript::POS_READY);
        
    }
}

?>
