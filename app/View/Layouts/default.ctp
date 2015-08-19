<?php
/**

 *
 * @copyright     Ivin Polo Sony
 */
$cakeDescription = __d('cake_dev', 'Product Promotion And Review System');
?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        <title>
            <?php echo $cakeDescription ?>:
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');

        echo $this->Html->css('main');

        echo $this->fetch('meta');
        echo $this->fetch('css');
        echo $this->fetch('script');
        ?>
    </head>
    <body>
        <div id="container">
            <div id="header">
                <img src="../img/cake.icon.png" ><h1 id="ppr_header"><?php echo 'PRODUCT PROMOTION AND REVIEW ';
        ?>
                </h1>
                <div id="header_tab" style="text-align: right">

                    <!--                        LOGGED IN USER TAB -->
                    <?php if ($logged_in) { ?>
                        Welcome <?php echo $current_user['email']; ?> <?php echo $this->Html->link('Logout', array('controller' => 'users', 'action' => 'logout')); ?>
                    <?php } else { ?>
                        <?php echo $this->Html->link('Login', array('controller' => 'users', 'action' => 'login')); ?>
                    <?php } ?>

                </div> 
            </div>
            <div id="content">


                <?php echo $this->Session->flash(); ?>
                <?php echo $this->Session->flash('auth'); ?>
             
                                    
                <?php echo $this->fetch('content'); ?>
            </div>
            <div id="footer">

            </div>
        </div>
        <?php //echo $this->element('sql_dump'); ?>
    </body>
</html>
