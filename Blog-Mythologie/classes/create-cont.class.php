<?php

class addArticleContr extends addArticle {
    protected $author;
    protected $title;
    protected $content;
    protected $img;
    protected $date_time;


    public function __construct($author,$title,$content,$img){
        $this->author = $author;
        $this->title = $title;
        $this->content = $content;
        $this->img = $img;
    }

    public function createNewArticle(){
        $this->createArticle($this->author,$this->title,$this->content,$this->img);
    }
}

?>