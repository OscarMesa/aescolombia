<?php
/**
 * Indicadores Económicos para Colombia
 * @package mod_applab_indicadores
 * @author AppLab - Laboratorio de Ideas
 * @license GNU/GPL
 * @link: http://www.applab.in
*/
defined( '_JEXEC' ) or die( 'Restricted access' );

class modApplabIndicadoresHelper {
    function getValores( $params ) {
	$indicadores = '<!-- Indicadores Económicos -->
<div id="bgBody">
 <a id="bgLink" href="http://www.applab.in/" target="_blank">Integrado por AppLab.in</a>
 <script type="text/javascript">
  // <![CDATA[
  var bgHost = "http://www.applab.in/";
  var bgType = "CO-19284-1";
  var bgIndi = "9|1|2|10|6|4|7|3";
  (function(d){ var f = bgHost+ "apps/indicators/"+bgType+"/"+bgIndi+"/functions.js"; d.write(unescape("%3Cscript src=\'"+f+"\' type=\'text/javascript\'%3E%3C/script%3E")); })(document);
  // ]]>
 </script>
</div> 
<!-- Indicadores Económicos -->';
	return $indicadores;
    }
}
