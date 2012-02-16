<?php

class PostsController extends AppController {
    public function index() {
        $user = $this->Auth->user();
        $uid = $user['id'];
        $this->paginate = array(
            'limit' => 10,
            'order' => array(
                'Post.created'=>'asc'
            ),
            'conditions'=>array('Post.post_author'=>$uid)
        );
        $posts = $this->paginate('Post');
        $this->set('posts', $posts);
    }
    public function view($id) {
        if ($id) {
            $post = $this->Post->find('first', array('conditions'=>array('Post.ID'=>$id)));
            $this->set('post', $post);
        } 
    }
}
