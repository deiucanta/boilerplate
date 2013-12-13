this["templates"] = this["templates"] || {};

this["templates"]["a.html"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
  


  return "<div class=\"menu\">\n	<ul>\n		<li><a href=\"\">Item 1</a></li>\n		<li><a href=\"\">Item 2</a></li>\n		<li><a href=\"\">Item 3</a></li>\n		<li><a href=\"\">Item 4</a></li>\n		<li><a href=\"\">Item 5</a></li>\n		<li><a href=\"\">Item 6</a></li>\n		<li><a href=\"\">Item 7</a></li>\n		<li><a href=\"\">Item 8</a></li>\n		<li><a href=\"\">Item 9</a></li>\n		<li><a href=\"\">Item 10</a></li>\n	</ul>\n</div>";
  });

this["templates"]["b.html"] = Handlebars.template(function (Handlebars,depth0,helpers,partials,data) {
  this.compilerInfo = [4,'>= 1.0.0'];
helpers = this.merge(helpers, Handlebars.helpers); data = data || {};
  


  return "<div class=\"footer\">\n	<span class=\"copy\"></span>\n	<span class=\"help\"></span>\n</div>";
  });