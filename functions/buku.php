<?php
namespace mm;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Buku extends Master{
    public $judul;
    
    const PAGE_LIMIT = 90;
    /**
     * untuk membuat data baru
     * @return type
     */
    public static function getData(){
        return Master::PAGE_LIMIT;
    }
}