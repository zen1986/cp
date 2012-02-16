<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Zvaya</title>
        <?php //echo $this->Html->css("prettify/prettify");?>
        <?php //echo $this->Html->script("prettify/prettify");?>
        <?php echo $this->Html->css("bootstrap");?>
        <?php echo $this->Html->css("ow");?>
        <style type="text/css" media="screen">
            
            body {
                padding-top: 40px;
        </style>
    </head>

    <body>
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <?php echo $this->Html->link('Zvaya', '/', array('class'=>'brand'));?>
                <ul class="nav">
                    <li <?php if ($this->params['action']=='home') echo "class='active'";?>><?php echo $this->Html->link('Home', '/');?></li>
                    <li <?php if ($this->params['action']=='posts') echo "class='active'";?>><?php echo $this->Html->link('Blog', '/pages/posts');?></li>
                    <li <?php if ($this->params['action']=='photos') echo "class='active'";?>><?php echo $this->Html->link('Photo', '/pages/photos');?></li>
                </ul>
                <ul class="nav pull-right">
                    <?php 
                        if ($this->params['action']!='login') {
                            if (!($this->Session->read('Auth.User'))) {
                                echo "<li>";
                                echo $this->Html->link('Login', '/users/login');
                                echo "</li>";
                            }
                            else {
                                $session = $this->Session->read('Auth.User');
                                echo "<li>";
                                echo $this->Html->link('welcome ' .$session['username'], '', array('class'=>'greeting'));
                                echo "</li>";
                                echo "<li>";
                                echo $this->Html->link('Logout', '/users/logout');
                                echo "</li>";
                            }
                        }
                    ?>
                </ul>
            </div>

        </div>
    </div>
    <div class="container">
        <?php echo $content_for_layout;?>
    </div>
    </body>
</html>
