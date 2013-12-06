<?php
defined( '_JEXEC' ) or die( 'Restricted access' );

/**
 * Indicadores Económicos para Colombia
 * @package mod_applab_indicadores
 * @author AppLab - Laboratorio de Ideas
 * @license GNU/GPL
 * @link: http://www.applab.in
*/

require_once( dirname(__FILE__).'/helper.php' );
 
$valores = modApplabIndicadoresHelper::getValores( $params );
$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

require( JModuleHelper::getLayoutPath( 'mod_applab_indicadores','default') );
