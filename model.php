<?php  
    // session_start();
    function connect_DB() {
        $dsn = 'mysql:host=localhost;dbname=homestay'; 
        $userAd = 'root'; 
        $passAd = ''; 
        // creates PDO object 
        try {
        $db = new PDO($dsn, $userAd, $passAd);
        }
        catch (PDOException $e) {
            $messageError = $e->getMessage();
            // include('login.php');
            exit();
        }
        return $db;
    }

    function insertLocation($name) {
        $db = connect_DB();
        $query = "INSERT INTO `location`(`name`) VALUES (:name)";
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':name', $name);
            $result = $statement->execute();
            $statement->closeCursor();
            return $result;
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }
    function selectLocation() {
        $db = connect_DB();
        $query = "SELECT * FROM location";
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }
    function getLocateByProId($id_homestay) {
        $db = connect_DB();
        $query = "SELECT * FROM homestay WHERE (id_homestay = :id_homestay)";
        $statement = $db->prepare($query);
        $statement->bindValue(':id_homestay', $id_homestay);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }

    function insertUser($fullname, $password, $email, $phone) {
        $db = connect_DB();
        $query = "INSERT INTO `users`(`fullname`, `password`, `email`, `phone_number`) VALUES (:fullname, :password, :email, :phone)";
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':fullname', $fullname);
            $statement->bindValue(':password', $password);
            $statement->bindValue(':email', $email);
            $statement->bindValue(':phone', $phone);
            $result = $statement->execute();
            $statement->closeCursor();
            return $result;
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    function selectUser() {
        $db = connect_DB();
        $query = "SELECT * FROM users";
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }

    //select 1 hàng
    function executeSingle($sql){
        $conn = mysqli_connect('localhost', 'root', '', 'homestay');    
        $resultset = mysqli_query($conn, $sql); 
        $row = mysqli_fetch_array($resultset, 1);
        mysqli_close($conn);
        return $row;
    }

    function deleteLocationByID($id_location){
        $db = connect_DB();
        $query = "DELETE FROM location WHERE id_location=$id_location";
        $statement = $db->prepare($query);
        $statement->bindValue(':id_location', $id_location);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }

?>
