<?php
/**
 * Created by PhpStorm.
 * User: TuanAnh
 * Date: 9/25/2017
 * Time: 1:15 PM
 */

class database{
    const TABLE = 'tbl_trainee';
    protected $_conn;
    protected $_result;

    public function __construct()
    { // Kết nối database
        $this->_conn = mysqli_connect(config::HOST, config::USER, config::PASS) or die("Can not connect database");
        mysqli_select_db($this->_conn,config::DB_NAME) or die("Database is not exist!");
    }

    public function query($sql)
    {
        $this->_result = mysqli_query($this->_conn,$sql);
        if($this->_result){
            return true;
        }else{
            return false;
        }
    }

    public function num_rows()
    {
        if ($this->_result) {
            $rows = mysqli_num_rows($this->_result);
        } else {
            $rows = 0;
        }
        return $rows;
    }

    /**
     * lấy ra 1 record
     **/
    public function fetch_one(){
        $data = array();
        if ($this->_result) {
            $data = mysqli_fetch_assoc($this->_result);
        }
        return $data;
    }

    public function fetch_all(){
        $data = array();
        if ($this->_result) {
            while ($row = mysqli_fetch_array($this->_result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}