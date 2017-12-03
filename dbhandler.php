<?php
class Database
{

    private  $conn;
    private $rows;
    public function __construct()
    {
        include_once  'dbconnet.php';
        // opening db connection
        $db = new DbConnect();
        $this->conn = $db->connect();
    }

    public function insert($query)
    {
        mysqli_query($this->conn,$query);
    }
    public function select($query)
    {
        $row = mysqli_query($this->conn,$query);
        while($row1=mysqli_fetch_assoc($row))
        {
            $this->rows[] = $row1;
        }
        return $this->rows;
    }
    public function select1($query)
    {

        $row = mysqli_query($this->conn,$query);
        while($row1=mysqli_fetch_row($row))
        {
            $this->rows[] = $row1;
        }
        return $this->rows;

    }
    public function select2($query)
    {
        $row = mysqli_query($this->conn,$query);
        while($row1=mysqli_fetch_row($row))
        {
            $this->rows = $row1;
        }
        return $this->rows;
    }
    public function check_mailid($query)
    {

        $value = mysqli_query($this->conn,$query);
        while($row1=mysqli_fetch_object($value))
        {
            $this->rows = $row1;
        }
        return $this->rows;
    }
    public function __destruct()
    {
        mysqli_close($this->conn);
    }
    public function getuserdata($query)
    {
        $row = mysqli_query($this->conn,$query);
        while($row1=mysqli_fetch_row($row))
        {
            $this->rows[] = $row1;
        }

        return $this->rows;

    }

}
