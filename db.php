
<?php
class Movie{
    public $title;
    public $author;
    public $year;
    public $language;

    function __construct(string $_title, string $_author, int $_year, string $_language)
    {
        $this->title=$_title;
        $this->author=$_author;
        $this->year=$_year;
        $this->language=$_language;
    }

    public function getDescription(){
        return $this->title.'<br>  di '.$this->author.'<br>Anno '.$this->year . ' <br> Lingua:'.$this->language ;
    }
}