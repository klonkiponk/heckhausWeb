/************************************************\

    FUNCTIONS

\************************************************/
function slideInMenu(){
	$("body").toggleClass("open");
    $("#content").toggleClass("open");
    $("#menu").toggleClass("open");
}
function clickInMenu(href,menuItem,id){
    //$("#container").toggleClass("open");
    //$(".navbar").toggleClass("open");

    var animationOut = "pt-page-rotateLeftSideFirst";
    var animationIn = "pt-page-moveFromRight";
    
    //ANIMATE OUT THE COMPLETE RIGHT CONTENT SIDE
    $("#innerPusher").addClass(animationOut);
    //REMOVE RED COLOR FROM MENU
    $(".list-group-item span").parent().removeClass("active");
	//CLEAN THE CONTENT
    $("#main").fadeOut(function(){
    	//LOAD THE NEW CONTENT
	    if (href === "newsfeed"){
	        $("#main").load("newsfeed.php");
	    }
	    if (href === "editChooser"){
			$.ajax({
			    url: "editChooser.php",
			    cache: false,
			    dataType: "html",
			    success: function(data) {
			        $("#main").html(data);
			    }
			});
	    }	    
	    if (href === "editJumbotronWe"){
	        $("#main").load("editJumbotron.php?id=7",function(){
	            var editJumbotron = {
	                target:     "#message",
	                url:        "php/db/updateJumbotronDB.php",
	                type:       "POST",
	                beforeSubmit: validate
	            };
	            $("#editJumbotron").ajaxForm(editJumbotron);
	        });
	    }
	    if (href === "editJob"){
	        $("#main").load("editJob.php?id="+id,function(){
		        var editJob = {
		            target:     "#message",
		            url:        "php/db/updateJobsDB.php",
		            type:       "POST"
		        };
		        $("#editJob").ajaxForm(editJob);	        
	        });
	    }
	    if (href === "editLandingPage"){
	        $("#main").load("editLandingPage.php?id="+id,function(){
		        var editLandingPage = {
		            target:     "#message",
		            url:        "php/db/updateLandingPagesDB.php",
		            type:       "POST"
		        };
		        $("#editLandingPage").ajaxForm(editLandingPage);	        
	        });
	    }	    
	    if (href === "newJob"){
	        $("#main").load("editJob.php",function(){
		        var editJob = {
		            target:     "#message",
		            url:        "php/db/updateJobsDB.php",
		            type:       "POST"
		        };
		        $("#editJob").ajaxForm(editJob);	        
	        });
	    }

	    if (href === "editJumbotronWork"){
	        $("#main").load("editJumbotron.php?id=8",function(){
	            var editJumbotron = {
	                target:     "#message",
	                url:        "php/db/updateJumbotronDB.php",
	                type:       "POST",
	                beforeSubmit: validate
	            };
	            $("#editJumbotron").ajaxForm(editJumbotron);
	        });
	    }	    
	    if (href === "newPost"){
	        $("#main").load("newPost.php",function(){
	            var newArticleOptions = {
	                target:     "#message",
	                url:        "php/db/insertIntoDB.php",
	                type:       "POST",
	                beforeSubmit: validate
	            };
	            $("#insertArticleIntoDBForm").ajaxForm(newArticleOptions);
	        });
	    }
		if (href === "editPost"){
	        $("#main").load("newPost.php?id="+id,function(){
	            var newArticleOptions = {
	                target:     "#message",
	                url:        "php/db/insertIntoDB.php",
	                type:       "POST",
	                beforeSubmit: validate
	            };
	            $("#insertArticleIntoDBForm").ajaxForm(newArticleOptions);
				var EN_active = $("#EN_active").attr("value");
				if (EN_active == 1){
				    $(".language_toggle_EN").fadeIn();
				    $(".btn-language").find("i").toggleClass("fa-plus");
				    $(".btn-language").find("i").toggleClass("fa-minus");	    
				    $(".btn-language").toggleClass("addEnglishLanguage");
				    $(".btn-language").toggleClass("removeEnglishLanguage");				
				}	            
	        });
	    }	    
		//HIGHLIGHT MENU ITEM
		$(menuItem).parent().addClass("active");	     	
        $("#main").fadeIn("slow",function(){
			// $("#chatWrapper").css("height",height-80);
        });
    });
    setTimeout(function() {
        $("#innerPusher").removeClass(animationOut);
        $("#innerPusher").addClass(animationIn);
    }, 500);

}
function validate(formData,jqForm){
    var form = jqForm[0];
    if (!form.header.value || !form.subHeader.value) {
        alert('Please enter a value for header and subheader');
        return false;
    }


	var queryString = $.param(formData); 
	console.log(queryString);
    
}
function refreshChat(){

    //var menuId = $( "ul.nav" ).first().attr( "id" );
    var request = $.ajax({
        url: "refresh.php",
        //type: "POST",
        //data: { id : menuId },
        dataType: "html"
        });

    request.done(function(html) {
        $(".refresh").html(html);
        var objDiv = document.getElementById("chatWrapper");
        objDiv.scrollTop = objDiv.scrollHeight;
    });

    request.fail(function() {
        //alert( "REFRESH failed: ");
    });
}
/************************************************\

    jQUERY

\************************************************/
$(document).ready(function() {
	// !INITIAL
    //CONSTANTS
	$.ajaxSetup ({
	    // Disable caching of AJAX responses
	    cache: false
	});
	
    $("#main").load("editChooser.php");        
		
	$.ajax({
	    url: "editChooser.php",
	    cache: false,
	    dataType: "html",
	    success: function(data) {
	        $("#main").html(data);
	    }
	});
	
    $('#login #modal').modal({
		keyboard: true
    });
    
    var height = $(window).height();
    var width = $(window).width();
    $("body").css("height",height);
    $("body").css("width",width);
    $("#content").css("height",height);
    //$("#chatWrapper").css("height",height-100);
    $(window).resize(function(){
            var height = $(window).height();
            $("#content").css("height",height);
            var width = $(window).width();
            $("body").css("height",height);
            $("body").css("width",width);
            //$("#chatWrapper").css("height",height-100);
    });

	//red small more/less toggler
	$(document).on("click","span.toggler",function(){
		var id= $(this).attr("data-id");
		var toggler = this;
		$(toggler).find("i").toggleClass("fa-rotate-180");
		$(".toggled[data-id='"+id+"']").slideToggle("slow",function(){

		});
	});

	// !CLICK IN A MENU
    $(".list-group-item span").click(function(){
        var href = $(this).attr("data-href");
        var menuItem = this;
        clickInMenu(href,menuItem);
    });

    $("#main").on("submit","#chatForm",function(){
        //alert("TEST");
        var message = $("#textb").val();
        var user = $("#texta").val();
        var request = $.ajax({
            url: "save.php",
            type: "POST",
            data: { sender : user, text : message },
            dataType: "html"
        });

        request.done(function() {
            refreshChat();
        });

        request.fail(function() {
            //alert( "Request failed: ");
        });
        $("#textb").val("");
        refreshChat();
        return false;
    });

    $("body").on("click","span.addImageFormField",function(){
        var imageFormField = '';
        //$(".imageContainer").append(imageFormField);
        $(imageFormField).appendTo(".imageContainer").slideDown();
    });
    
    


    $("body").on("click","span.removeImage",function(){
        $(this).parent().parent().slideUp().fadeOut(function(){
            $(this).remove();
        });
    });
    $("body").on("click","span.switchOrderUp",function(){
        var image = $(this).parent().parent();
        var newPosition = $(this).parent().parent().prev();

        $(image).slideUp(function(){
            $(image).insertBefore(newPosition);
            $(image).slideDown();
        });

    });
    $("body").on("click","span.switchOrderDown",function(){
        var image = $(this).parent().parent();
        var newPosition = $(this).parent().parent().next();

        $(image).slideUp(function(){
            $(image).insertAfter(newPosition);
            $(image).slideDown();
        });
    });
    
    $("body").on("click","span.switchItemOrderUp",function(){
		var thisItemID = $(this).parent().parent().attr("data-thisItemID");
		var previousItemID = $(this).parent().parent().attr("data-previousItemID");
		$.ajax({
          type: "POST",
          url: "php/db/changeOrderForPost.php",
		  data: { thisItemID: thisItemID, previousItemID: previousItemID }
		})
		.done(function(html) {
			$.ajax({
			    url: "editChooser.php",
			    cache: false,
			    dataType: "html",
			    success: function(data) {
			        $("#main").html(data);
			    }
			});
        });
    });
    $("body").on("click","span.switchJobOrderUp",function(){
		var thisItemID = $(this).parent().parent().attr("data-thisItemID");
		var previousItemID = $(this).parent().parent().attr("data-previousItemID");
		$.ajax({
          type: "POST",
          url: "php/db/changeOrderForJob.php",
		  data: { thisItemID: thisItemID, previousItemID: previousItemID }
		})
		.done(function(html) {
			$.ajax({
			    url: "editChooser.php",
			    cache: false,
			    dataType: "html",
			    success: function(data) {
			        $("#main").html(data);
			    }
			});
        });
    });          

/************************************************\

    DATABASE OPERATIONS

\************************************************/


    $("body").on("click","span.editAnExistingPostButton",function(){
        var id = $(this).attr("data-id");
		var href = "editPost";
		var menuItem = "newPost";
        clickInMenu(href,menuItem,id);
    });
    $("body").on("click","span.editAnExistingJumbotron",function(){
        var id = $(this).attr("data-id");
		var href = "editJumbotron";
		var menuItem = "editJumbotron";
        clickInMenu(href,menuItem,id);
    });    

    $("body").on("click","span.deleteAnExistingPostButton",function(){
        var id = $(this).attr("data-id");
        var table = $(this).attr("data-table");        
        $("#deleteButton").attr("data-id",id);
        $("#deleteButton").attr("data-table",table);            
        $('#modal').modal({
			keyboard: true
        });
    });
    
    $("body").on("click","span.deleteAnJobButton",function(){
        var id = $(this).attr("data-id");
        var table = $(this).attr("data-table");        
        $("#deleteButton").attr("data-id",id);
        $("#deleteButton").attr("data-table",table);        
        $('#modal').modal({
			keyboard: true
        });
    });    
    
    $("body").on("click","span.editAnJobButton",function(){
        var id = $(this).attr("data-id");
		var href = "editJob";
		var menuItem = "editJob";
        clickInMenu(href,menuItem,id);
    });
    
    $("body").on("click","span.editALandingPageButton",function(){
        var id = $(this).attr("data-id");
		var href = "editLandingPage";
		var menuItem = "editLandingPage";
        clickInMenu(href,menuItem,id);
    });    
    
    $("body").on("click","#deleteButton",function(){
		var id = $(this).attr("data-id");
        var table = $(this).attr("data-table");
		$("#main").fadeOut("fast",function(){
			$.ajax({
	          type: "POST",
	          url: "php/db/deleteFromDB.php",
			  data: { id: id,table: table }
			  })
			.done(function() {
				$.ajax({
				    url: "editChooser.php",
				    cache: false,
				    dataType: "html",
				    success: function(data) {
				        $("#main").html(data);
				    }
				});
	  			$('#modal').modal('hide');
	  			$('#main').fadeIn("slow");
	        });
		});
    });

    // !LIVE UPLOAD OF A CHOSEN IMAGE
    $("body").on("change","form.singleImageUploadForm input[type=file]",function(){
		var id = $(this).parent().attr("id");
		var singleImageForm = "#"+id;
		$("#main").toggleClass("transparent");
		var uploadSingleImage = {
                url:        "php/db/uploadSingleImage.php",
                type:       "POST",
				success:	function(html){
					$(html).appendTo(".imageContainer").delay(500).slideDown();
					$("#main").toggleClass("transparent");					
				}
        };
		$(this).parent().ajaxSubmit(uploadSingleImage);
    });
    
    
    /*****************\
    	UPLOAD AN SINGLE IMAGE FOR AN NORMAL ARTICLE
    \*****************/
    $("body").on("change","form.singleImageUploadForm input[type=file]",function(){
		var id = $(this).parent().attr("id");
		var singleImageForm = "#"+id;
				var bar = $('.bar'); //UPLOAD TEST
				var percent = $('.percent'); //UPLOAD TEST
				var status = $('#status');  //UPLOAD TEST
		var uploadSingleImage = {
                url:        "php/db/uploadSingleImage.php",
                type:       "POST",

				//TEST OF UPLOAD PROGRESS
             
				beforeSend: function() {
				    status.empty();
				    var percentVal = '0%';
				    bar.width(percentVal);
				    percent.html(percentVal);
				},
				uploadProgress: function(event, position, total, percentComplete) {
				    var percentVal = percentComplete + '%';
				    bar.width(percentVal);
				    percent.html(percentVal);
				},
				success: function() {
				    var percentVal = '100%';
				    bar.width(percentVal);
				    percent.html(percentVal);
					$(html).appendTo(".imageContainer").delay(500).slideDown();				    
				},
				complete: function(xhr) {
					status.html(xhr.responseText);
				},//END OF TEST OF UPLOAD PROGRESS                
                
				/*success:	function(html){
					$(html).appendTo(".imageContainer").delay(500).slideDown();
				}*/
        };
		$(this).parent().ajaxSubmit(uploadSingleImage);
    });
    
    

    /*****************\
    	UPDATE THE JUMBOTRON COLOR
    \*****************/    

    $("#main").on("change","#colorForm",function(){
	    var color = $("#colorForm").val();
	    $("#colorPreview").css("background",color);
    });

    /*****************\
    	UPLOAD AN JUMBOTRON IMAGE
    \*****************/

            
    $("body").on("change","form.singleImageUploadFormForJumbotron input[type=file]",function(){
		$("#main").toggleClass("transparent");
		var id = $(this).parent().attr("id");
		var singleImageForm = "#"+id;
				var bar = $('.bar'); //UPLOAD TEST
				var percent = $('.percent'); //UPLOAD TEST
				var status = $('#status');  //UPLOAD TEST
		var uploadSingleImage = {
                url:        "php/db/uploadSingleImageForJumbotron.php",
                type:       "POST",

				//TEST OF UPLOAD PROGRESS
             
				beforeSend: function() {
				    status.empty();
				    var percentVal = '0%';
				    bar.width(percentVal);
				    percent.html(percentVal);
				},
				uploadProgress: function(event, position, total, percentComplete) {
				    var percentVal = percentComplete + '%';
				    bar.width(percentVal);
				    percent.html(percentVal);
				},
				success: function(html) {
				    var percentVal = '100%';
				    bar.width(percentVal);
				    percent.html(percentVal);
					$(html).appendTo(".imageContainer").delay(500).slideDown();				    
				},
				complete: function(xhr) {
					status.html(xhr.responseText);
					$("#main").toggleClass("transparent");					
				},//END OF TEST OF UPLOAD PROGRESS                
                
				/*success:	function(html){
					$(html).appendTo(".imageContainer").delay(500).slideDown();
				}*/
        };
		$(this).parent().ajaxSubmit(uploadSingleImage);
    });
    
        
/************************************************\

    //! UPDATE AN DATABASE

\************************************************/
    $("body").on("click","span#saveNewArticleToDB",function(){  	
    	var writePost = {
            url:        "php/db/insertIntoDB.php",
            type:       "POST",
            success:       function(result){
	            $('#message').slideUp();
	            $('#message').empty();
	            $(result).appendTo("#message");
	            $('#message').slideDown();
				setTimeout(function() {
					//$('#message').slideUp(); //WOULD BE THE DISAPPEARANCE AFTER SAVING
				}, 4000);	 
				           

            }
    	}
    	$('#insertArticleIntoDBForm').ajaxSubmit(writePost);    	
    });
    $("body").on("click","span#saveJumbotron",function(){  	
        var editJumbotron = {
            target:     "#message",
            url:        "php/db/updateJumbotronDB.php",
            type:       "POST"/*,
            beforeSubmit: validate*/
        };
        $("#editJumbotron").ajaxSubmit(editJumbotron);
    });
    $("body").on("click","span#saveJobToDB",function(){
        var editJob = {
            target:     "#message",
            url:        "php/db/updateJobsDB.php",
            type:       "POST"
        };
        $("#editJob").ajaxSubmit(editJob);
    });
    $("body").on("click","span#saveLandingPageToDB",function(){
        var editLandingPage = {
            target:     "#message",
            url:        "php/db/updateLandingPagesDB.php",
            type:       "POST"
        };
        $("#editLandingPage").ajaxSubmit(editLandingPage);
    });
    
/************************************************\

    //! LANGUAGE SWITCHING FUNCTIONS

\************************************************/    
    
    
    $("body").on("click",".addEnglishLanguage",function(){
	    $(".language_toggle_EN").fadeIn();
		$("#EN_active").attr("value","1");
	    $(this).find("i").toggleClass("fa-plus");
	    $(this).find("i").toggleClass("fa-minus");	    
	    $(this).toggleClass("addEnglishLanguage");
	    $(this).toggleClass("removeEnglishLanguage");	    
    });
    $("body").on("click",".removeEnglishLanguage",function(){
	    $(".language_toggle_EN").fadeOut();
		$("#EN_active").attr("value","0");    
	    $(this).find("i").toggleClass("fa-plus");
	    $(this).find("i").toggleClass("fa-minus");
	    $(this).toggleClass("addEnglishLanguage");
	    $(this).toggleClass("removeEnglishLanguage");		    
    });
    

/************************************************\

    TIME BASED FUNCTIONS

\************************************************/

    setInterval(function(){
        //refreshChat();
    }, 2000);
});