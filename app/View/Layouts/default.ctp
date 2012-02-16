<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Zvaya</title>
        <?php //echo $this->Html->css("prettify/prettify");?>
        <?php //echo $this->Html->script("prettify/prettify");?>
        <?php //echo $this->Html->css("bootstrap/bootstrap");?>
        <?php //echo $this->Html->css("ow");?>
        <style type="text/css" media="screen">
            
            body {
                padding-top: 40px;
        </style>
    </head>

    <body onload="prettyPrint()">
    <div class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="brand" href="#">Zvaya</a>
                <ul class="nav">
                <li class="active"><?php echo $this->Html->link('Home', '/');?></li>
                    <li><?php echo $this->Html->link('Blog', '/');?></li>
                    <li><?php echo $this->Html->link('Photo', '/');?></li>
                </ul>
                <?php 
                    if (!($this->Session->read('Auth.User'))):
                        echo $this->Form->create('User', array('action'=>'login'));
                ?>
                        username:<input type="text" name="username"/>
                        password:<input type="password" name="password"/>
                <?php 
                        echo $this->Form->end('submit');
                    else: 
                        echo $this->Html->link('logout', '/users/logout');
                    endif;
                ?>
            </div>
        </div>
    </div>
    <?php echo $this->Session->flash();?>
    <?php echo $content_for_layout;?>
    </body>
</html>
