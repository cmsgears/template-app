<?php

use cmsgears\core\common\models\entities\User;
use cmsgears\core\common\models\resources\Form;
use cmsgears\core\common\models\resources\FormField;

use cmsgears\core\common\utilities\DateUtil;

class m171218_150848_app extends \yii\db\Migration {

	// Public Variables

	// Private Variables

	private $cmgPrefix;
	private $appPrefix;

	private $master;

	public function init() {

		// Table prefix
		$this->cmgPrefix	= Yii::$app->migration->cmgPrefix;
		$this->appPrefix	= Yii::$app->migration->appPrefix;

		$this->master	= User::findByUsername( Yii::$app->migration->getSiteMaster() );
	}

	public function up() {

		$this->insertApp();

		$this->insertAppConfig();
	}

	private function insertApp() {

		$this->insert( $this->cmgPrefix . 'app', [
			'createdBy' => $this->master->id, 'modifiedBy' => $this->master->id,
			'name' => 'Primary', 'slug' => 'primary',
			'description' => 'Primary child app.',
			'visibility' => Form::VISIBILITY_PUBLIC,
			'createdAt' => DateUtil::getDateTime(),
			'modifiedAt' => DateUtil::getDateTime()
		]);
	}

	private function insertAppConfig() {

		$this->insert( $this->prefix . 'core_form', [
			'siteId' => $this->site->id,
			'createdBy' => $this->master->id, 'modifiedBy' => $this->master->id,
			'name' => 'Config Primary', 'slug' => 'config-primary',
			'type' => CoreGlobal::TYPE_APP,
			'description' => 'Primary App configuration form.',
			'successMessage' => 'All configurations saved successfully.',
			'captcha' => false,
			'visibility' => Form::VISIBILITY_PROTECTED,
			'active' => true, 'userMail' => false,'adminMail' => false,
			'createdAt' => DateUtil::getDateTime(),
			'modifiedAt' => DateUtil::getDateTime()
		]);

		$config	= Form::findBySlug( 'config-primary', CoreGlobal::TYPE_APP );

		$columns = [ 'formId', 'name', 'label', 'type', 'compress', 'validators', 'order', 'icon', 'htmlOptions' ];

		$fields	= [
			// [ $config->id, 'locale_message', 'Locale Message', FormField::TYPE_TOGGLE, false, 'required', 0, NULL, '{"title":"Check for i18n support."}' ],
			// [ $config->id, 'language','Language', FormField::TYPE_TEXT, false, 'required', 0, NULL, '{"title":"Language used on html tag.","placeholder":"Language"}' ]
		];

		$this->batchInsert( $this->prefix . 'core_form_field', $columns, $fields );
	}

	public function down() {

		echo "m171218_150848_app will be deleted with m160621_014408_core.\n";
	}
}
