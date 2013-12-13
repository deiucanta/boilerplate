(function() {

	var o = $({});

	app.listen = function() {
		o.on.apply(o, arguments);
	};

	app.unlisten = function() {
		o.off.apply(o, arguments);
	};

	app.notify = function() {
		o.trigger.apply(o, arguments);
	};

})();