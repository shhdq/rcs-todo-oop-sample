
<?php

//

class Controler
{
    // props
    private $server = "localhost";
    private $username = "root";
    private $password;
    private $db = "todos";
    private $conn;

    // constructor
    public function __construct()
    {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
        } catch (Exception $e) {
            echo "Failed " . $e->getMessage();
        }
    }
    // - constructor

    // liekam kko iekšā
    public function insert()
    {

        // if checks 
        if (isset($_POST['submit'])) {

            // var
            $name = $_POST['name'];
            $email = $_POST['email'];

            // insert
            $insert = "INSERT INTO records (name, email) VALUES ('$name', '$email')";

            if ($sql = $this->conn->query($insert)) {
                echo "Yey";
            } else {
                echo "Big fail..";
            }
        }
    }
    // - Liekam kko iekšā

    // select
    public function fetch()
    {

        $res = null;
        $select = "SELECT * FROM records";

        if ($sql = $this->conn->query($select)) {
            while ($row = mysqli_fetch_assoc($sql)) {
                $res[] = $row;
            }
        }
        return $res;
    }

    // delete kko
    public function delete($id)
    {
        $delete = "DELETE FROM records WHERE id = '$id'";

        if ($sql = $this->conn->query($delete)) {
            return true;
        } else {
            return false;
        }
    }
}
