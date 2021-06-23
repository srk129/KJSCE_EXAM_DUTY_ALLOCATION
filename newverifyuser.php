<?php
//verify and login user from gmail
session_start();
include("Datasource.php");
require_once 'vendor/autoload.php';//dev change this source of autoload accordingly 
$CLIENT_ID='';
$client = new Google_Client(['865616245796-mbudbceubjgmifnf7iq610mp4d0det0t.apps.googleusercontent.com' => $CLIENT_ID]);  // Specify the CLIENT_ID of the app that accesses the backend
$id_token = $_POST['id_token'];
$payload = $client->verifyIdToken($id_token);
if ($payload) {
    if (isset($_POST["id"])) {
        $_SESSION["id"] = $_POST["id"];
        $_SESSION["name"] = $payload["name"];
        $_SESSION["email"] = $payload["email"];
        $_SESSION["imgurl"] = $payload["picture"];

        $sql = "SELECT usertype FROM user WHERE email like '%" . $payload["email"] . "%'";
        $res = mysqli_query($conn, $sql);
        $row = $res->fetch_assoc();
        $result = $conn->query($sql);
        if ($row["usertype"] == "admin") {
            $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
            $conn->query($sql2);
            $usertype = "admin";
            $_SESSION["type"] = "admin";
            echo $usertype;//return value to ajax
        } /*else if ($row["usertype"] == "Department") {
            $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
//        $sql2 = "UPDATE user SET head_name='" . $payload["name"] . "' WHERE email='" . $payload["email"] . "'";
            $conn->query($sql2);
            $sql3 = "UPDATE user SET head_name='" . $payload["name"] . "' WHERE email='" . $payload["email"] . "'";
            $conn->query($sql3);
            $sql = "SELECT usertype FROM user WHERE email like '%" . $payload["email"] . "%' AND usertype='Manager'";
            $res = mysqli_query($conn, $sql);
            $row = $res->fetch_assoc();
            if (mysqli_num_rows($res) > 0) {
                $usertype = "Manager";
                $_SESSION["type"] = "Manager";
            } else {
                $usertype = "Department";
                $_SESSION["type"] = "Department";
            }
            echo $usertype;//return value to ajax
        }*/ else if ($row["usertype"] == "manager") {
            $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
            $conn->query($sql2);
            $usertype = "manager";

            $_SESSION["type"] = "manager";
            echo $usertype;//return value to ajax
        }else if ($row["usertype"] == "faculty") {
            $sql3 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
            $conn->query($sql3);
            $usertype = "faculty";

            $_SESSION["type"] = "faculty";
            echo $usertype;//return value to ajax
        }else {
            if (!empty($result->fetch_assoc())) {
                $sql2 = "UPDATE user SET imgurl='" . $payload["picture"] . "' WHERE email='" . $payload["email"] . "'";
                $usertype = "User";
                $conn->query($sql2);

                $_SESSION["type"] = "User";
                echo $usertype;
            } else {
                $sql2 = "INSERT INTO user (name, email,usertype,imgurl) VALUES ('" . $payload["name"] . "', '" . $payload["email"] . "', 'User','" . $payload["picture"] . "')";
                $usertype = "Firstuser";
                $conn->query($sql2);

                $_SESSION["type"] = "User";
                echo $usertype;
            }
        }

    } else {
        header("Location: home.php");
        exit();
    }
} else {

    echo 'outside payload';
//    header("Location: index.php");
//    exit();
}
?>