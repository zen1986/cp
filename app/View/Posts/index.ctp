<div class='span10'>
    <?php echo $this->Session->flash('post');?>
    <table class='table'>
        <thead>
            <tr>
                <th><?php echo $this->Paginator->sort('post_title', 'Title');?></th>
                <th><?php echo $this->Paginator->sort('created', 'Created');?></th>
                <th><?php echo $this->Paginator->sort('post_status', 'Status');?></th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
            <tr>
                <td>
                    <?php echo $post['Post']['post_title'];?>
                </td>
                <td>
                    <?php echo $post['Post']['created'];?>
                </td>
                <td>
                    <?php echo $post['Post']['post_status'];?>
                </td>
                <td>
<?php echo $this->Html->link('edit', '/posts/edit/'.$post['Post']['ID'], array('class'=>'btn btn-primary'));?>
<?php echo $this->Html->link('delete','/posts/delete/'.$post['Post']['ID'], array('onclick'=>'return _confirm();','class'=>'btn btn-primary'));?>
<?php echo $this->Html->link('view', '/posts/view/'.$post['Post']['ID'], array('class'=>'btn btn-primary'));?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>

    </table>
    <?php

    $options = array(
        'modulus'=>4,
    );
    //echo "<div class='pagination'><ul>";
    echo $this->Paginator->numbers($options);
    //echo "</ul></div>";
    echo $this->Html->link('New Post', '/posts/add', array('class'=>'pull-right'));
    ?>
</div>
<script type="text/javascript" charset="utf-8">

function _confirm() {
    return confirm("Are you sure to delete it");
}
</script>
