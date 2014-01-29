<?php
/**
 * Controller is the customized base controller class.
 * All controller classes for this application should extend from this base class.
 */
class StaticpageController extends Controller
{
	/**
	 * @var string the default layout for the controller view. Defaults to '//layouts/column1',
	 * meaning using a single column layout. See 'protected/views/layouts/column1.php'.
	 */
	public $layout='//layouts/main';
	/**
	 * @var array context menu items. This property will be assigned to {@link CMenu::items}.
	 */
	public $menu=array();
	/**
	 * @var array the breadcrumbs of the current page. The value of this property will
	 * be assigned to {@link CBreadcrumbs::links}. Please refer to {@link CBreadcrumbs::links}
	 * for more details on how to specify this property.
	 */
	public $breadcrumbs=array();
	
	public function actionPage($alias)
	{
		$meta_description = Yii::app()->params['pageDescriptions']['all'];
		$path = '/site/pages';
		switch ($alias) {
    		case 'search-results':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about'];
        		$path = '/site';
        		break;
    		case 'contact':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['contact'];
        		$path = '/site';
        		break;
    		case 'phpinfo':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['contact'];
        		$path = '/site';
        		break;
    		case 'terms-and-conditions':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['terms-and-conditions']; 
        		$path = '/site';
        		break;
			case 'about':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about']; 
        		$path = '/site/pages';
        		break;
			case 'careers':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['careers'];  
        		$path = '/site/pages';
        		break;
			case 'careers/job-openings':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['careers/job-openings'];  
        		$path = '/site/pages';
        		break;
			case 'about/leadership':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about/leadership'];  
        		$path = '/site/pages';
        		break;
			case 'about/leadership/paul-bishop':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about/leadership'];  
        		$path = '/site/pages';
        		break;
			case 'about/leadership/lyle-camblos':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about/leadership'];  
        		$path = '/site/pages';
        		break;
			case 'about/leadership/hunter-walker':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about/leadership'];  
        		$path = '/site/pages';
        		break;
			case 'about/leadership/bryce-warren':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about/leadership'];  
        		$path = '/site/pages';
        		break;
			case 'about/board':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about/board']; 
        		$path = '/site/pages';
        		break;
			case 'about/news':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about/news'];
        		$path = '/site/pages';
        		break;
			case 'about/global-reach':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about'];
        		$path = '/site/pages';
        		break;
			case 'about/case-studies':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['about'];
        		$path = '/site/pages';
        		break;
			case 'expertise':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['expertise'];
        		$path = '/site/pages';
        		break;
			case 'services':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['services']; 
        		break;
			case 'technology':
				$meta_description = $meta_description . Yii::app()->params['pageDescriptions']['technology'];
        		$path = '/site/pages';
        		break;
        	default:
        		$path = '/site/pages';
		}
		Yii::app()->clientScript->registerMetaTag($meta_description, 'description');
		$this->render($path . '/' . $alias);
	}

	public function actionIndex()
	{
		$meta_description = Yii::app()->params['pageDescriptions']['all'] . Yii::app()->params['pageDescriptions']['about'];
		$this->render('index');
	}
}