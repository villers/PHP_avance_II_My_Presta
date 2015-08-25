<?php

!defined('_PS_VERSION_') && exit;

class MyLabelGenerator extends Module
{

	public function __construct()
	{
		$this->name = 'mylabelgenerator';
		$this->tab = 'front_office_features';
		$this->version = '1.0.0';
		$this->author = 'CHALAS Robin';
		$this->need_instance = 0;
		$this->bootstrap = true;

		parent::__construct();

		$this->displayName = 'My Label Generator module';
		$this->description = 'My Label Generator module for PrestaShop 1.6.x';

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
		$config['show_barcode'] = true;

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
			$config['show_barcode'] = Tools::getValue('show_barcode');
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
					'title' => 'My Label Generator Module',
					'icon' => 'icon-cogs'
				],
				'input' => [
					[
						'label' => 'Show Barcode',
						'name' => 'show_barcode',
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
		$html = '';
		if ($config['show_barcode'])
			$html .= '<script type="text/javascript" src="'.$this->_path.'js/mylabelgenerator.js" ></script>';

		return $html;
	}
}
