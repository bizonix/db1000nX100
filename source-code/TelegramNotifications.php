<?php
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='https://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"https://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$__msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
