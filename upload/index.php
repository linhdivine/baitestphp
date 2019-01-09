<?php
/**
 * @nprojectname test php
 *@author thien linh
 * @package test php
 *
 */

//đường dẫn thư mục project
define('BASE_PATCH',__DIR__  .'/');

// đường dẫn thư mục template
define('TPL_PATCH', __DIR__.'/template/');


/*
 * import file functions and comfig
 */

require BASE_PATCH .'config.php';
require  BASE_PATCH .'module/modules.php';

/*
  * require phần đầu trang
  */
require TPL_PATCH .'header.php';?>
<main id="main-content" class="container">
					<div class="col-xs-12 col-sm-3 col-md-3">
						<?php require TPL_PATCH .'sidebar.php'?>
					</div>
					<div class="col-xs-12 col-sm-9 col-md-9">
						<?php require TPL_PATCH .'content.php'?>
					</div>
		<div class="clearfix"></div>
	</main>
<?php
/*
 * require phần chân trang
 */
require TPL_PATCH .'footer.php';
