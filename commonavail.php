<?php
/**
 * Created by PhpStorm.
 * User: kc
 * Date: 11/29/2018
 * Time: 7:50 PM
 */

class Common
{
  public function uploadData($conn,$weeknum,$department,$daterange,$facultyid,$facultyname)
  {
      $mainQuery = "INSERT INTO availfaculty SET weeknum='$weeknum',department='$department',daterange='$daterange',facultyid='$facultyid',facultyname='$facultyname',factstat='Available'";
      $result1 = $conn->query($mainQuery) or die("Error in main Query".$conn->error);
      return $result1;
  }
}
?>