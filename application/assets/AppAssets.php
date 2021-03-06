<?php
namespace application\assets;

use yii\web\AssetBundle;

class AppAssets extends AssetBundle {

	// Variables ---------------------------------------------------

	// Globals ----------------

	// Public -----------------

	public $basePath 	= '@webroot';
	public $baseUrl 	= '@web';

	// Load css
	public $css		= [
		//'styles/main.css'
	];

	// Load JS
	public $js = [
		//'scripts/main.js'
	];

	// Load dependencies first
	public $depends = [
		//'cmsgears\core\common\assets\YiiAsset'
	];

	// Protected --------------

	// Private ----------------

	// Constructor and Initialisation ------------------------------

	public function init()  {

		parent::init();

		// Override parent
	}

	// Instance methods --------------------------------------------

	// Yii interfaces ------------------------

	// Yii parent classes --------------------

	// CMG interfaces ------------------------

	// CMG parent classes --------------------

	// AppAssets -----------------------------

}
