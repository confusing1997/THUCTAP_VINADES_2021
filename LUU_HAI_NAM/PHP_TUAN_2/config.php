<?php

require_once("new_config.php");

class Database 
{

    public $connection;
    public $db;

    public function __construct()
    {
        $this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if ($this->connection->connect_errno) 
        {

            die("Database connection failed !" . $this->connection->connect_error);

        }

        return $this->connection;
    }

    public function select ($table) {

        $array = array();
        $query = "SELECT * FROM " . $table. "";
        $result = mysqli_query($this->connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {

            $array[] = $row;

        }

        return $array;

    }

    public function selectDetail ($table, $id) {

        $array = array();
        $query = "SELECT * FROM " . $table. " where id = '$id'";
        $result = mysqli_query($this->connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {

            $array[] = $row;

        }

        return $array;

    }

    public function insert ($table, $ma_sinh_vien, $ten_sinh_vien, $ngay_sinh, $gioi_tinh, $dia_chi, $email, $sdt, $cmnd, $mo_ta, $anh_dai_dien) {

        $query = "insert into " . $table . " (ma_sinh_vien, ten_sinh_vien, ngay_sinh, gioi_tinh, dia_chi, email, sdt, cmnd, mo_ta, anh_dai_dien) 
                    values ('".$ma_sinh_vien."', '".$ten_sinh_vien."', '".$ngay_sinh."', '".$gioi_tinh."', '".$dia_chi."', '".$email."', 
                    '".$sdt."' ,'".$cmnd."' ,'".$mo_ta."', '".$anh_dai_dien."')";

        if (mysqli_query($this->connection, $query)) {

            return true;

        }

        else {
            echo mysqli_error($this->connection);
        }
    }


    public function checkData($table, $ma_sinh_vien) {

        $query = "select * from " . $table . " where ma_sinh_vien = '$ma_sinh_vien'";
        $result = mysqli_query($this->connection, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }


    }

    public function checkEmail($table, $email) {

        $query = "select * from " . $table . " where ma_sinh_vien = '$email'";
        $result = mysqli_query($this->connection, $query);
        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return true;
            }
            else{
                return false;
            }
        }
        else{
            return false;
        }


    }

    public function searchData ($table, $name) {


        $array = array();
        $query = "select * from " . $table . " where ten_sinh_vien like '%{$name}%'";
        $result = mysqli_query($this->connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {

            $array[] = $row;

        }

        return $array;

    }

    public function removeData ($table, $id) {

        $query = "delete from " . $table . " where id = '$id'";
        return mysqli_query($this->connection, $query);

    }


    public function editData ($table, $ma_sinh_vien, $ten_sinh_vien, $gioi_tinh, $dia_chi, $email, $sdt, $mo_ta) {

        $query = "update " . $table . " set 
        ten_sinh_vien = '$ten_sinh_vien',
        gioi_tinh = '$gioi_tinh',
        dia_chi = '$dia_chi',
        email = '$email',
        sdt = '$sdt',
        mo_ta = '$mo_ta' where ma_sinh_vien = '$ma_sinh_vien'";
        return mysqli_query($this->connection, $query);

    }


    public function searchDays ($table, $dateStart, $dateEnd)
    {
        $array = array();
        $query = "SELECT * FROM " . $table. " WHERE ngay_sinh >= '$dateStart' and ngay_sinh <= '$dateEnd'";
        $result = mysqli_query($this->connection, $query);
        while ($row = mysqli_fetch_assoc($result)) {

            $array[] = $row;

        }

        return $array;

    }




    


};