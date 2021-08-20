<?php

class ApycPlugin_Deactivator 
{
    public static function deactivate() {
        update_option('apyc_plugin', 'deactivate');
	}
}