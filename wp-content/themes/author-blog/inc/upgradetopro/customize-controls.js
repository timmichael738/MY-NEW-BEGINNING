(function (api) {

	// Extends our custom "Author Blog" section.
	api.sectionConstructor['author-blog'] = api.Section.extend({

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	});
	jQuery("#accordion-panel-blog-starter-theme-options").addClass("custom-class");

})(wp.customize);