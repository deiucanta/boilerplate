(function() {

	var app = {}, modules = {};

	app.start = function() {
		$('[data-module]').each(function() {
			var name = $(this).attr('data-module');
			if (modules[name]) {
				var instance = new modules[name]();
				instance.$el = $(this);
				instance.init();
			}
		});
	};

	app.module = function(name, callback) {
		modules[name] = callback;
	};

	window.app = app;

})();