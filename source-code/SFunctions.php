<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
