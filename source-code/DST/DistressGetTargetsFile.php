<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
