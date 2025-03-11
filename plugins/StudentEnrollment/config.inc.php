<?php

if ( isset( $_REQUEST['plugin'] )
	&& $_REQUEST['plugin'] === 'StudentEnrollment' )
{
	$res = getEnrollmentReport();
    
    $columns = [
        'STUDENT_NAME' => _( 'STUDENT_NAME' ),
        'COURSE_NAME' => _( 'COURSE_NAME' ),
        'SUBJECT_NAME' => _( 'SUBJECT_NAME' ),
    ];

    ListOutput($res,$columns);

// 	echo '
// 	<table border="1">
//     <thead>
//         <tr>
//             <th>STUDENT</th>
//             <th>Course</th>
//             <th>SUBJECT</th>
//         </tr>
//     </thead>
//     <tbody>';
// 	foreach($res as $r){
// 		echo "
//         <tr>
//             <td> " . $r['STUDENT_NAME'] . "</td>
//             <td>" . $r['COURSE_NAME'] . "</td>
//             <td>" . $r['SUBJECT_NAME'] . "</td>
//         </tr>";
// 	}
//     echo '</tbody>
// </table>
// ';
}
