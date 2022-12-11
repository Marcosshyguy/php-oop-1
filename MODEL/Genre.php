<?php
class Genre
{
    public $first_genre;
    public $second_genre;
    public $third_genre;
    public $fourth_genre;

    function __construct($first_genre, $second_genre = '', $third_genre = '', $fourth_genre = '')
    {
        $this->first_genre = $first_genre;
        $this->second_genre = $second_genre;
        $this->third_genre = $third_genre;
        $this->fourth_genre = $fourth_genre;
    }
}
