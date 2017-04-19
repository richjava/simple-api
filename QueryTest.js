//Matt
$(function () {
    
    var itemId = 2,
            userId = 1,
            itemsUrl = 'api/videos',
            singleItemUrl = 'api/videos/' + itemId,
            itemsByUserUrl = 'api/users/' + userId + '/videos';

//    $("#get-all").on("click", function () {
//        var requestConfig = {
//            url: itemsUrl,
//            type: "GET",
//            dataType: "json"
//        };
//        console.log("Attempting get of all items");
//        sendRequest(requestConfig);
//    });
    $("#video_get-one").on("click", function () {
        var requestConfig = {
            url: singleItemUrl,
            type: "GET",
            dataType: "json",
            data: {id: itemId}
        };
        console.log("Attempting get of item with id of: " + itemId);
        sendRequest(requestConfig);
    });
    $("#video_get-all-by-user").on("click", function () {
        var requestConfig = {
            url: itemsByUserUrl,
            type: "GET",
            dataType: "json",
            data: {id: userId}
        };
        console.log("Attempting get of items of a user with id of: " + userId);
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
    request.done(function (data) {
        console.log(data);
    });
    request.fail(function (jqXHR, textStatus) {
        console.log("Request failed: " + textStatus);
    });
}
//End Matt


            