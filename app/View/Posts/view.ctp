<?php
if (isset($post)) {
?>

<div class="span10">
<?php echo $this->Session->flash('post');?>
    <div class='page-header'>
        <h1>
        <?php echo $post['Post']['post_title'];?>
        </h1>
    </div>
    <div>
        <?php echo nl2br($post['Post']['post_content']);?>
    </div>
</div>

<?php
}
?>
