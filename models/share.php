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
        $this->query("SELECT * FROM shares");
        $rows = $this->resultSet();
        return $rows;
    }
}