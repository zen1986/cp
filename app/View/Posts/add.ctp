<div id="name" class="span10">
    <?php
    echo $this->Form->create('post', array('action'=>'add'));
    ?>
    <span class='label' >Title</span>
    <div clas="span10">
        <input type="text" name="post_title" value="" id="post_title">
    </div>
    <span class='label' >Body</span>
    <div clas="span10">
        <textarea name="post_content" class="body" value="" id="body" rows="20" cols="20"> </textarea>
    </div>
    <span class='label' >Tag</span>
    <div clas="span10">
        <input type="text" name="tag" value="" id="tag"> 
    </div>
    <?php
    echo $this->Form->end('submit');
    ?>
    
</div>
