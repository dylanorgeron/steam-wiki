//load projects
var projects = []
var data = $.ajax({
	dataType: "json",
	url: "projects.json",
	success: function(){
		$.each(data.responseJSON,function(){
			projects.push(this)
		})
	}
})

//get by category
var showProjects = function(category){
	var shown = 0
	$("#tag-squares").empty()
	$.each(projects, function(i,v){
		if(v.category == category && shown < 3){
			shown++
			url = v.title.replace(/\s/g, '');
			$("#tag-squares").append("<div class='col-sm-4'><a href='perspectives/"+url+".php' class='square'><div class='tag-title'>"+v.title+"</div><div class='author'>"+v.author+"</div><div class='social'></div></a></div>")
		}
	})
}


$("document").ready(function(){


	$(".letter").on("click", function(){
		letter = $(this).text()
		$("#tag-block").slideDown()
		$(".triangle").hide()
		if(letter == "S" && $("#tag-header").text() != "Science"){

			$("#tag-header").text("Science")
			showProjects("Science")

		}else if(letter == "T" && $("#tag-header").text() != "Technology"){
		
			$("#tag-header").text("Technology")
			showProjects("Technology")
		
		}else if(letter == "E" && $("#tag-header").text() != "Engineering"){
		
			$("#tag-header").text("Engineering")
			showProjects("Engineering")
		
		}else if(letter == "A" && $("#tag-header").text() != "Art"){
		
			$("#tag-header").text("Art")
			showProjects("Art")
		
		}else if(letter == "M" && $("#tag-header").text() != "Math"){
		
			$("#tag-header").text("Math")
			showProjects("Math")

		}
		
		$($(this).parent().children()[1]).show()

	})

	$("#close").on("click", function(){
		$("html, body").animate({ scrollTop: "0px" });
		$("#tag-block").slideUp(function(){
			$(".triangle").hide()
		})
	})

})