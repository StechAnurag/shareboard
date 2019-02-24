<?php
/**
 * Share Model to show data from db on Sharesepage
 */
class ShareModel extends Model
{
    /**
     * summary
     */
    public function Index()
    {
        $this->query("SELECT * FROM shares ORDER BY created_at DESC");
        $rows = $this->resultSet();
        return $rows;
    }
    public function addshare()
    {	
    	// sanitize input
    	$post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

    	if ($post['submit']) {
    		$this->query('INSERT INTO shares (title, body, link, user_id) VALUES (:title, :body, :link, :user_id)');
    		$this->bind(':title', $post['title']);
    		$this->bind(':body', $post['body']);
    		$this->bind(':link', $post['link']);
    		$this->bind(':user_id', 1);

    		$this->execute();

    		// check successfull insertion
    		if ($this->lastInsertId()) {
    			header('Location: '.ROOT_URL.'shares');
    		}
    	}
    	return;
    }
}