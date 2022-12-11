<?php

require_once __DIR__ . "./Genre.php";
class Movie
{
    public $title;
    public $genres;
    public $director_name;
    public $realese_date;
    public $plot;
    public $main_actor_actress;
    private $box_office_gross = 0;

    function __construct(string $title, Genre $genres, string $director_name, string $realese_date, string $plot = '')
    {
        $this->title = $title;
        $this->genres = $genres;
        $this->director_name = $director_name;
        $this->realese_date = $realese_date;
        $this->plot = $plot;
    }

    public function get_box_office_gross()
    {
        return $this->box_office_gross . '$';
    }
};
