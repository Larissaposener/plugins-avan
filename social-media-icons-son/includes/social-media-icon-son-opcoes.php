<?php 

	function smis_pagina_de_opcoes_frontend(){
		require_once(SMIS_DIRETORIO_ABSOLUTO_DO_PLUGIN.'includes/template/op.php');

	}

	function smis_pagina_de_opcoes_registro(){
		//essa funçao add vai pedir alguns parametros
		add_options_page('SMIS opcoes','SMIS opcoes','manage_options','smis', 'smis_pagina_de_opcoes_frontend');
	}
	add_action('admin_menu','smis_pagina_de_opcoes_registro');

function smis_carregando_settings_api(){
	register_setting('smis_op','smis_op_icons');
}
add_action('admin_init','smis_carregando_settings_api');

 ?>