<?php


class Common
{
  public function uploadData($conn,$weeknum,$department,$daterange,$facultyname,$facultyid)
  {
      $mainQuery = "INSERT INTO  availfaculty SET weeknum='$weeknum',department='$department',daterange='$daterange',facultyid='$facultyid',facultyname='$facultyname',factstat='On Leave'";
      $result1 = $conn->query($mainQuery) or die("Error in main Query".$conn->error);
      return $result1;
  }
}
?>