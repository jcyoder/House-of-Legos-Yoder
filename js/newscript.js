/* JavaScript */

function initPage(favoritesData) {
    loadFavoritesData(favoritesData);
   // addCollectionsMenu(categoryData);
}

function loadCategoryData(categoryData) {
    var output = '';

	/*outer each handles the Categories object*/
	$.each(categoryData, function() {
		$.each(this, function (index, value) {
			/*console.log(value.URL + ":" + value.name);*/
			output += '<a href="' + value.URL + '" class="list-group-item category-item">' + value.name + '</a>';
		});
	});
    $('#category-items').html(output);
}

function loadFavoritesData(favoritesData) {
    var output = '';

	$.each(favoritesData, function() {
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
}

function addCollectionsMenu(categoryData) {
    var output = '<ul class="dropdown-menu">';

	/*outer each handles the Categories object*/
	$.each(categoryData, function() {
		
		$.each(this, function (index, value) {
			/*console.log(value.URL + ":" + value.name);*/
			output += '<li><a href="' + value.URL + '">' + value.name + '</a></li>';
		});
		output += '</li>';
	});
	output += '</ul>';
    $('.collection-menu').append(output);
}
/*
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
*/