$("document").ready(function(){
	$(".letter").on("click", function(){
		letter = $(this).text()
		$("#tag-block").slideDown()
		$(".triangle").hide()
		if(letter == "S" && $("#tag-header").text() != "Science"){

			$("#tag-header").text("Science")
			$("#tag-blurb").text("Science paragraph")
		
		}else if(letter == "T" && $("#tag-header").text() != "Technology"){
		
			$("#tag-header").text("Technology")
			$("#tag-blurb").text("Technology paragraph")
		
		}else if(letter == "E" && $("#tag-header").text() != "Engineering"){
		
			$("#tag-header").text("Engineering")
			$("#tag-blurb").text("Engineering paragraph")
		
		}else if(letter == "A" && $("#tag-header").text() != "Art"){
		
			$("#tag-header").text("Art")
			$("#tag-blurb").text("Art paragraph")
		
		}else if(letter == "M" && $("#tag-header").text() != "Math"){
		
			$("#tag-header").text("Math")
			$("#tag-blurb").text("Math paragraph")
		
		}
		
		$($(this).parent().children()[1]).show()

	})

	$("#close").on("click", function(){
		$("#tag-block").slideUp(function(){
			$(".triangle").hide()
		})
	})

})