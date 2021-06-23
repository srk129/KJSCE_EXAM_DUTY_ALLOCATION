<?php
//verify and login user from gmail
include("config/config.php");
require_once 'vendor/google-api-php-client-2.4.0/vendor/autoload.php';
$client = new Google_Client(['client_id' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$id_token = $_POST['id_token'];
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    if (isset($_POST["id"])) {
        $_SESSION["id"] = $_POST["id"];
        $_SESSION["name"] = $payload["name"];
        $_SESSION["email"] = $payload["email"];
        $_SESSION["imgurl"] = $payload["picture"];

        $sql = "SELECT usertype FROM user WHERE email like '%" . $payload["email"] . "%'";
        $res = mysqli_query($con, $sql);
        $row = $res->fetch_assoc();
        $result = $con->query($sql);
        if ($row["usertype"] == "admin") {
            $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
            $con->query($sql2);
            $usertype = "admin";
            $_SESSION["type"] = "admin";
            echo $usertype;//return value to ajax
        } else if ($row["usertype"] == "Department") {
            $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
//        $sql2 = "UPDATE user SET head_name='" . $payload["name"] . "' WHERE email='" . $payload["email"] . "'";
            $con->query($sql2);
            $sql3 = "UPDATE user SET head_name='" . $payload["name"] . "' WHERE email='" . $payload["email"] . "'";
            $con->query($sql3);
            $sql = "SELECT usertype FROM user WHERE email like '%" . $payload["email"] . "%' AND usertype='Manager'";
            $res = mysqli_query($con, $sql);
            $row = $res->fetch_assoc();
            if (mysqli_num_rows($res) > 0) {
                $usertype = "Manager";
                $_SESSION["type"] = "Manager";
            } else {
                $usertype = "Department";
                $_SESSION["type"] = "Department";
            }
            echo $usertype;//return value to ajax
        } else if ($row["usertype"] == "Manager") {
            $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
            $con->query($sql2);
            $usertype = "Manager";

            $_SESSION["type"] = "Manager";
            echo $usertype;//return value to ajax
        } else {
            if (!empty($result->fetch_assoc())) {
                $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
                $usertype = "User";
                $con->query($sql2);

                $_SESSION["type"] = "User";
                echo $usertype;
            } else {
                $sql2 = "INSERT INTO user (name, email,usertype,imgurl) VALUES ('" . $payload["name"] . "', '" . $payload["email"] . "', 'User','" . $payload["picture"] . "')";
                $usertype = "Firstuser";
                $con->query($sql2);

                $_SESSION["type"] = "User";
                echo $usertype;
            }
        }

    } else {
        header("Location: index.php");
        exit();
    }
} else {

    echo 'outside payload';
//    header("Location: index.php");
//    exit();
}
?>