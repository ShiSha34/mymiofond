const tabs = $('.lk-tab');
const loader = $('.lk-body .loader');

tabs.each(function () {
    $(this).on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) return;

        const dataTab = $(this).data('tab');
        const currentForm = $(`.lk-form[data-form="${dataTab}"]`);

        $('.lk-tab.active').removeClass('active');
        $('.lk-form.active').removeClass('active');
        $(this).addClass('active');
        loader.addClass('active');
        currentForm.addClass('active', 'hide');
        setTimeout(() => {
            loader.removeClass('active');
            currentForm.removeClass('hide');
        }, 300);
    })
});

const subTabs = $('.lk-form__tab');

subTabs.each(function () {
    $(this).on('click', function (e) {
        e.preventDefault();
        if ($(this).hasClass('active')) return;

        const dataTab = $(this).data('tab');
        const currentForm = $(`.request-form-container[data-form="${dataTab}"]`);

        if ($('.lk-form__tab.active')) {
            $('.lk-form__tab.active').removeClass('active');
            $('.request-form-container.active').removeClass('active');
        }

        $(this).addClass('active');
        currentForm.addClass('active');
    })
});

function maskInit() {
    jQuery(".phone-mask").inputmask({
        mask: "+7(999)999-99-99",
        "clearIncomplete": true
    });

    jQuery(".date-mask").inputmask({
        mask: "99.99.9999",
        "clearIncomplete": true
    });
}

maskInit();

// test forms request

const forms = jQuery('form.contact-form__form');

forms.each(function () {
    const rules = getInputNames(jQuery(this));
    const ctxForm = $(this);
    jQuery(this).validate({
        ignore: [],
        errorClass: 'error',
        validClass: 'success',
        rules: rules,
        errorElement: 'span',
        errorPlacement: function (error, element) {
            const placement = jQuery(element).data('error');
            if (placement) {
                jQuery(placement).append(error);
            } else {
                error.insertBefore(element);
            }
        },
        submitHandler: function () {
            const loader = ctxForm.find('.loader');
            loader.addClass('active');
            const url = 'https://aeqlmvgvlxcee.elma365.ru/api/extensions/3d15932c-766e-4e91-b8ff-fed442649de2/script/ward/main/update';

            const contextObject = getNeededInputs(ctxForm);
            const userId = $('#elma-id').html();

            fetch(url, {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'Authorization': 'Bearer 8657d620-f5eb-4552-997d-d3ec43688c29',
                },
                body: JSON.stringify({
                    id: userId,
                    context: contextObject.context
                }),
            })
                .then(res => res.json())
                .then(data => {
                    console.log(data);
                    formResultHandler(data.msg, ctxForm);
                })
                .catch(function(error) {
                    console.log('Request failed', error);
                });
        }
    })
});

// end test forms request

// load user data

const elmaID = $('#elma-id').html();

try {
    getUserDataFromElma(elmaID)
        .then(res => res.json())
        .then(data => {
            const arr = Object.entries(data);
            console.log(data);

            for (const [key, value] of arr) {
                const el = $(`[data-info=${key}]`);
                el.html(value);
            }
        })
        .catch(e =>  console.log(e))
} catch (e) {
    console.log(e);
    throw e;
}

async function getUserDataFromElma(id) {
    const url = `https://aeqlmvgvlxcee.elma365.ru/api/extensions/3d15932c-766e-4e91-b8ff-fed442649de2/script/get/appgs?id=${id}`;

    return await fetch(url, {
        method: 'GET',
        headers: {
            'Content-Type': 'application/json',
            'X-Token': '8657d620-f5eb-4552-997d-d3ec43688c29',
        }
    })

}

// select

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

// checkbox

const checkboxesList = $('.contact-form__form-field.check');

