<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
