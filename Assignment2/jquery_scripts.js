var artworks = [["American Gothic","Pic taken by a person lost at sea","500","AmericanGothic.jpg"],
		["The Persistence of Memory","BBC wildlife","129","ThePersistenceofMemory.jpg"],
		["The Scream","ssrnrjrthjrvsd","085","TheScream.jpg"],
		["Starry Night","bhbnlmfgngh","0780","StarryNight.jpg"],
		["School of Athens","gbjnljynjtyntyntymmtyjjvb vb ","7476","SchoolofAthens.jpg"],
		["sghsjgs","sdovhivbtnttmyumyumyjksdvklsdnv","8687",""]
		];

var artists = [["Leonardo Da Vinci","artists1.jpg","Artist1.html","General Desc of da vinci"],
	["Michaelangelo","artist2.jpg","Artist2.html",""],
	["Pablo Picasso","artist3.jpg","Artist3.html",""],
	["Kanye West","artist4.jpg","Artist4.html","Yeezus"],
	["LeBron James","artist5.jpg","Artist5.html",""]
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




$(document).ready(function(){
	$("#art1").click(function(){
		$("#preview").attr("src",artworks[0][3]);
		$("#title").attr("href", "Art1.html");
		$("#title").text("Title: "+artworks[0][0]);
		$("#desc").text("Description: "+artworks[0][1]);
		$("#price").css("display","block");
		$("#price").text("Price: "+artworks[0][2]);
		art = artworks[0];
	});
	$("#art2").click(function(){
		$("#preview").attr("src",artworks[1][3]);
		$("#title").attr("href", "Art2.html");
		$("#title").text("Title: "+artworks[1][0]);
		$("#desc").text("Description: "+artworks[1][1]);
		$("#price").css("display","block");
		$("#price").text("Price: "+artworks[1][2]);
		art = artworks[1];	
	});
	$("#art3").click(function(){
		$("#preview").attr("src",artworks[2][3]);
		$("#title").attr("href", "Art3.html");
		$("#title").text("Title: "+artworks[2][0]);
		$("#desc").text("Description: "+artworks[2][1]);
		$("#price").css("display","block");
		$("#price").text("Price: "+artworks[2][2]);
		art = artworks[2];
	});
	$("#art4").click(function(){
		$("#preview").attr("src",artworks[3][3]);
		$("#title").attr("href", "Art4.html");
		$("#title").text("Title: "+artworks[3][0]);
		$("#desc").text("Description: "+artworks[3][1]);
		$("#price").css("display","block");	
		$("#price").text("Price: "+artworks[3][2]);
		art = artworks[3];
	});
	$("#art5").click(function(){
		$("#preview").attr("src",artworks[4][3]);
		$("#title").attr("href", "Art5.html");
		$("#title").text("Title: "+artworks[4][0]);
		$("#desc").text("Description: "+artworks[4][1]);
		$("#price").css("display","block");
		$("#price").text("Price: "+artworks[4][2]);
		art = artworks[4];
	});
	$("#artist1").click(function(){
		$("#preview").attr("src",artists[0][1]);
		$("#title").attr("href", "Artist1.html");
		$("#title").text("Artist: "+artists[0][0]);
		$("#desc").text("Description: "+artists[0][3]);
		$("#price").css("display","none");
	});
	$("#artist2").click(function(){
		$("#preview").attr("src",artists[1][1]);
		$("#title").attr("href", "Artist2.html");
		$("#title").text("Artist: "+artists[1][0]);
		$("#desc").text("Description: "+artists[1][3]);
		$("#price").css("display","none");
	});
	$("#artist3").click(function(){
		$("#preview").attr("src",artists[2][1]);
		$("#title").attr("href", "Artist3.html");
		$("#title").text("Artist: "+artists[2][0]);
		$("#desc").text("Description: "+artists[2][3]);
		$("#price").css("display","none");
	});
	$("#artist4").click(function(){
		$("#preview").attr("src",artists[3][1]);
		$("#title").attr("href", "Artist4.html");
		$("#title").text("Artist: "+artists[3][0]);
		$("#desc").text("Description: "+artists[3][3]);
		$("#price").css("display","none");
	});
	$("#artist5").click(function(){
		$("#preview").attr("src",artists[4][1]);
		$("#title").attr("href", "Artist5.html");
		$("#title").text("Artist: "+artists[4][0]);
		$("#desc").text("Description: "+artists[4][3]);
		$("#price").css("display","none");
	});

});

$( function() {
    $( "#cartdialog" ).dialog({	
		autoOpen: false,
		show: {
        		effect: "blind",
       			duration: 1000
      			},
      		hide: {
        		effect: "blind",
       			duration: 1000
      			}	
	});
	$( "#cart" ).on( "click", function() {
      		$( "#cartdialog" ).dialog( "open" );
    	});
	$( "#totaldialog" ).dialog({	
		autoOpen: false,
		show: {
        		effect: "blind",
       			duration: 500
      			},
      		hide: {
        		effect: "blind",
       			duration: 500
      			}	
	});
	$( "#purchase" ).on( "click", function() {
		$("#cartdialog").dialog("close");
      		$( "#totaldialog" ).dialog( "open" );
    	});
  });


