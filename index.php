<?php

//print_r($_SERVER);die();

$sitepad['db_name'] = 'tecniexp_spad364';
$sitepad['db_user'] = 'tecniexp_spad364';
$sitepad['db_pass'] = 'Y3@WAW1-@o';
$sitepad['db_host'] = 'localhost';
$sitepad['db_table_prefix'] = 'itric7Y_';
$sitepad['charset'] = '';
$sitepad['collate'] = '';
$sitepad['serving_url'] = 'tecniexpert.cl';// URL without protocol but with directory as well
$sitepad['url'] = 'https://tecniexpert.cl';
$sitepad['relativeurl'] = '';
$sitepad['.sitepad'] = '/home/tecniexp';
$sitepad['sitepad_plugin_path'] = '/usr/local/sitepad';
$sitepad['editor_path'] = '/usr/local/sitepad/editor';
$sitepad['path'] = dirname(__FILE__);
$sitepad['AUTH_KEY'] = '4190BBlzSz9PYnbwxScHOViLxdchhTxPp2ClxZcgvWTulxNZK3MNYMAEH0UDpXL4';
$sitepad['SECURE_AUTH_KEY'] = 'Ru7XPIC6VJ3UjEDPev9P39pe4VdqtyZVJn7cEiaf76k1EllejLyc6QPyOVKnVSVa';
$sitepad['LOGGED_IN_KEY'] = 'XbOwWOBDGli2qweQHspNI5GZu73isGfYmRK0zW2DV72DXk3TmZuFlEZtijBgI3Rj';
$sitepad['NONCE_KEY'] = 'gwIbBiNxvarVWAnr08H4l8oWVqbO6JicmfXksl328fPMYK4JErkQoGLlgE3x9id8';
$sitepad['AUTH_SALT'] = 'HVLHu8DJ6yjERJoQCSOdWsPMuSZd9Wn9leE7L14RIDoYVsR9h7b69RDuJjLkcrc4';
$sitepad['SECURE_AUTH_SALT'] = 'nnDxAaGqeFRPMMuwAhgG0vnspmcZCbh9xX6Ff9bEEF1zc5PE0HkIgG30j6loSLxy';
$sitepad['LOGGED_IN_SALT'] = 'JCJdpnZqEt83wYacjX8HiJbuyHEtIIxOgOxBpbmofHgxEjhtSQdAPz0aNG4l7T6u';
$sitepad['NONCE_SALT'] = 'sOqbCdMLMv2AV9Q5qxsLjtudMcYxBYG77HezUKRsVI1OIVeiNQ80YdXmYsRAuYNZ';

if(!include_once($sitepad['editor_path'].'/site-inc/bootstrap.php')){
	die('Could not include the bootstrap.php. One of the reasons could be open_basedir restriction !');
}

