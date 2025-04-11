<?php
class Book {
    protected $title;
    protected $price;
    protected $page_num;
    protected $author;

    public function get_title () {
        return $this->title;
    }
    public function set_title ( $arg ) {
        $this->title = $arg;
    }
    public function get_price () {
        return $this->price;
    }
    public function set_price ( $arg ) {
        $this->price = $arg;
    }
    public function get_page_num () {
        return $this->page_num;
    }
    public function set_page_num ( $arg ) {
        $this->page_num = $arg;
    }
    public function get_author () {
        return $this->author;
    }
    public function set_author ( $arg ) {
        if ( gettype ( $arg ) === 'array' ) {
            $this->author = $arg;
        } elseif ( gettype ( $arg ) === 'string' ) {
            $newVar = [$arg];
            $this->author = $newVar;
        }
    }
}