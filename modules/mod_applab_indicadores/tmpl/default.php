<?php
/**
 * Indicadores Económicos para Colombia
 * @package mod_applab_indicadores
 * @author AppLab - Laboratorio de Ideas
 * @license GNU/GPL
 * @link: http://www.applab.in
*/
defined( '_JEXEC' ) or die( 'Restricted access' );

$subject = $params->get('ancho');
$pattern = '/\\d+/';
preg_match_all($pattern, $subject, $matches, PREG_PATTERN_ORDER);

echo '<style type="text/css">
        ul#bgUl {width:'.$matches[0][0].'%; list-style:none !important;}
        ul#bgUl li {background:transparent;}
      </style>';


//echo $valores;
?>
<div class="applab_indicadores<?php echo $moduleclass_sfx ?>"  >
	<?php echo $valores;?>
</div>