<?php

class myMenu{

    private static $instance;

    /**
     * Main Instance
     *
     * @staticvar   array   $instance
     * @return      The one true instance
     */
    public static function instance() {
        if ( ! isset( self::$instance ) ) {
            self::$instance = new self;
            self::$instance->addMyAdminMenu();
        }
        return self::$instance;
    }

    public function addMyAdminMenu() {

        add_menu_page(
            'My Page Title',
            'My Page',
            'read',
            'my-menu',
            array(
                $this,
                'myAdminPage'
            )
//            'to/icon/file.svg',
//            '2.1'
        );
        add_submenu_page('my-menu', __('My SubMenu Page'), __('My SubMenu'), 'edit_themes', 'my-menu&id=1', array($this,'my_submenu_render'));
    }

    public function myAdminPage() {
        if($_POST){
            echo 'YES';
            die;
        }
        if($_GET['id'] == 1){
            echo 'ok';
            require_once(SP_DIR . "/view/mydemo.php");			//misc functions used by the plugin
        }

        if($_POST){
            echo 'YES';
        }



        ?>

        <div class="wrap">
            <h2>老杨简介</h2>
            以下是简介内容……此处省略一万字……
        </div>
<?php
    }
    function my_submenu_render() {
        global $title;
        ?>
        <h2><?php echo $title;?></h2>
        My New Menu Page!!
    <?php
    }

}

//$MyMenuSetterUpper = myMenu::instance();

//function YAL_menu_page() {
//    add_menu_page( 'YangJunwei插件列表', 'YANG', 'administrator', 'yangjunwei.com', 'yangjunwei_intro' );
//    add_submenu_page( 'yangjunwei.com', 'Yangjunwei插件开发', '老杨简介', 'administrator', 'yangjunwei.com', 'yangjunwei_intro' );//修改与顶级菜单同名子菜单，由“YANG”修改为“老杨简介”
//    add_submenu_page( 'yangjunwei.com', 'Yang_Ajax_login 弹窗登录', 'AJAX 弹窗登录', 'administrator', 'Yang_Ajax_login', 'YAL_options' );
//}
//function yangjunwei_intro() {
//    echo 99;
//}
//

// Call the class and add the menus automatically.

?>
