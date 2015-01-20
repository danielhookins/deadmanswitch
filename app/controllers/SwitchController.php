<?php

class SwitchController extends BaseController {

	public function showSwitchCreator()
	{
		return View::make('switch-create');
	}
}