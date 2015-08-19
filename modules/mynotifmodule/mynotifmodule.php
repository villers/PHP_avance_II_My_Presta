<?php

!defined('_PS_VERSION_') && exit;

class MyNotifmodule extends Module
{

	public function __construct()
	{
		$this->name = 'mynotifmodule';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'VILLERS Mickaël';
		$this->need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = 'My Notification module';
		$this->description = 'My Notification module for PrestaShop 1.6.x';

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

		$config['title'] = 'Un titre de notification.';
		$config['text'] = 'Une notification global pour toutes les pages du site.';
		$config['user'] = 'VILLERS Mickaël';

		$config['show_user'] = true;
		$config['show_notif'] = true;

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

			$config['title'] = Tools::getValue('title');
			$config['text'] = Tools::getValue('text');
			$config['user'] = Tools::getValue('user');

			$config['show_user'] = Tools::getValue('show_user');
			$config['show_notif'] = Tools::getValue('show_notif');
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
					'title' => 'My Notification Module',
					'icon' => 'icon-cogs'
				],
				'input' => [
					[
						'label' => 'Title',
						'name' => 'title',
						'type' => 'text',
						'required' => true
					],
					[
						'label' => 'Text',
						'name' => 'text',
						'type' => 'text',
						'required' => true
					],
					[
						'label' => 'User',
						'name' => 'user',
						'type' => 'text',
						'required' => true
					],
					[
						'label' => 'Show User',
						'name' => 'show_user',
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
					[
						'label' => 'Show Notif',
						'name' => 'show_notif',
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
