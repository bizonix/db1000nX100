<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
