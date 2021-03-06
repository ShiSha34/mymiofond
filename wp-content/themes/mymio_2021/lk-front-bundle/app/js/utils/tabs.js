import {localStorageGet, localStorageSet} from "../helprers/localStorage";

export const tabs = (tabClass, tabContentClass) => {
    const tabs = $(tabClass);

    tabs.each(function () {
        $(this).on('click', function (e) {
            e.preventDefault();
            if ($(this).hasClass('active')) return;

            const dataTab = $(this).data('tab');
            const currentForm = $(`${tabContentClass}[data-form="${dataTab}"]`);

            $(`${tabClass}.active`).removeClass('active');
            $(`${tabContentClass}.active`).removeClass('active');
            $(this).addClass('active');
            // loader.addClass('active');
            currentForm.addClass('active');
            // currentForm.addClass('active', 'hide');
            // setTimeout(() => {
            // loader.removeClass('active');
            // currentForm.removeClass('hide');
            // }, 300);

            localStorageSet(tabClass, `${tabContentClass}, ${dataTab}`);
        })
    });
}

export const checkLastActiveTabs = (tabClass) => {
    const savedTab = localStorageGet(tabClass);

    if (!savedTab) {
        return
    }

    const savedTabArray = savedTab.split(',')
    const tabContentClass = savedTabArray[0];
    const tabNumber = savedTabArray[1];

    setActiveTabs(tabClass, tabContentClass, tabNumber);
}

const setActiveTabs = (tabClass, tabContentClass, tabNumber) => {
    const num = Number(tabNumber);
    const currentTab = $(tabClass)[num - 1];
    const currentTabContent = $(`${tabContentClass}[data-form]`)[num - 1];

    if (!$(currentTab).hasClass('active')) {

        if ($(`${tabClass}.active`)) {
            $(`${tabClass}.active`).removeClass('active');
            $(`${tabContentClass}.active`).removeClass('active');
        }

        $(currentTab).addClass('active');
        console.log($(currentTabContent))
        $(currentTabContent).addClass('active');
    }
}

export const checkLockedTabs = () => {

    fetch(`${homeUrl}/api/medical-questionnare-tabs.php?user_email=asdfd1231312312a@as.asa`, {
        method: 'GET',
    })
        .then(res => res.text())
        .then(data => {
            if (!data) return;

            const lockedTabsArr = data.split(',');
            lockedTabsArr.forEach(t => {
                const number = parseInt(t);
                const tab = $(`.lk-form__tab[data-tab="${number}"]`);
                const form = $(`.lk-form__tab_content[data-form="${number}"]`);
                tab.addClass('locked');
                form.addClass('locked');
            })
        });
}