checkboxesList.each(function () {

    const checks = $(this).find('input[type="checkbox"]');
    const hiddenInput = $(this).find('input[type="hidden"]');
    const customInput = $(this).find('input[type="text"]');

    checks.each(function () {
        $(this).on('change', function () {
            const is_check = $(this).prop("checked");
            const hiddenInputValue = hiddenInput.val();

            if (is_check) {

                if (!hiddenInputValue.includes($(this).val())) {

                    hiddenInput.val(`${hiddenInputValue} | ${$(this).val()}`);
                    console.log(hiddenInput.val());
                    return;
                }
                return;
            }

            if (hiddenInputValue.includes($(this).val())) {
                const newValue = hiddenInputValue.replace(` | ${$(this).val()}`, '');
                hiddenInput.val(newValue);
                console.log(hiddenInput.val());
            }
        })
    });

    customInput.on('focus', function () {
        if ($(this).val() === '') return;

        const hiddenInputValue = hiddenInput.val();
        if (hiddenInputValue.includes($(this).val())) {
            const newValue = hiddenInputValue.replace(` | ${$(this).val()}`, '');
            hiddenInput.val(newValue);
            console.log(hiddenInput.val());
        }
    });

    customInput.on('blur', function () {
        if ($(this).val() === '') return;

        const hiddenInputValue = hiddenInput.val();
        hiddenInput.val(`${hiddenInputValue} | ${$(this).val()}`);
        console.log(hiddenInput.val());
    })
});

// calendar

jQuery("#datepicker").datepicker({
    changeMonth: true,
    changeYear: true,
    showButtonPanel: true,
    minDate: new Date(90, 1 - 1, 1),
    monthNames: ['Январь', 'Февраль', 'Март', 'Апрель', 'Май', 'Июнь',
        'Июль', 'Август', 'Сентябрь', 'Октябрь', 'Ноябрь', 'Декабрь'],
    monthNamesShort: ['Янв', 'Фев', 'Мар', 'Апр', 'Май', 'Июн',
        'Июл', 'Авг', 'Сен', 'Окт', 'Ноя', 'Дек'],
    dayNames: ['воскресенье', 'понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота'],
    dayNamesShort: ['вск', 'пнд', 'втр', 'срд', 'чтв', 'птн', 'сбт'],
    dayNamesMin: ['Вс', 'Пн', 'Вт', 'Ср', 'Чт', 'Пт', 'Сб'],
    weekHeader: 'Не',
    dateFormat: 'dd.mm.yy',
    firstDay: 1,
    onSelect: function () {
        const currentDate = $(this).val();
        $('.date-mask').val(currentDate);
        jQuery("#datepicker").toggleClass('active');
    }
});

jQuery('.calendar').on('click', function () {
    $(this).toggleClass('active');
    $('#datepicker').toggleClass('active');
});

// validate



jQuery.validator.addMethod('email', function (value, element) {
    return this.optional(element) || /\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,6}/.test(value);
}, 'Некорректный e-mail');
jQuery.validator.addMethod('_name', function (value, element) {
    return this.optional(element) || /^[а-яА-ЯёЁ\s]+$/.test(value);
}, 'Введите корректное имя');

function formResultHandler(response, currentForm) {
    const loader = currentForm.find('.loader');
    // const disabler = currentForm.find('.disabler');
    const result = currentForm.find('.result');
    if (response === 'success') {
        currentForm.trigger('reset');
        result.html('Ваша анкета успешно отправлена!');
        if (result.hasClass('success')) {
            result.removeClass('success');
        }
        result.addClass('success');
        loader.removeClass('active');
        // disabler.addClass('active');
        return true;
    }

    result.html('Ошибка отправки. Проверьте данные или попробуйте позже.');
    result.addClass('err');
    loader.removeClass('active');
}

function getNeededInputs(form) {
    const inputsList = form.find('[data-elma]');
    const object = Object.create({});
    Object.defineProperty(object, 'context', {
        value: {},
        enumerable: true
    });

    inputsList.each(function () {
        if ($(this).is('select')) {

            const selectValue = $(this).val();

            if (selectValue.includes('Другое')) {
                const selectParent = $(this).parent().parent();
                const selectInput = $(selectParent).find('.select-input .select-input__input');
                const elmaName = $(this).data('elma');
                selectInput.data('elma', elmaName);

                setObjectProperty(object.context, selectInput);
                return;
            }
        }

        if ($(this).attr('type') === 'radio') {
            if (!$(this).prop('checked')) {
                return;
            }
        }

        setObjectProperty(object.context, $(this));
    });

    return object;
}

