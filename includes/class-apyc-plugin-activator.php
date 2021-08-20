<?php

class ApycPlugin_Activator 
{
    public static function activate() {
        update_option('apyc_plugin', 'activate');
	}
}