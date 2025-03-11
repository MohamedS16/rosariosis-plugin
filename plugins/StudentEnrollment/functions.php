<?php 

function getEnrollmentReport(){
	$qery = "select s.username as student_name, c.title as course_name, cs.title as subject_name from student_enrollment se 
			left join students s on se.student_id = s.student_id 
			left join schedule sch on se.student_id = sch.student_id 
			left join courses c on sch.course_id = c.course_id 
			left join course_subjects cs on c.subject_id = cs.subject_id";

	$res = DBGet($qery);

	return $res;
}

// add_action( 'Warehouse.php|header_head', 'reportStyle' );


// function reportStyle()
// {
// 	echo '<link rel="stylesheet" href="plugins/StudentEnrollment/style.css" />';
// }

?>