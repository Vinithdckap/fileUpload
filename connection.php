
<?php

class data
{
    public  $db;
    public function __construct()
    {
        try {
            $this->db = new PDO
            (
                'mysql:host=127.0.0.1;dbname=fileUpload',
                'admin',
                'welcome'
            );

        }
        catch (Exception $e){
            die("no connection found".$e->getMessage());
        }
    }

    public function query($query)
    {
        $statement = $this->db->prepare($query);
        $statement->execute();

        return $statement;
    }
}