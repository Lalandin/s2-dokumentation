<?php
/**
 * Class Book
 * 
 * Book object for registering book properties
 * 
 * @property string $title
 * @property float $price
 * @property int $page_num
 * @property string $author
 * 
 * @method string get_title()
 * @method string set_title()
 * @method float get_price()
 * @method float set_price()
 * @method int get_page_num()
 * @method int set_page_num()
 * @method string get_author()
 * @method string set_author()
 */
class Book {
    /**
     * Title of Book
     *
     * @var string $title
     */
    protected $title;

    /**
     * Price of Book
     *
     * @var float $price
     */
    protected $price;

    /**
     * Page number of Book
     *
     * @var int $page_num
     */
    protected $page_num;

    /**
     * Author of Book
     *
     * @var string $author
     */
    protected $author;

    /**
     * Returns title of Book
     *
     * @return string
     * 
     */
    public function get_title () {
        return $this->title;
    }

    /**
     * Sets title of Book
     *
     * @param string $arg
     * @return void
     */
    public function set_title ( $arg ) {
        $this->title = $arg;
    }

    /**
     * Returns price of Book
     *
     * @return float
     */
    public function get_price () {
        return $this->price;
    }

    /**
     * Sets price of Book
     *
     * @param float $arg
     * @return void
     */
    public function set_price ( $arg ) {
        $this->price = $arg;
    }

    /**
     * Returns page number of Book
     *
     * @return int
     */
    public function get_page_num () {
        return $this->page_num;
    }

    /**
     * Sets page number of Book
     *
     * @param int $arg
     * @return void
     */
    public function set_page_num ( $arg ) {
        $this->page_num = $arg;
    }

    /**
     * Returns author of Book
     *
     * @return string
     */
    public function get_author () {
        return $this->author;
    }

    /**
     * Undocumented function
     *
     * @param array|string $arg
     * @return void
     */
    public function set_author ( $arg ) {
        if ( gettype ( $arg ) === 'array' ) {
            $this->author = $arg;
        } elseif ( gettype ( $arg ) === 'string' ) {
            $newVar = [$arg];
            $this->author = $newVar;
        }
    }
}