function setObjectProperty(object, elem) {
    const elmaName = elem.data('elma');

    if (elmaName === '') return;

    const value = elem.val();

    Object.defineProperty(object, elmaName, {
        value: value,
        enumerable: true
    });
}

function getInputNames(form) {
    const requiredInputs = $(form).find('[data-req="true"]');
    const items = Object.create({});
    requiredInputs.each(function () {
        const name = $(this).attr('name');

        const validation = $(this).data('validation');

        let attributes = {
            value: {
                required: true,
            }
        }

        switch (validation) {
            case 'email':
                attributes = {
                    value: {
                        required: true,
                        email: true,
                    }
                }
                break;
            case 'name':
                attributes = {
                    value: {
                        required: true,
                        _name: true,
                    }
                }
                break;
        }

        Object.defineProperty(items, name, attributes);
    });

    return items;
}

(function train() {
    const train = document.querySelector('.train');
    const input = $('.train__hide-input');
    const trainItems = [...document.querySelectorAll('.train__item_inner')];
    let start = null;
    let end = null;

    train.addEventListener('click', selectRange);

    function selectRange(e) {
        const target = e.target;

        if (!target.classList.contains('train__item_inner')) return;

        const value = parseInt(target.innerHTML);

        if (!start) {
            start = value;
            target.parentElement.classList.add('active');
            setInput(start, end);
            return;
        }

        if (start === value || end === value) {
            activeRange(0, 0);
            return;
        }

        if (start > value) {
            end = start;
            start = value;
            activeRange(start, end);
        } else if (value > start && value < end) {
            start = value;
            activeRange(start, end);
        } else {
            end = value;
            activeRange(start, end);
        }
    }

    function activeRange(start, end) {
        setInput(start, end);
        const activeItems = [...document.querySelectorAll('.train__item.active')];

        if (activeItems.length) {
            activeItems.forEach(a => a.classList.remove('active'));
        }

        if (start === end) {
            start = null;
            end = null;
            return;
        }

        trainItems.forEach(t => {
            const number = parseInt(t.innerHTML);
            if (number >= start && number <= end) t.parentElement.classList.add('active');
        })
    }

    function setInput(start = 0, end = 0) {
        const startStr = start ? start + '' : 0;
        const endStr = end ? end + '' : 0;

        if (!startStr) {
            input.val('');
            return;
        }

        if (!endStr) {
            input.val(startStr);
            return;
        }

        input.val(`${startStr}-${endStr}`);
    }
})();

// field dependencies

const fieldsRelation = $('[data-cond-relation]');

fieldsRelation.each(function () {
    const ctx = $(this);
    const conditionName = $(this).data('condRelation');
    const dependFields = $(`[data-cond-dep-name="${conditionName}"]`);

    $(this).on('change', function () {
        let value = $(this).val();

        if ($(this).attr('type') === 'checkbox') {
            value = $(this).prop('checked');
        } else if ($(this).attr('type') === 'radio') {
            value = $(this).val() === 'Да';
        }

        dependFields.each(function () {
            const needValue = $(this).data('condDepValue');

            if (needValue === value && $(this).hasClass('show')) {
                return;
            }

            if (needValue === value && !$(this).hasClass('show')) {
                $(this).addClass('show');
                return;
            }

            $(this).removeClass('show');
        })
    })
})

// yandex searh

ymaps.ready(checkAddress);

