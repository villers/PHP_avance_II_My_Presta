<?php

!defined('_PS_VERSION_') && exit;

class MyYoutubeModule extends Module
{

	public function __construct()
	{
		$this->name = 'myyoutubemodule';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'VILLERS Mickaël';
		$this->need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = 'My Youtube module';
		$this->description = 'My Youtube module for PrestaShop 1.6.x';

		$this->confirmUninstall = 'Are you sure you want to uninstall?';

		$this->ps_versions_compliancy = ['min' => '1.6', 'max' => _PS_VERSION_];
	}

	public function install()
	{
		return parent::install() && $this->initConfig() && $this->registerHook('displayHome');
	}

	public function uninstall()
	{
		return Configuration::deleteByName($this->name) && parent::uninstall();
	}

	protected function initConfig()
	{
		$config = [];

		$config['url_video'] = 'https://www.youtube.com/embed/8XFkfdf-6wY';
		$config['show_video'] = true;

		return Configuration::updateValue($this->name, Tools::jsonEncode($config));
	}

	public function getContent()
	{
		return $this->update().$this->renderForm();
	}

	protected function update()
	{
		if (Tools::isSubmit('saveBtn'))
		{
			$config = [];

			$config['url_video'] = Tools::getValue('url_video');
			$config['show_video'] = Tools::getValue('show_video');

			Configuration::updateValue($this->name, Tools::jsonEncode($config));

			return $this->displayConfirmation('Settings updated');
		}
	}

	protected function renderForm()
	{
		$helper = new HelperForm();
		$helper->tpl_vars = [
			'fields_value' => Tools::jsonDecode(Configuration::get($this->name), true)
		];
		return $helper->generateForm([[
			'form' => [
				'legend' => [
					'title' => 'My Youtube Module',
					'icon' => 'icon-cogs'
				],
				'input' => [
					[
						'label' => 'Url Video Embed',
						'name' => 'url_video',
						'type' => 'text',
						'required' => true
					],
					[
						'label' => 'Show Video',
						'name' => 'show_video',
						'type' => 'switch',
						'is_bool' => true,
						'values' => [
							[
								'id' => 'active_on',
								'value' => 1,
								'label' => 'Yes'
							],
							[
								'id' => 'active_off',
								'value' => 0,
								'label' => 'No'
							]
						],
					],
				],
				'submit' => [
					'name' => 'saveBtn',
					'title' => 'Save',
					'class' => 'btn btn-success pull-right'
				]
			]
		]]);
	}

	public function hookDisplayHome($params)
	{
		!isset($params['tpl']) && $params['tpl'] = 'hookHome';

		$config = Tools::jsonDecode(Configuration::get($this->name), true);
		$this->smarty->assign($config);

		return $this->display(__FILE__, $params['tpl'].'.tpl');
	}
}
