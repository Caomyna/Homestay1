<?php  
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

    function getLocateIdByName($name) {
        $db = connect_DB();
        $query = "SELECT * FROM location WHERE (name= :name)";
        $statement = $db->prepare($query);
        $statement->bindValue(':name', $name);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result[0]['id_location'];
    }

    function getLocateByProId($location_id) {
        $db = connect_DB();
        $query = "SELECT * FROM homestay WHERE (location_id= :location_id)";
        $statement = $db->prepare($query);
        $statement->bindValue(':location_id', $location_id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }

    function deleteLocateByProId($id_homestay) {
        $db = connect_DB();
        $query = "DELETE FROM homestay WHERE (id_homestay = :id_homestay)";
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

    function deleteUserByID($userId) {
        $db = connect_DB();
        $query = "DELETE FROM users WHERE (id_users = :id_users)";
        $statement = $db->prepare($query);
        $statement->bindValue(':id_users', $userId);
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

    // homestay
    function getHomeStayById($id) {
        $db = connect_DB();
        $query = "SELECT * FROM homestay WHERE (id_homestay= :id_homestay)";
        $statement = $db->prepare($query);
        $statement->bindValue(':id_homestay', $id);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }
    function deleteHomeStayById($id_homestay) {
        $db = connect_DB();
        $query = "DELETE FROM homestay WHERE (id_homestay = :id_homestay)";
        $statement = $db->prepare($query);
        $statement->bindValue(':id_homestay', $id_homestay);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        // header("Location: index.php?page=location_list.php");
        // return '<script type="text/javascript">alert("Successful!")</script>';
        return $result;
        // location.reload();
    }

    function insertHomestay($proId, $locateName, $locateImg, $locateAddress, $locateDes, $locatePrice) {
        $db = connect_DB();
        $query = "INSERT INTO homestay(location_id, homestay_name, images, address, descript, price) VALUES (:proId, :locateName, :locateImg, :locateAddress, :locateDescription, :locatePrice)";
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':proId', $proId);
            $statement->bindValue(':locateName', $locateName);
            $statement->bindValue(':locateImg', $locateImg);
            $statement->bindValue(':locateAddress', $locateAddress);
            $statement->bindValue(':locateDescription', $locateDes);
            $statement->bindValue(':locatePrice', $locatePrice);
            $result = $statement->execute();
            $statement->closeCursor();
            return $result;
        } catch(Exception $e) {
            return $e->getMessage();
        }
    }

    function updateHomestay($id, $proId, $locateName, $locateImg, $locateAddress, $locateDes, $locatePrice) {
        $db = connect_DB();
        $query = "UPDATE homestay SET location_id = :proId, homestay_name = :locateName, images = :locateImg, address = :locateAddress, descript = :locateDescription, price = :locatePrice WHERE id_homestay = :id_homestay";
        try {
            $statement = $db->prepare($query);
            $statement->bindValue(':proId', $proId);
            $statement->bindValue(':locateName', $locateName);
            $statement->bindValue(':locateImg', $locateImg);
            $statement->bindValue(':locateAddress', $locateAddress);
            $statement->bindValue(':locateDescription', $locateDes);
            $statement->bindValue(':locatePrice', $locatePrice);
            $statement->bindValue(':id_homestay', $id);
            $result = $statement->execute();
            $statement->closeCursor();
            return $result;
        } catch(Exception $e) {
            return $e->getMessage();
        }
    } 

    function getHomestay() {
        $db = connect_DB();
        $query = "SELECT *, location.name FROM homestay LEFT OUTER JOIN location ON homestay.location_id = location.id_location";
        $statement = $db->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $statement->closeCursor();
        return $result;
    }

?>
