(function() {

	$(function() {

		app.start();

		app.listen('test', function(e, data) { console.log(data) });
		app.notify('test', ['test event data']);

	});

})();