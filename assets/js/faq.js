let lsxd = Object.create(null);

lsxd.faqToggle = function( element ) {
	console.log('sf');
	var schema_faq_question = jQuery('.wp-block-yoast-faq-block .schema-faq-question');
	schema_faq_question.removeClass('faq-q-open');
	schema_faq_question.siblings('.schema-faq-answer').removeClass('faq-a-open').slideUp();
	
	if (element.siblings('.schema-faq-answer').is(':visible')) {
		element.removeClass('faq-q-open');
		element.siblings('.schema-faq-answer').removeClass('faq-a-open').slideUp();
	} 
	else {
		element.addClass('faq-q-open');
		element.siblings('.schema-faq-answer').addClass('faq-a-open').slideDown();
	}
}

jQuery(document).ready(function() {
	jQuery('.wp-block-yoast-faq-block .schema-faq-question').on('click', function(e) {
		lsxd.faqToggle(jQuery(this));
	});

	jQuery('.wp-block-yoast-faq-block .schema-faq-question').on('keyup', function(e) {
		if(e.keyCode == 32){
			lsxd.faqToggle(jQuery(this));
		}	
	});
});