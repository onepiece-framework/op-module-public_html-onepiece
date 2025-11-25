<?php
/**	op-module-public_html-onepiece:/content/mypage/index.php
 *
 * @created   2025-11-25
 * @version   1.0
 * @package   op-module-public_html-onepiece
 * @author    Tomoaki Nagahara
 * @copyright Tomoaki Nagahara All rights reserved.
 */

/**	Declare strict type
 *
 */
declare(strict_types=1);

/**	Namespace
 *
 */
namespace OP;

//	...
if(!OP()->Unit('Login')->isLoggedin() ){
	OP()->Html('Please log in.');
	return;
}

//	...
OP()->Template('index.phtml');
