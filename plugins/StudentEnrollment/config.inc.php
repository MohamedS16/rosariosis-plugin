<?php


if ( empty( $_REQUEST['save'] )
	&& empty( $_REQUEST['missing_attendance'] ) )
{
	$res = getEnrollmentReport();
	echo '
	<table border="1">
    <thead>
        <tr>
            <th>STUDENT</th>
            <th>Course</th>
            <th>SUBJECT</th>
        </tr>
    </thead>
    <tbody>';
	foreach($res as $r){
		echo "
        <tr>
            <td> " . $r['STUDENT_NAME'] . "</td>
            <td>" . $r['COURSE_NAME'] . "</td>
            <td>" . $r['SUBJECT_NAME'] . "</td>
        </tr>";
	}
    echo '</tbody>
</table>
';
}
