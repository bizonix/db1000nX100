<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
