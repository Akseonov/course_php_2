<?php


namespace app\models;


class Review extends Models
{
    private $review = [];

    public function getReview($id)
    {
        return $this->review = $this->getOne($id);
    }

    protected function getTableName()
    {
        return 'review';
    }
}