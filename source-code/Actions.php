<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
