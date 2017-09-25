<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 9/25/2017
 * Time: 1:15 PM
 */

class model_pagination extends database {
    public $_rowsPerPage = 5;
    public function  totalRecord(){
        $sql = "SELECT * FROM tbl_trainee";
        $this->query($sql);
        $result = $this->num_rows();
        return $result;
    }
    public function getDataPage($perRow){
        $sql = "SELECT * FROM tbl_trainee LIMIT ".$perRow.",".$this->_rowsPerPage."";
        $this->query($sql);
        $result = $this->fetch_all();
        return $result;
    }
    public function totalPage($rows){
        $pageRow = ceil($rows/$this->_rowsPerPage);
        return $pageRow;
    }
    public function currentRow( $page){
        $currentPage = $page*$this->_rowsPerPage - $this->_rowsPerPage;
        return $currentPage;
    }
}