<?php foreach($posts as $post):?>
<div class="span10 post">
    <div class='page-header'>
        <h1>
        <?php echo $post['Post']['post_title'];?>
        </h1>
    </div>
    <div>
        <?php echo $post['Post']['post_content'];?>
    </div>
</div>
<?php endforeach;?>
