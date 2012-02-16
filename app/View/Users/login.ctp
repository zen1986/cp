<div class="span10 " id="name">
    <div  class="page-header">
    <h1>Login</h1>
    </div>
<?php 
$login_url = Router::url(array('controller'=>'users', 'action'=>'login'));
?>
        <?php echo $this->Session->flash('auth');?>
<form action=<?php echo $login_url;?> method='post'>
<div class='row'>
    <div class='span2'>User Name:</div><div class='span8'><input type="text" name="username"/></div>
    <div class='span2'>Password:</div><div class='span8'><input type="password" name="password"/></div>
    <div class='span2 offset2'><input class='btn' type='submit' value='submit'/></div>
</div>
</form>
