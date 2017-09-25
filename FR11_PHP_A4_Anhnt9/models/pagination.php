<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 9/25/2017
 * Time: 1:15 PM
 */

class model_pagination extends database {
    public function  totalRecord(){
        $sql = "SELECT * FROM tbl_trainee";
        $this->query($sql);
        $result = $this->num_rows();
        return $result;
    }
    public function getDataPage($perRow){
        $rowsPerPage = 5;
        $sql = "SELECT * FROM tbl_trainee LIMIT ".$perRow.",".$rowsPerPage."";
        $this->query($sql);
        $result = $this->fetch_all();
        return $result;
    }
    public function totalPage($rows){
        $rowsPerPage = 5;
        $pageRow = ceil($rows/$rowsPerPage);
        return $pageRow;
    }
    public function currentRow( $page){
        $rowsPerPage = 5;
        $currentPage = $page*$rowsPerPage - $rowsPerPage;
        return $currentPage;
    }
}