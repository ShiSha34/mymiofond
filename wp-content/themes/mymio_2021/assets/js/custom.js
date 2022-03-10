function activatePlacesSearch(){
	var input = document.getElementById('place_of_birth');
    console.log(input);
    const options = {
        //componentRestrictions: { country: "ru" },
        types: ['(cities)'],
    };
	var autocomplete = new google.maps.places.Autocomplete(input, options);
    var inputs = document.querySelectorAll('.google-input')
    console.log(inputs);
}

function activateAllPlacesSearch(){
	
    const options = {
        //componentRestrictions: { country: "ru" },
        types: ['(cities)'],
    };
	var autocomplete = new google.maps.places.Autocomplete(input, options);
}