jQuery Autogrow
===============
The Jquery autogrow extension for texarea in yii framework

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist moonlandsoft/autogrow "*"
```

or add

```
"moonlandsoft/autogrow": "*"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
<?= \moonlandsoft\autogrow\Autogrow::widget(['selector' => '.text-area-grow']); ?>
```

or use this with jquery function call :

```php
<?= \moonlandsoft\autogrow\Autogrow::widget(['selector' => '.text-area-grow', 'functionName' => 'makeTextAutogrow']); ?>
```
