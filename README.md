3ch3r46/Jui-Autogrow
====================
The Jquery autogrow extension for texarea in yii framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist 3ch3r46/jui-autogrow "*"
```

or add

```
"3ch3r46/jui-autogrow": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```
!#php
<?= \a3ch3r46\juiAutogrow\Autogrow::widget(['selector' => '.text-area-grow']); ?>
```

or use this with jquery function call :

```
!#php
<?= \a3ch3r46\juiAutogrow\Autogrow::widget(['selector' => '.text-area-grow', 'functionName' => 'makeTextAutogrow']); ?>
```
