<?php

/**
 * @package Chromium
 * @version 1.0
 */

namespace VoidEngine;

EngineAdditions::loadModule (__DIR__ .'/bin/CefSharp.dll');

class Chromium extends Control
{
    public $class     = 'CefSharp.WinForms.ChromiumWebBrowser';
    public $namespace = 'CefSharp.WinForms';

    public function __construct (Component $parent = null)
	{
		parent::__construct ($parent, $this->class, 'about:blank');
	}
}
