<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
