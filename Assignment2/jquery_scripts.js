var artworks = [["Ocean Sunset","Pic taken by a person lost at sea","$500","https://images.pexels.com/photos/189349/pexels-photo-189349.jpeg?w=940&h=650&auto=compress&cs=tinysrgb"],
		["Forest Canopoy","BBC wildlife","$129","https://media.istockphoto.com/photos/man-photographing-in-columbia-ice-picture-id508649727?s=2048x2048"],
		["vdsv","ssrnrjrthjrvsd","$085","https://media.istockphoto.com/photos/the-milky-shores-picture-id496564505?s=2048x2048"],
		["svsd","bhbnlmfgngh","$0780","https://media.istockphoto.com/photos/stunning-hike-picture-id491703537?s=2048x2048"],
		[",bkjkj","gbjnljynjtyntyntymmtyjjvb vb ","$7476","https://media.istockphoto.com/photos/safari-in-the-sandstorm-picture-id104267766?s=2048x2048"],
		["sghsjgs","sdovhivbtnttmyumyumyjksdvklsdnv","$8687","https://media.istockphoto.com/photos/lowangle-shot-of-beech-tree-forest-picture-id181877763?s=2048x2048"]
		];

$(document).ready(function(){
	$("#artworks").click(function(){
			$("#artworkslist").css("display","block");
			$("#artistslist").css("display","none");
			$("#museumslist").css("display","none");	
	});
	$("#artists").click(function(){
			$("#artistslist").css("display","block");
			$("#artworkslist").css("display","none");
			$("#museumslist").css("display","none");
			
	});
	$("#museums").click(function(){
			$("#museumslist").css("display","block");
			$("#artworkslist").css("display","none");
			$("#artistslist").css("display","none");
	});
});


var art;

var artists = [["",""],
	["",""],
	["",""],
	["",""],
	["",""]
];



$(document).ready(function(){
	$("#art1").click(function(){
		$("#preview").attr("src",artworks[0][3]);
		$("#title").text("Title: "+artworks[0][0]);
		$("#desc").text("Description: "+artworks[0][1]);
		$("#price").text("Price: "+artworks[0][2]);
		art = artworks[0];
	});
	$("#art").click(function(){
		$("#preview").attr("src",artworks[1][3]);
		$("#title").text("Title: "+artworks[1][0]);
		$("#desc").text("Description: "+artworks[1][1]);
		$("#price").text("Price: "+artworks[1][2]);
		art = artworks[1];	
	});
	$("#art").click(function(){
		$("#preview").attr("src",artworks[2][3]);
		$("#title").text("Title: "+artworks[2][0]);
		$("#desc").text("Description: "+artworks[2][1]);
		$("#price").text("Price: "+artworks[2][2]);
		art = artworks[2];
	});
	$("#art").click(function(){
		$("#preview").attr("src",artworks[3][3]);
		$("#title").text("Title: "+artworks[3][0]);
		$("#desc").text("Description: "+artworks[3][1]);
		$("#price").text("Price: "+artworks[3][2]);
		art = artworks[3];
	});
	$("#art5").click(function(){
		$("#preview").attr("src",artworks[4][3]);
		$("#title").text("Title: "+artworks[4][0]);
		$("#desc").text("Description: "+artworks[4][1]);
		$("#price").text("Price: "+artworks[4][2]);
		art = artworks[4];
	});

});

$(window).load(function(){
	$("#title").click(function(){
		$("#fullimage").attr("src",art[3]);
		$("#fulldesc").text(art[1]);	
	});
	
});
