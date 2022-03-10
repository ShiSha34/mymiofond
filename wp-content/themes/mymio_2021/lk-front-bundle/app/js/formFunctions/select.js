if (jQuery('.select').length > 1) {
    jQuery('select').each(function () {
        let $this = jQuery(this).not('.select-search');
        let parent = jQuery(this).not('.select-search').parents('.select');
        $this.select2({
            minimumResultsForSearch: Infinity,
            dropdownParent: parent
        });
    });
    jQuery('.select-search').each(function () {
        let $this = jQuery(this);
        let parent = jQuery(this).parents('.select');
        $this.select2({
            dropdownParent: parent
        });
    });
} else {
    jQuery('select').select2({
        minimumResultsForSearch: Infinity,
        dropdownParent: jQuery('.select')
    });
}

$('.select').parent().on('click', function () {
    const ctx = $(this);
    const selectInput = ctx.find('.select-input');
    const inner = ctx.find('.select2-selection__rendered');

    inner.on('DOMSubtreeModified', function () {
        const content = $(this).html();

        if (content.includes('Другое')) {
            selectInput.addClass('active');
        } else if (!content.includes('Другое') && selectInput.hasClass('active')) {
            selectInput.removeClass('active');
        }
    });
});