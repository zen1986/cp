<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <title>Zvaya</title>
        <?php //echo $this->Html->css("prettify/prettify");?>
        <?php //echo $this->Html->script("prettify/prettify");?>
        <?php echo $this->Html->css("bootstrap/bootstrap");?>
        <?php echo $this->Html->css("ow");?>
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
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Photo</a></li>
                </ul>
<?php echo $this->Form->create('User', array('action'=>'login'));?>
                    username:<input type="text" name="username"/>
                    password:<input type="password" name="password"/>
                    <input type="hidden" name="action" value=<?php echo $this->params['action'];?> />
                    <input type="hidden" name="controller" value=<?php echo $this->params['controller'];?> />
<?php echo $this->Form->end('submit');?>
            </div>
            
        </div>
        
    </div>
    <?php echo $content_for_layout;?>
    </body>
</html>
