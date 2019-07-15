$(function () {

	// dynamic replicate field
		$('.add-more-btn').on('click', function (e) {
			e.preventDefault();
			var proposal = 	'<div class="course-type">' +
								'<div class="improvement-overlap">' +
									'<label for="improvement">' + 'Registration Type :' + '</label>' +
									'<select class="course-pt-1" name="exam_type[]" >' +
									'<option>' + 'Improvement' + '</option>' + '<option>'+ 'Overlap' + '</option>' + 
									'</select>'+
									'</div>' +
									'<div class="teacher-initial">' +
								    '<label for="teacher-initial">' + 'Teacher Initial :' + '</label>' +
									'<input type="text" name="teacher_init[]">' +
									'</div>' +
									'<div class="course-code">' +
									'<label for="course-code">' +
									'Course Code :' +
									'</label>' +
									'<select class="course-pt-1" name="course_code[]">' +
									'<option>' + 'Course Code' + '</option>' +
									'<option>' + 'SWE101' + '</option>' +
									'<option>' + 'SWE102' + '</option>' +
									'<option>' + 'SWE103' + '</option>' +
									'<option>' + 'SWE104' + '</option>' +
									'</select>' + 
									'</div>' +
									'<div class="course-title">' +
									'<label for="course-code">' +
									'Course Title :' +
									'</label>' +
									'<select class="course-pt-1" name="course_title[]">' +
									'<option>' + 'Course Title' + '</option>' +
									'<option>' + 'OOP' + '</option>' +
									'<option>' + 'Testing' + '</option>' +
									'<option>' + 'System Analysis' + '</option>' +
									'<option>' + 'Math' + '</option>' +
									'</select>' +
									'</div>' +
								'</div>'

			$('.course-type-wrapper').append(proposal);
		});

});
