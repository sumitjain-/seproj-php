<h1 class="section_name">
	Create new course
</h1>

<form action="<?php echo site_url() ?>index.php/api/create_course" method="post">
	<label for="course_name" class="label">Course name: </label><input type="text" name="course_name" class="input text" placeholder="Awesome new course">
	<br>
	<label for="course_name" class="label">Teacher name: </label><input type="text" name="teacher_name" class="input text" placeholder="Cool teacher">
	<br>
	<label for="course_name" class="label">Timings: </label><input type="text" name="timings" class="input text" placeholder="5,6,7">
	<br>
	<label for="course_name" class="label">Start date: </label><input type="text" name="start_date" class="input text" placeholder="dd/mm/yyyy">
	<br>
	<label for="course_name" class="label">End date: </label><input type="text" name="end_date" class="input text" placeholder="dd/mm/yyyy">
	<br>
	<label for="course_name" class="label">Schedule: </label><input type="text" name="schedule" class="input text" placeholder="FTTTTTT">
	<br>
	<input type="submit" class="btn btn-teal" value="Submit">
</form>

<?php if ($message) {
	echo "<p class='message success'>".$message."</p>";
} ?>