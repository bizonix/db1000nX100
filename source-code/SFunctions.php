<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
