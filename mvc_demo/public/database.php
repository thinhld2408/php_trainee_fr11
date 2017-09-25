<?php

/**
 * Created by PhpStorm.
 * User: smartosc
 * Date: 25/09/2017
 * Time: 10:22
 */
class database
{
    protected $_conn;
    protected $_result;

    public function __construct()
    { // Kết nối database
        $this->_conn = mysqli_connect(config::HOST, config::USER, config::PASS) or die("Can not connect database");
        mysqli_select_db($this->_conn,config::DBNAME) or die("Database is not exist!");
//        mysqli_query("SET NAMES utf8");
    }

    public function library($class)
    {
        require("libraries/" . $class . ".php");
    }

    public function query($sql)
    {
        $this->_result = mysqli_query($this->_conn,$sql);
    }

    public function num_rows()
    {
        if ($this->_result) { // Nếu đã có kết quả trả về của câu truy vấn
            $rows = mysqli_num_rows($this->_result);
        } else {
            $rows = 0;
        }
        return $rows;
    }

    public function fetch()
    { // lấy ra 1 record
        $data = array();
        if ($this->_result) {
            $data = mysqli_fetch_assoc($this->_result);
        }
        return $data;
    }

    public function fetchall()
    { // lấy ra nhiều record
        $data = array();
        if ($this->_result) {
            while ($row = mysqli_fetch_assoc($this->_result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
}
