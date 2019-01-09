<?php
/*
 * kiểm tra user có tồn tại hay không
 * */

isset($_GET['user']) ? $user = $_GET['user']: $user ='';
?>
<article class="content">
        <div class="wrapper-search">
            <form method="post">
                <input type="text" name="search" placeholder="tìm kiếm..." class="form-control" id="form-search">
            </form>
        </div>
    <?php
        switch ($user){
            case  'insert':
                require TPL_PATCH.'user/insert.php';
                require TPL_PATCH.'user/list.php';
                break;
            case 'update':
                    require TPL_PATCH.'user/edit.php';
                require TPL_PATCH.'user/list.php';
                break;
            case 'delete':
                require TPL_PATCH.'user/delete.php';
                break;
            default :
                require TPL_PATCH.'user/list.php';
                break;
        }
    ?>
    <div class="clearfix"></div>
</article>