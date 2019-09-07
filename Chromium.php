<?php

/**
 * @package Chromium
 * @version 1.1
 * 
 * ! Обновил? Не забудь про qero-info.json
 */

namespace VoidEngine;

EngineAdditions::loadModule (__DIR__ .'/bin/CefSharp.WinForms.dll');

class Chromium extends Control
{
    public $class     = 'CefSharp.WinForms.ChromiumWebBrowser';
    public $namespace = 'CefSharp.WinForms';

    public function __construct (Component $parent = null, string $url = 'about:blank')
	{
		parent::__construct ($parent, $this->class, $url);
	}
}
