export const selectMkb = async (fieldName) => {
    const input = $(`[data-elma="${fieldName}"]`);

    if (!input) return;

    const mkbList = await getMkbJSON();

    input.on('keypress', function () {
        const value = $(this).val().toLowerCase();
        const wrap = $(this).parent();
        const tips = wrap.find('.tips');

        if (value.length < 2) return;

        if (!tips.hasClass('active')) {
            tips.addClass('active');
        }

        const arr = mkbList.filter(c => {
            return c.title.toLowerCase().includes(value)
        });
        addCities(arr);
    });
}

const getMkbJSON = async () => {
    try {
        const response = await fetch(`${homeUrl}/mkb.json`);
        const mkbArray = await response.json();
        return await mkbArray;
    } catch (e) {
        console.log(e);
    }
}

window.addEventListener('click', function (e) {
    const target = e.target;
    const tipsActive = document.querySelector('.tips.active') || null;

    if (!tipsActive) return;

    if (target.classList.contains('tip') || target.classList.contains('city')) return;

    tipsActive.classList.remove('active');
})

const addCities = (mkbArray) => {
    console.log(mkbArray)
    const tips = document.querySelector('.tips');
    tips.innerHTML = '';

    mkbArray.forEach(c => {
        const span = document.createElement('span');
        span.classList.add('tip');
        span.innerHTML = c.title;
        span.addEventListener('click', citySelect);
        tips.appendChild(span);
    })
}

const hideCityTips = () => {
    const activeTips = $('.tips.active');
    if (activeTips) {
        activeTips.removeClass('active');
    }
}

const citySelect = function (e) {
    document.querySelector('[data-elma="mank_accompanying_diagnosis_2"]').value = this.innerHTML;
    hideCityTips();
}

