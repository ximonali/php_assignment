<h1>Student List</h1>

<ul>
	<?php foreach ($studentList as $student) : ?>
	<li> <?php echo $student['first_name'] . " " . $student['last_name']; ?> </li>
	<?php endforeach; ?>
</ul>

</ul>

