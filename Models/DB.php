<?php
Class DB{
    
    public function connect()
    {
       $con = mysqli_connect('localhost:8889', 'root', 'root', 'vanarts');

        return $con;
    }

    public static function fetch($sql)
    {
        $oDB = new DB();
        $con = $oDB->connect();

        $results = mysqli_query($con, $sql);
        while($row = mysqli_fetch_assoc($results))
        {
            $data[] = $row;
        }

        return $data;
    }
}