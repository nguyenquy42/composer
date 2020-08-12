<?php


    class masterdata extends Database
    {
        public function register($table,$colum,$value)
        {
            $this->insert($table,$colum,$value);
        }
    }

?>