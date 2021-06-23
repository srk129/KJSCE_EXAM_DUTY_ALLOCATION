<?php

//fetch.php

include ('Datasource.php');

$column = array('Eid', 'Fid', 'Exam_date', 'Exam_time', 'Exam_slot', 'room_num', 'report_time');

$query = "SELECT * FROM final_alloc";

if(isset($_POST['search']['value']))
{
 $query .= '
 WHERE Eid LIKE "%'.$_POST['search']['value'].'%" 
 OR Fid LIKE "%'.$_POST['search']['value'].'%" 
 OR Exam_date LIKE "%'.$_POST['search']['value'].'%" 
 OR Exam_time LIKE "%'.$_POST['search']['value'].'%" 
 OR Exam_slot LIKE "%'.$_POST['search']['value'].'%" 
 OR room_num LIKE "%'.$_POST['search']['value'].'%" 
 OR report_time LIKE "%'.$_POST['search']['value'].'%" 
 ';
}

if(isset($_POST['order']))
{
 $query .= 'ORDER BY '.$column[$_POST['order']['0']['column']].' '.$_POST['order']['0']['dir'].' ';
}
else
{
 $query .= 'ORDER BY Eid DESC ';
}

$query1 = '';

if($_POST['length'] != -1)
{
 $query1 = 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
}

$statement = $conn->prepare($query);

$statement->execute();

$number_filter_row = $statement->rowCount();

$statement = $conn->prepare($query . $query1);

$statement->execute();

$result = $statement->fetchAll();

$data = array();

foreach($result as $row)
{
 $sub_array = array();
 $sub_array[] = $row['Eid'];
 $sub_array[] = $row['Fid'];
 $sub_array[] = $row['Exam_date'];
 $sub_array[] = $row['Exam_time'];
 $sub_array[] = $row['Exam_slot'];
 $sub_array[] = $row['room_num'];
 $sub_array[] = $row['report_time'];
 $data[] = $sub_array;
}

function count_all_data($conn)
{
 $query = "SELECT * FROM final_alloc";
 $statement = $conn->prepare($query);
 $statement->execute();
 return $statement->rowCount();
}

$output = array(
 'draw'    => intval($_POST['draw']),
 'recordsTotal'  => count_all_data($conn),
 'recordsFiltered' => $number_filter_row,
 'data'    => $data
);

echo json_encode($output);

?>