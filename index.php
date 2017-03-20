<!DOCTYPE html>
<html>
    <head>
        <title>Simple API example</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div>
            <h2>Simple API example</h2>
            <h3>Items</h3>
            <button id="get-all" type="button">Get all</button>
            <button id="get-one" type="button">Get one</button>
            <button id="get-all-by-user" type="button">Get all for this user</button>
            <button id="create" type="button">Create</button>
            <button id="update" type="button">Update</button>
            <button id="delete" type="button">Delete</button>
            <p>Check the browser's console for output</p>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script>
	    $(function() {
                var itemId = 2,
                userId = 3,
                itemsUrl = 'api/items',
                singleItemUrl = 'api/items/'+itemId,
                itemsByUserUrl = 'api/users/' + userId + '/items';
                
		$("#get-all").on("click", function() {
		    var requestConfig = {
			url: itemsUrl,
			type: "GET",
			dataType: "json"
		    };
                    console.log("Attempting get of all items");
                    sendRequest(requestConfig);
		});
                $("#get-one").on("click", function() {
		    var requestConfig = {
			url: singleItemUrl,
			type: "GET",
			dataType: "json",
			data: {id: itemId}
		    };
                    console.log("Attempting get of item with id of: " + itemId);
                    sendRequest(requestConfig);
		});
                $("#get-all-by-user").on("click", function() {
		    var requestConfig = {
			url: itemsByUserUrl,
			type: "GET",
			dataType: "json",
			data: {id: userId}
		    };
                    console.log("Attempting get of items of a user with id of: " + userId);
                    sendRequest(requestConfig);
		});
                $("#create").on("click", function() {
		    var requestConfig = {
			url: itemsUrl,
			type: "POST",
			dataType: "json",
			data: {name: 'New item name', 'userId': 3}
		    };
                    console.log("Attempting creation of item");
                    sendRequest(requestConfig);
		});
                $("#update").on("click", function() {
		    var requestConfig = {
			url: singleItemUrl,
			type: 'PUT',
			dataType: 'json',
			data: {name: 'Updated item name'}
		    };
                    console.log("Attempting update of item with id of: " + itemId);
                    sendRequest(requestConfig);
		});
                $("#delete").on("click", function() {
		    var requestConfig = {
			url: singleItemUrl,
			type: "DELETE"
		    };
                    console.log("Attempting deletion of item with id of: " + itemId);
                    sendRequest(requestConfig);
		});
                
	    });
	    function sendRequest(requestConfig){
		    var request = $.ajax(requestConfig);
		    request.done(function(data) {
			console.log(data);
		    });
		    request.fail(function(jqXHR, textStatus) {
			console.log("Request failed: " + textStatus);
		    });
	    }           
	</script>
    </body>
</html>
