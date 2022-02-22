function displayAlbums()
{
    var albumId = $("#album").val();
    return albumId;
}

//$( "select" ).change( displayAlbums, function(){
    //    $.get("https://jsonplaceholder.typicode.com/photos?" + displayAlbums(), function(images){
        //        $.each(images, function(i, image){
            //            $images.append("<img src="+ image.thumbnailUrl +">");
            //        });     
            //    });
            //} );
            
$(function (){

    var $images = $("#images");

    $( "select" ).change( displayAlbums, function(){
        $("#test").remove();
        $.ajax({
            type: "GET",
            url: "https://jsonplaceholder.typicode.com/photos?" + displayAlbums(),
            success: function(images){
                $.each(images, function(i, image){
                    $images.append("<div id='test' class='col-sm-8 col-md-4 col-lg-2'><img class='w-100 shadow-1-strong rounded mb-4' src="+ image.thumbnailUrl +"></div>")
                });
            }
        });
    });
});

//
//$(document).ready(function(){
//    $("select").val(function(){
//        $.ajax("https://jsonplaceholder.typicode.com/photos?" + displayAlbums() , function(result){
//         $("img").html("src",result);
//        });
//    });
//});

//$(document).ready(function(){
//    $("select").val(function(){
//        $.ajax("https://jsonplaceholder.typicode.com/photos", function(result){
//            console.log(result);
//        });
//    });
//});


