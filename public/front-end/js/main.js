$(function () {

	// dynamic replicate field
		$('.add-more-btn').on('click', function (e) {
			e.preventDefault();
			var proposal = 	'<div class="course-type">' +
								'<div class="improvement-overlap">' +
									'<label for="improvement">' + 'Registration Type :' + '</label>' +
									'<select class="course-pt-1" name="reg_type[]" >' +
									'<option>' + 'Improvement' + '</option>' + '<option>'+ 'Overlap' + '</option>' + 
									'</select>'+
									'</div>' +
									'<div class="teacher-initial">' +
								    '<label for="teacher-initial">' + 'Teacher Initial :' + '</label>' +
									'<input type="text" name="teacher_init[]" required>' +
									'</div>' +
									'<div class="course-code">' +
									'<label for="course-code">' +
									'Course Code :' +
									'</label>' +
									'<select class="course-pt-1" name="course_code[]" required>' +
									'<option value="">' + 'Course Code' + '</option>' +
									'<option value="SWE101">' + 'SWE101' + '</option>' +
									'<option value="SWE102">' + 'SWE102' + '</option>' +
									'<option value="SWE103">' + 'SWE103' + '</option>' +
									'<option value="SWE104">' + 'SWE104' + '</option>' +
									'</select>' + 
									'</div>' +
									'<div class="course-title">' +
									'<label for="course-code">' +
									'Course Title :' +
									'</label>' +
									'<select class="course-pt-1" name="course_title[]" required>' +
									'<option value="">' + 'Course Title' + '</option>' +
									'<option value="OOP">' + 'OOP' + '</option>' +
									'<option value="Testing">' + 'Testing' + '</option>' +
									'<option value="System Analysis">' + 'System Analysis' + '</option>' +
									'<option value="Math">' + 'Math' + '</option>' +
									'</select>' +
									'</div>' +
									'<div class="course-title">' +
									'<label for="Exam Type">' +
									'Exam Type :' +
									'</label>' +
									'<select class="course-pt-1" name="exam_type[]">' +
									'<option>' + 'Exam Type' + '</option>' +
									'<option value="Mid Term">' + 'Mid Term' + '</option>' +
									'<option value="Final">' + 'Final' + '</option>' +
									
									'</select>' +
									'</div>' +
									'<div class="course-title">' +
									'<label for="Semister">' +
									'Exam Type :' +
									'</label>' +
									'<select class="course-pt-1" name="semister[]">' +
									'<option>' + 'Semister' + '</option>' +
									'<option>' + 'Spring '+new Date().getFullYear() + '</option>' +
									'<option>' + 'Summer '+new Date().getFullYear() + '</option>' +
									'<option>' + 'Fall '+new Date().getFullYear() + '</option>' +
									
									'</select>' +
									'</div>' +

								'</div>'

			$('.course-type-wrapper').append(proposal);
		});

});
