EContentScroller Yii Extension
================

A wrapper for jQuery custom content scroller plugin.



**Requirements**

Tested with Yii 1.1.10 and 1.1.12. may work on other versions


**Installation**

* Extract the file under protected/extensions folder.


**Usage**

 * Default Usage

```
$this->widget('application.extensions.econtentscroller.EContentScroller', array(
    'target' => '.content'
));
```

 * Usage with optional parameters

```
$this->widget('application.extensions.econtentscroller.EContentScroller', array(
    'target' => '.content',
    'options' => array(
        'theme' => 'dark',
        'horizontalScroll' => true,
        'scrollButtons' => array(
            'enable' => true
        )
    )
));
```

**Resources**

 * [Project Page](http://manos.malihu.gr/jquery-custom-content-scroller/)
 * [Demo](http://manos.malihu.gr/tuts/custom-scrollbar-plugin/complete_examples.html)
