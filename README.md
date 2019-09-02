# Chromium

Данный репозиторий содержит в себе пакет работы с [**CefSharp**](https://github.com/cefsharp/CefSharp) для [**VoidFramework**](https://github.com/winforms-php/VoidFramework). Учтите, что он имеет довольно солидный размер

### Установка (Qero)

```cmd
php Qero.phar install winforms-php/Chromium
```

### Использование

```php
namespace VoidEngine;

$form = new Form;

$chromium = new Chromium ($form);
$chromium->dock = dsFill;
$chromium->load ('vk.com');

$form->showDialog ();
```