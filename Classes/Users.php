<?php
namespace Classes;

Class Users extends Entity {

//
//    public $post_id;
//    public $body;
//    public $author = 'Unknown';
    public function __construct()
    {   $this->tableName='users';
        parent::__construct();
    }

    public static function getSalt($bytes = 5){
        $bytes = random_bytes($bytes);
        return bin2hex($bytes);
    }


}
?>