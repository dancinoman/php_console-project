<?php

//include that file in global scope end. And enjoy!

function php_console($to_debug){

			switch(gettype($to_debug)) {
				case "array":
						$to_debug = implode(", ", $to_debug);
						$to_debug = "[" . $to_debug . "]";
						break;
			    default:
					break;

			}

			?> <script type="text/javascript">
								var isFirefox = typeof InstallTrigger !== 'undefined';
								var isChrome = !!window.chrome && !!window.chrome.webstore;
								var isOpera = (!!window.opr && !!opr.addons) || !!window.opera || navigator.userAgent.indexOf(' OPR/') >= 0;

								if(isChrome || isFirefox || isOpera)
								{
								  	console.log("%cPHP debug log <?php echo "(".$to_debug.")"; ?>", "background: #ffbb00; font-weight: bold;  color: black");
								}
								else
								{
									console.log("PHP debug log <?php echo "(".$to_debug.")"; ?>");
								}
					</script> <?php
}
