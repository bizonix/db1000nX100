<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
