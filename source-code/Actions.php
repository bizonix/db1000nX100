<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
