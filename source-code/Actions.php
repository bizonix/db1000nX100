<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
