<?php
//namespace DoctrineWrapper\Entity;

/** 
 * @Entity
 * @Table(name="wp_posts") 
 * */
class MyPost
{
    /**
     * @Id @Column(type="integer")
     * @GeneratedValue
     */
    private $ID;

    /** 
     * @ManyToOne(targetEntity="MyUser", cascade={"persist"}) 
     * @JoinColumn(name="post_author", referencedColumnName="ID")
     * */
    private $author;

    public function getAuthor() {
    	return $this->author;
    }

    public function setAuthor(MyUser $author) {
    	$this->author = $author;
    }

    /** @Column(type="datetime") */
    private $post_date;

    /** @Column(type="datetime") */
    private $post_date_gmt;

    /** @Column(type="string") */
    private $post_content;

    /** @Column(type="string") */
    private $post_title;

    /** @Column(type="string") */
    private $post_excerpt;

    /** @Column(type="string") */
    private $post_status;

    /** @Column(type="string") */
    private $comment_status;

    /** @Column(type="string") */
    private $ping_status;

    /** @Column(type="string") */
    private $post_password;

    /** @Column(type="string") */
    private $post_name;

    /** @Column(type="string") */
    private $to_ping;

    /** @Column(type="string") */
    private $pinged;    

    /** @Column(type="datetime") */
    private $post_modified;

    /** @Column(type="datetime") */
    private $post_modified_gmt;

    /** @Column(type="string") */
    private $post_content_filtered;

    /** @Column(type="integer") */
    private $post_parent;

    /** @Column(type="string") */
    private $guid;

    /** @Column(type="integer") */
    private $menu_order;

    /** @Column(type="string") */
    private $post_type;

    /** @Column(type="string") */
    private $post_mime_type;

    /** @Column(type="integer") */
    private $comment_count;


    public function __construct($title = "") {
    	$this->post_title = $title;
    	$this->post_content = "";
    	$this->post_excerpt = "";
    	$this->post_date = new \DateTime('now');
    	$this->post_date_gmt = new \DateTime('now');
    	$this->post_modified = new \DateTime('now');
    	$this->post_modified_gmt = new \DateTime('now');
    	$this->post_status = "publish";
    	$this->comment_status = "open";
    	$this->ping_status = "open";
    	$this->post_password = "";
    	$this->post_name = "";
    	$this->to_ping = "";
    	$this->pinged = "";
    	$this->post_content_filtered = "";
    	$this->post_parent = 0;
    	$this->guid = "";
    	$this->menu_order = 0;
    	$this->post_type = "post";
    	$this->post_mime_type = "";
    	$this->comment_count = 0;
    }

    /**
     * Gets the value of ID.
     *
     * @return mixed
     */
    public function getID()
    {
        return $this->ID;
    }

    /**
     * Gets the value of post_date.
     *
     * @return mixed
     */
    public function getPostDate()
    {
        return $this->post_date;
    }

    /**
     * Gets the value of post_date_gmt.
     *
     * @return mixed
     */
    public function getPostDateGmt()
    {
        return $this->post_date_gmt;
    }

    /**
     * Gets the value of post_content.
     *
     * @return mixed
     */
    public function getPostContent()
    {
        return $this->post_content;
    }

    /**
     * Gets the value of post_title.
     *
     * @return mixed
     */
    public function getPostTitle()
    {
        return $this->post_title;
    }

    /**
     * Sets the value of post_title.
     *
     * @return self
     */
    public function setPostTitle($title)
    {
        $this->post_title = $title;
        return $this;
    }

    /**
     * Gets the value of post_excerpt.
     *
     * @return mixed
     */
    public function getPostExcerpt()
    {
        return $this->post_excerpt;
    }

    /**
     * Gets the value of post_status.
     *
     * @return mixed
     */
    public function getPostStatus()
    {
        return $this->post_status;
    }

    /**
     * Sets the value of post_status.
     *
     * @return self
     */
    public function setPostStatus($status)
    {
        $this->post_status = $status;
        return $this;
    }

    /**
     * Gets the value of comment_status.
     *
     * @return mixed
     */
    public function getCommentStatus()
    {
        return $this->comment_status;
    }

    /**
     * Gets the value of ping_status.
     *
     * @return mixed
     */
    public function getPingStatus()
    {
        return $this->ping_status;
    }

    /**
     * Gets the value of post_password.
     *
     * @return mixed
     */
    public function getPostPassword()
    {
        return $this->post_password;
    }

    /**
     * Gets the value of post_name.
     *
     * @return mixed
     */
    public function getPostName()
    {
        return $this->post_name;
    }

    /**
     * Gets the value of to_ping.
     *
     * @return mixed
     */
    public function getToPing()
    {
        return $this->to_ping;
    }

    /**
     * Gets the value of pinged.
     *
     * @return mixed
     */
    public function getPinged()
    {
        return $this->pinged;
    }

    /**
     * Gets the value of post_modified.
     *
     * @return mixed
     */
    public function getPostModified()
    {
        return $this->post_modified;
    }

    /**
     * Gets the value of post_modified_gmt.
     *
     * @return mixed
     */
    public function getPostModifiedGmt()
    {
        return $this->post_modified_gmt;
    }

    /**
     * Gets the value of post_content_filtered.
     *
     * @return mixed
     */
    public function getPostContentFiltered()
    {
        return $this->post_content_filtered;
    }

    /**
     * Gets the value of post_parent.
     *
     * @return mixed
     */
    public function getPostParent()
    {
        return $this->post_parent;
    }

    /**
     * Gets the value of guid.
     *
     * @return mixed
     */
    public function getGuid()
    {
        return $this->guid;
    }

    /**
     * Gets the value of menu_order.
     *
     * @return mixed
     */
    public function getMenuOrder()
    {
        return $this->menu_order;
    }

    /**
     * Gets the value of post_type.
     *
     * @return mixed
     */
    public function getPostType()
    {
        return $this->post_type;
    }

    /**
     * Gets the value of post_mime_type.
     *
     * @return mixed
     */
    public function getPostMimeType()
    {
        return $this->post_mime_type;
    }

    /**
     * Gets the value of comment_count.
     *
     * @return mixed
     */
    public function getCommentCount()
    {
        return $this->comment_count;
    }
};
