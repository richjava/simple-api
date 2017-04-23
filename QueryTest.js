//Matt
$(function() {

    var itemId = 2,
            userId = 1,
            swLat = -43.583874340688446,
            swLong = 172.70773135865784,
            neLat = -43.577656737049615,
            neLong = 172.72011243547058,
            videosUrl = 'api/videos',
            singleVideoUrl = 'api/videos/' + itemId,
            videosByUserUrl = 'api/users/videos/' + userId,
            videosByLatLongUrl = 'api/latlong/videos/'
            + swLat
            + '/' + swLong
            + '/' + neLat
            + '/'
            + neLong;

    $("#video_get-one").on("click", function() {
        var requestConfig = {
            url: singleVideoUrl,
            type: "GET",
            dataType: "json",
            data: {id: itemId}
        };
        console.log("Attempting get of item with id of: " + itemId);
        sendRequest(requestConfig);
    });
    $("#video_get-all-by-user").on("click", function() {
        var requestConfig = {
            url: videosByUserUrl,
            type: "GET",
            dataType: "json",
            data: {id: userId}
        };
        console.log("Attempting get of items of a user with id of: " + userId);
        sendRequest(requestConfig);
    });
    $("#video_get-all-by-lat-long").on("click", function() {
        var requestConfig = {
            url: videosByLatLongUrl,
            type: "GET",
            dataType: "json",
            data: {swLat: swLat, swLong: swLong, neLat: neLat, neLong: neLong}
        };
        console.log("Attempting get videos by lat long coordinates: " + userId);
        sendRequest(requestConfig);
    });
//    $("#create").on("click", function () {
//        var requestConfig = {
//            url: itemsUrl,
//            type: "POST",
//            dataType: "json",
//            data: {name: 'New item name', 'userId': 3}
//        };
//        console.log("Attempting creation of item");
//        sendRequest(requestConfig);
//    });
//    $("#update").on("click", function () {
//        var requestConfig = {
//            url: singleItemUrl,
//            type: 'PUT',
//            dataType: 'json',
//            data: {name: 'Updated item name'}
//        };
//        console.log("Attempting update of item with id of: " + itemId);
//        sendRequest(requestConfig);
//    });
//    $("#delete").on("click", function () {
//        var requestConfig = {
//            url: singleItemUrl,
//            type: "DELETE"
//        };
//        console.log("Attempting deletion of item with id of: " + itemId);
//        sendRequest(requestConfig);
//    });

});
function sendRequest(requestConfig) {
    console.log(requestConfig);
    var request = $.ajax(requestConfig);
    request.done(function(data) {
//        var Jsonify = JSON.stringify(data);
        console.log(data);
    });
    request.fail(function(jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);
    });
}
//End Matt


            