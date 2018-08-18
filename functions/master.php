<?php
namespace rpl;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Master{
    public $created_at, $updated_at;
    const PAGE_LIMIT = 30;
    
       
    public static function getData(){
//        return[
//            'satu' => 'buku sejarah',
//            'dua' => 'buku ekonomi',
//            'tiga' => 'buku hukum',
//        ];
        return self::PAGE_LIMIT;
    }
    
    public function Test($offset){
        $query = mysql_query(" SELCT FROM `select` LIMIT 0, ".self::PAGE_LIMIT."");
    }
}