<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
