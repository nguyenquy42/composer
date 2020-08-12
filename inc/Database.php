<?php

    class Database 
    {
        public $connect;
        public function __construct()
        {
            $this->connect = mysql_connect('localhost', 'root', '');
            if(!$this->connect)
            {
                die('kết nối thất bại'.mysql_error());
            }
            else{
                mysql_select_db("learn-php-lpt", $this->connect);
                mysql_set_charset('UTF8');
            }
            
        }

        // function query
        public function query($sql)
        {
            return mysql_query($sql);
        }

        // function lấy dữ liệu
        public function getAll($what,$table)
        {
            $article = $this->query("SELECT {$what} FROM {$table}");
            return $article;
        }

        // function lấy dữ liệu dữ liệu cự thể.
        public function getOne($what,$table,$where)
        {
        $update = $this->query("SELECT {$what} FROM {$table} WHERE {$where}");
            return $update;
        }

        // function thêm dữ liệu
        public function addAll($nametable,$namecol,$namevalue)
        {
            $this->query("INSERT INTO {$nametable} ({$namecol}) VALUES ({$namevalue})");
        }

        // function sửa dữ liệu
        public function upAll($tablename,$setname,$idname)
        {
            $this->query("UPDATE {$tablename} SET {$setname} WHERE id={$idname}");
        }

        // function xóa dữ liêu
        public function delete($tablename,$id)
        {
            $this->query("DELETE FROM {$tablename} WHERE id={$id}");
        }

    }
?>