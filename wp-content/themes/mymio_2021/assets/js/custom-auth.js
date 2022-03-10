(function ($) {
    const settings = {
        enterModal: $('#auth-modal'),
        enterUrlParams: ['enter', 'error'],
        modalForms: $('.auth-modal__content'),
    }

    if (checkUrl(settings.enterUrlParams)) {
        showEnterModal();
    }

    settings.enterModal.on('click', closeEnterModal);
    settings.modalForms.each(function () {
        $(this).on('click', switchForms);
    })

    function showEnterModal() {
        settings.enterModal.addClass('active');
    }

    function closeEnterModal(e) {
        const target = e.target;

        if (target.dataset.close
            && $(this).hasClass('active')) {
            $(this).removeClass('active');
        }
    }

    function checkUrl(checkedArray) {
        const url = new URL(window.location.href);
        const urlSearchParams = Object.fromEntries(url.searchParams.entries());

        let isEnterParamsExist = false;

        checkedArray.forEach(c => {
            if  (urlSearchParams.hasOwnProperty(c)) {
                isEnterParamsExist = true;
            }
        });

        return isEnterParamsExist;
    }

    function switchForms(e) {
        const target = e.target;

        if ($(target).hasClass('switch')) {
            e.preventDefault();
            settings.modalForms.each(function () {
                $(this).toggleClass('active');
            })
        }
    }
})(jQuery);