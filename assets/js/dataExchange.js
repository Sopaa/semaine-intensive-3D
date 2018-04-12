fetch('./api/init.php')
    .then(function(response) {
        if (response.status !== 200) {
            console.log('Looks like there was a problem. Status Code: ' +
                response.status);
            return;
        }

        // Examine the text in the response
        response.json().then(function(data) {
            console.log(data);
            //gameInstance.SendMessage("GameInterface", "Waiting there function", JSON.stringify(data));
        });
    })
    .catch(function(err) {
        console.log('Fetch Error :-S', err);
    });


function getPrice(drone){
    fetch('./api/init.php')
        .then(function(response) {
            if (response.status !== 200) {
                console.log('Looks like there was a problem. Status Code: ' +
                    response.status);
                return;
            }

            // Examine the text in the response
            response.json().then(function(data) {
                var currentElement = null;
                drone.forEach( function(element) {
                    currentElement = data.parts.filter(function(part){
                        return element.id === part.id;
                    });
                });

                var Totalprice = 0;
                currentElement.forEach(function(current){
                    Totalprice += current.prix;
                });

                //gameInstance.SendMessage("GameInterface", "Waiting there function", JSON.stringify(data));
            });
        })
        .catch(function(err) {
            console.log('Fetch Error :-S', err);
        });
}

function addtoCart(drone){
    fetch('./api/addtoCart.php', {
        method: 'post',
            headers: {
            "Content-type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body: 'chassis='+drone.chassis+'&helices='+drone.chassis+'&batterie='+drone.batterie+'&support'+drone.support+'&cameras'+drone.cameras+'&lampes'+drone.lampes+'&bras'+drone.bras;
    })
}