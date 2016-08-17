/* JavaScript */

/*function loadAJAX() {
	var request;
	if(window.XMLHttpRequest) {
		request = new XMLHttpRequest();
	}
	else {
		request = new ActiveXObject("Microsoft.XMLHTTP");
	}

	request.open('GET', 'categories.json');
	request.onreadystatechange = function() {
		if((request.readyState===4) && (request.status===200)) {
			var items = JSON.parse(request.responseText);
			console.log(items.Categories);
			
			var output = '';		
			 for (var i=0; i< items.Categories.length; i++) {
				output += '<a href="#" class="list-group-item category-item">' + items.Categories[i] + '</a>';
			}
			console.log(output);
			document.getElementById('category-items').innerHTML = output;
		}
	}
	request.send();
}

loadAJAX();
*/

/*jQuery alternative method*/
/*$.getJSON('categories.json', function(data) {
	console.log(data);
	var output = '';
	for (var i=0; i< data.Categories.length; i++) {
				output += '<a href="#" class="list-group-item category-item">' + data.Categories[i] + '</a>';
	}
	console.log(output);
	$('#category-items').html(output);
});
*/

$.getJSON('../categories.json', function(data) {
	var output = '';

	/*outer each handles the Categories object*/
	$.each(data, function() {
		$.each(this, function (index, value) {
			/*console.log(value.URL + ":" + value.name);*/
			output += '<a href="' + value.URL + '" class="list-group-item category-item">' + value.name + '</a>';
		});
	});
	
	/* way to do it with a for loop*/
	/*for (var i=0; i< data.Categories.length; i++) {
		output += '<a href="' + data.Categories[i].URL + '" class="list-group-item category-item">' + data.Categories[i].name + '</a>';
	}
	*/
	$('#category-items').html(output);
});

$.getJSON('../favorites.json', function(data) {
	
	var output = '';

	$.each(data, function() {
		output = '<div class="container">';
		$.each(this, function (index, value) {

			output += '<section class="section-wrapper">';
			$.each(this, function (index, value) {
				console.log(this.length);
				output += '<h2 class="section-title">' + index +'\'s Favorites</h2>';
				output += '<div class="row">';
				
				$.each(this, function (index, value) {
					output += '<div class="col-md-4">';
					output += '<div class="col-box">';
					output += '<img class="img-responsive" src="' + value.Pic + '" alt="" />';
					output += '<h3>' + value.Title + '</h3>';
					output += '<h3>Category: ' + value.Category + '</h3>';
					output +='</div></div>';
				});
			output += '</div>';
			});
			output += '</section>';
		});
		output += '</div>';
	});
	console.log(output);
	$('.favorites').html(output);
});