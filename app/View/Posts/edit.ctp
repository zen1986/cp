<div id="name" class="span10">
    <?php
    $data = $this->request->data;
    echo $this->Form->create('post', array('action'=>'edit'));
    ?>
    <span class='label' >Title</span>
    <div clas="span10">
    <input type="text" name="post_title" value="<?php echo $data['post_title'];?>" id="post_title">
    </div>
    <span class='label' >Body</span>
    <div clas="span10">
        <textarea name="post_content" class="body" id="body" rows="20" cols="20"><?php echo nl2br($data['post_content']);?> </textarea>
    </div>
    <span class='label' >Tag</span>
    <div clas="span10">
        <input type="text" name="tag" value="" id="tag"> 
    </div>
    <input type="hidden" name="id" value="<?php echo $data['ID'];?>"> 
    <?php
    echo $this->Form->end('submit');
    ?>
    
</div>
