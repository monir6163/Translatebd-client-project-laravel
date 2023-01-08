const $dropdown = $(".dropdown");
const $dropdownToggle = $(".dropdown-toggle");
const $dropdownMenu = $(".dropdown-menu");
const showClass = "show";

$(window).on("load resize", function () {
  if (this.matchMedia("(min-width: 768px)").matches) {
    $dropdown.hover(
      function () {
        const $this = $(this);
        $this.addClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "true");
        $this.find($dropdownMenu).addClass(showClass);
      },
      function () {
        const $this = $(this);
        $this.removeClass(showClass);
        $this.find($dropdownToggle).attr("aria-expanded", "false");
        $this.find($dropdownMenu).removeClass(showClass);
      }
    );
  } else {
    $dropdown.off("mouseenter mouseleave");
  }
});
// $('.dropdown').hover(function(){ 
//   $('.dropdown-toggle', this).trigger('click'); 
// });

	// 	$("#clear").click(function() {
	// 		$("#english_text").val("");
	// 		$("#bangla_text").val("");
	// 	});


	// 	//On pressing a key on "Search box" in "search.php" file. This function will be called.
	// 	$('#english_text').on('keyup', function() {
	// 		//Assigning search box value to javascript variable named as "name".
	// 		var english_text = $('#english_text').val();
	// 		console.log(english_text);
	// 		//Validating, if "name" is empty.
	// 		if (english_text == "") {
	// 			//Assigning empty value to "display" div in "search.php" file.
	// 			$("#bangla_text").html("");
	// 		}
	// 		//If name is not empty.
	// 		else {
	// 			//AJAX is called.
	// 			$.ajax({
	// 				//AJAX type is "Post".
	// 				type: "GET",
	// 				//Data will be sent to "ajax.php".
	// 				url: "{{URL::to('/translate')}}",
	// 				// url: "{{route('translate')}}",
	// 				//Data, that will be sent to "ajax.php".
	// 				data: {
	// 					//Assigning value of "name" into "search" variable.
	// 					'input_data': english_text,
	// 					'source': 'en',
	// 					'target': 'bn',
	// 				},
	// 				//If result found, this funtion will be called.
	// 				success: function(data) {
	// 					//Assigning result to "display" div in "search.php" file.
	// 					$("#bangla_text").html(data);
	// 				}
	// 			});
	// 		}
	// 	});


	// $.ajaxSetup({
	// 	headers: {
	// 		'csrftoken': '{{ csrf_token() }}'
	// 	}
	// });