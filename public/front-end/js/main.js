$(function () {

	// dynamic replicate field
		$('.add-more-btn').on('click', function (e) {
			e.preventDefault();
			var proposal = 	'<div class="course-type">' +
								'<div class="improvement-overlap">' +
									'<input type="radio" value="improvement" id="improvement" name="course-type">' +
									'<label for="improvement">' + 'Improvement' + '</label>' +
									'<input type="radio" value="overlap" id="overlap" name="course-type">' +
									'<label for="overlap">' + 'Overlap' + '</label>'+
									'</div>' +
									'<div class="teacher-initial">' +
								    '<label for="teacher-initial">' + 'Teacher Initial :' + '</label>' +
									'<input type="text">' +
									'</div>' +
									'<div class="course-code">' +
									'<label for="course-code">' +
									'Course Code :' +
									'</label>' +
									'<input type="text">' +
									'</div>' +
									'<div class="course-title">' +
									'<label for="course-code">' +
									'Course Title :' +
									'</label>' +
									'<input type="text">' +
									'</div>' +
								'</div>'

			$('.course-type-wrapper').append(proposal);
		});

});
