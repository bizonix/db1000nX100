<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
