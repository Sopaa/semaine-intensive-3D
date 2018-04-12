fetch('./api/init.php')
    .then(function(response) {
        if (response.status !== 200) {
            console.log('Looks like there was a problem. Status Code: ' +
                response.status);
            return;
        }

        // Examine the text in the response
        response.json().then(function(data) {
            //gameInstance.SendMessage("GameInterface", "Waiting there function", JSON.stringify(data));
        });
    })
    .catch(function(err) {
        console.log('Fetch Error :-S', err);
    });
