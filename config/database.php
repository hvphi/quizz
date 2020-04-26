<?php

/**
 * DATABASE
 * Author: Dzu
 * Mail: dzu6996@gmail.com
 **/

class Database
{
    private $db = '';
    private $sql = '';
    //kết nối cơ sở dữ liệu
    public function __construct1()
    {
        $connect = include ('connect.php');
        try {
            $db = 'pgsql:host='.$connect->host.'; dbname='.$connect->dbname.'';
            $this->db = new PDO($db, $connect->user, $connect->password, $connect->port);
            $this->db->query('set names "utf8"');
            echo "Connect database sucessfully.";
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            die();
        }
    }
    public function __construct()
    {
       if (empty(getenv("DATABASE_URL"))){
        echo '<p>The DB does not exist</p>';
        confirm('Here DB');
        }  
        else 
            {
            try{
                echo '<p>The DB exists</p>';
                echo getenv("dbname");
                $db = parse_url(getenv("DATABASE_URL"));
                $pdo = new PDO("pgsql:" . sprintf(
                "host=ec2-52-86-73-86.compute-1.amazonaws.com;port=5432;user=xrhtawdkutixiy;password=ad7158507b28c11a735b450ac97254e73123c7072384e28f91ae15e4aa2b9126;dbname=ddv4b722v89l0p",
                $db["host"],
                $db["port"],
                $db["user"],
                $db["pass"],
                ltrim($db["path"], "/")));
            } catch (PDOException $e) {
               echo $e->getMessage();
        }
            }  
    }
    public function set_query($sql)
    {
        $this->sql = $sql;
    }
    // hàm thực hiện câu lệnh SQL và trả về 1 mảng đối tượng có các thuộc tính là key
    public function load_rows()
    {
        try {
            $query = $this->db->prepare($this->sql);
            $query->setFetchMode(PDO::FETCH_OBJ);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $query->fetchAll();
    }
    // hàm thực hiện câu lệnh SQL và trả về 1 đối tượng có các thuộc tính là key
    public function load_row()
    {
        try {
            $query = $this->db->prepare($this->sql);
            $query->setFetchMode(PDO::FETCH_OBJ);
            $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $query->fetch();
    }
    //thực thi insert hoặc update và return true false
    public function execute_return_status()
    {
        try {
            $query = $this->db->prepare($this->sql);
            $query->setFetchMode(PDO::FETCH_OBJ);
            $status = $query->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $status;
    }
}
