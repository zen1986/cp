<?php
if (isset($post)) {
?>

<div class="span10">
    <div class='page-header'>
        <h1>
        <?php echo $post['Post']['post_title'];?>
        </h1>
    </div>
    <div>
        <?php echo $post['Post']['post_content'];?>
    </div>
</div>





<?php
}
?>