function checkAddress() {

    const addressInputs = $('input.address').parent();

    addressInputs.each(function () {

        const input = $(this).find('input');
        const id = input.attr('id');

        // Подключаем поисковые подсказки к полю ввода.
        var suggestView = new ymaps.SuggestView(id)/*,
            map,
            placemark*/;

        input.on('blur', function () {
            geocode(input);
        })
        // При клике по кнопке запускаем верификацию введёных данных.
        /*$('#button').bind('click', function (e) {
            geocode();
        });*/

    });


    function geocode(input) {
        // Забираем запрос из поля ввода.
        var request = $(input).val();

        // Геокодируем введённые данные.
        ymaps.geocode(request).then(function (res) {
            var obj = res.geoObjects.get(0),
                error, hint;

            if (obj) {
                // Об оценке точности ответа геокодера можно прочитать тут: https://tech.yandex.ru/maps/doc/geocoder/desc/reference/precision-docpage/
                switch (obj.properties.get('metaDataProperty.GeocoderMetaData.precision')) {
                    case 'exact':
                        break;
                    case 'number':
                    case 'near':
                    case 'range':
                        error = 'Неточный адрес, требуется уточнение';
                        hint = 'Уточните номер дома';
                        break;
                    case 'street':
                        error = 'Неполный адрес, требуется уточнение';
                        hint = 'Уточните номер дома';
                        break;
                    case 'other':
                    default:
                        error = 'Неточный адрес, требуется уточнение';
                        hint = 'Уточните адрес';
                }
            } else {
                error = 'Адрес не найден';
                hint = 'Уточните адрес';
            }

            // Если геокодер возвращает пустой массив или неточный результат, то показываем ошибку.
            if (error) {
                showError(input, error);
                // showMessage(input, hint);
            } else {
                // showResult(input, obj);
            }
        }, function (e) {
            console.log(e)
        })

    }

    function showResult(input, obj) {
        // Удаляем сообщение об ошибке, если найденный адрес совпадает с поисковым запросом.
        $(input).removeClass('input_error');
        const inputParent = input.parent();
        const notice = inputParent.find('.error');
        $(notice).css('display', 'none');

        var /*mapContainer = $('#map'),*/
            // bounds = obj.properties.get('boundedBy'),
            // Рассчитываем видимую область для текущего положения пользователя.
            /*mapState = ymaps.util.bounds.getCenterAndZoom(
                bounds,
                [mapContainer.width(), mapContainer.height()]
            ),*/
            // Сохраняем полный адрес для сообщения под картой.
            address = [obj.getCountry(), obj.getAddressLine()].join(', ');
        // Сохраняем укороченный адрес для подписи метки.
        // shortAddress = [obj.getThoroughfare(), obj.getPremiseNumber(), obj.getPremise()].join(' ');
        // Убираем контролы с карты.
        // mapState.controls = [];
        // Создаём карту.
        // createMap(mapState, shortAddress);
        // Выводим сообщение под картой.
        showMessage(input, address);
    }

    function showError(input, message) {
        const inputParent = input.parent();
        const notice = inputParent.find('.error');
        $(notice).text(message);
        $(input).addClass('error');
        $(notice).css('display', 'block');
        // Удаляем карту.
        /*if (map) {
            map.destroy();
            map = null;
        }*/
    }

    function createMap(state, caption) {
        // Если карта еще не была создана, то создадим ее и добавим метку с адресом.
        if (!map) {
            map = new ymaps.Map('map', state);
            placemark = new ymaps.Placemark(
                map.getCenter(), {
                    iconCaption: caption,
                    balloonContent: caption
                }, {
                    preset: 'islands#redDotIconWithCaption'
                });
            map.geoObjects.add(placemark);
            // Если карта есть, то выставляем новый центр карты и меняем данные и позицию метки в соответствии с найденным адресом.
        } else {
            map.setCenter(state.center, state.zoom);
            placemark.geometry.setCoordinates(state.center);
            placemark.properties.set({iconCaption: caption, balloonContent: caption});
        }
    }

    function showMessage(input, message) {
        const inputParent = input.parent();
        const messageHeader = inputParent.find('.messageHeader');
        const messageArea = inputParent.find('.message');
        $(messageHeader).text('Данные получены:');
        $(messageArea).text(message);
    }
}

