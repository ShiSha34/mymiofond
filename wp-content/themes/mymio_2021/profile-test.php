<?php
/**
 * Template Name: Личный кабинет тест
 */

session_start();

$is_user = $_SESSION['user_name'];

if (!$is_user) {
    $actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    header("Location: /?enter");
    exit();
}

$user_name = $_SESSION['user_name'];
$user_email = $_SESSION['user_email'];

require_once(ABSPATH . 'Scripts/connect.php');

$query = "SELECT `elma_id` FROM `custom_users` WHERE `email` = '$user_email'";
$result = $db->query($query);
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
$db->close();

get_header();
?>
    <span style="display: none;" id="elma-id"><?= $result[0]['elma_id']; ?></span>

    <main id="primary" class="site-main">

        <div class="maxwidth-theme">
            <script src="<?= get_template_directory_uri() ?>/assets/flexslider/jquery.flexslider-min.js"></script>

            <script type="text/javascript">

                jQuery(document).ready(function ($) {
                    $('#progs').flexslider({
                        animation: "slide",
                        animationLoop: false,
                        slideshow: false,
                        controlsContainer: $("#controls-progs"),
                        customDirectionNav: $("#nav-progs a"),
                        touch: true,
                        itemWidth: 320,
                        itemMargin: 25,
                        minItems: 1,
                        maxItems: 3
                    });
                });
            </script>
        </div>

        <div class="maxwidth-theme overfl">
            <div class="heading-article">
                <h1 class="without-p">Личный кабинет</h1>

                <div class="user-info">
                    <p class="user-info__caption">Личные данные</p>
                    <div class="user-info__row">
                        <p>ФИО</p>
                        <p data-info="parent_fullname"></p>
                    </div>
                    <div class="user-info__row">
                        <p>ФИО ребенка</p>
                        <p data-info="child_fullname"></p>
                    </div>
                    <div class="user-info__row">
                        <p>Диагноз</p>
                        <p data-info="pa_diagnosis"></p>
                    </div>
                    <div class="user-info__row">
                        <p>Дата рождения ребенка</p>
                        <p data-info="child_birthdate"></p>
                    </div>
                    <div class="user-info__row">
                        <p>Город</p>
                        <p data-info="city"></p>
                    </div>
                    <div class="user-info__row">
                        <p>Гражданство</p>
                        <p data-info="child_citizenship"></p>
                    </div>
                    <div class="user-info__row">
                        <p>Email</p>
                        <p data-info="email"></p>
                    </div>
                </div>

                <style>
                    .user-info {
                        margin: 20px;
                        max-width: 50%;
                    }

                    .user-info__caption {
                        font-size: 20px;
                        margin-bottom: 20px;
                    }

                    .user-info__row {
                        display: flex;
                        justify-content: space-between;
                        align-items: center;
                        margin-bottom: 15px;
                    }

                    .user-info__row p {
                        margin-bottom: 0 !important;
                        width: auto;
                    }

                    .user-info__row p:first-child {
                        font-weight: bold;
                    }
                </style>
                <a href="<?= get_home_url() . '/custom_auth/exit.php' ?>">Выйти</a>
            </div>
            <div class="lk-container">
                <div class="lk-tabs">
                    <span class="lk-tab active" data-tab="1">Основная информация</span>
                    <span class="lk-tab" data-tab="2">Медицинская анкета</span>
                    <span class="lk-tab" data-tab="3">Документы</span>
                    <span class="lk-tab" data-tab="4">Участие в программах</span>
                    <span class="lk-tab" data-tab="5">Архив мед.анкет</span>
                </div>
                <div class="lk-body">
                    <div class="lk-form active" data-form="1">
                        <section class="lk-form-container">
                            <?php
                            $form_settings = [
                                'caption' => 'Персональные данные Подопечного',
                                'submit_button' => 'Подписать и отправить',
                                'name' => 'main_info',
                                'form_fields' => [
                                    [
                                        'kind' => 'select',
                                        'required' => true,
                                        'with_input' => false,
                                        'elma_name' => 'main_ank_status',
                                        'placeholder' => 'Статус заболевания',
                                        'name' => 'status',
                                        'options' => [
                                            'Клинически подтвержден врачом',
                                            'Генетически подтвержден',
                                            'Мутация не выявлена',
                                            'Затрудняюсь отвеить',
                                        ],
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'type' => 'text',
                                        'elma_name' => 'main_ank_place_of_birth',
                                        'placeholder' => 'Место рождения',
                                        'label' => '',
                                        'name' => 'main_info_place_of_birth'
                                    ],
                                    
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'type' => 'text',
                                        'elma_name' => 'main_ank_pass_series',
                                        'placeholder' => 'Серия паспорта подопечного',
                                        'label' => '',
                                        'name' => 'pass_series'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'type' => 'text',
                                        'elma_name' => 'main_ank_pass_number',
                                        'placeholder' => 'Номер паспорта подопечного',
                                        'label' => '',
                                        'name' => 'pass_number'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'type' => 'text',
                                        'elma_name' => 'main_ank_pass_issuance',
                                        'placeholder' => 'Когда выдан?',
                                        'label' => '',
                                        'name' => 'pass_issuance'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'type' => 'text',
                                        'elma_name' => 'main_ank_pass_authority',
                                        'placeholder' => 'Наименование органа, выдавшего документ',
                                        'label' => '',
                                        'name' => 'pass_authority'
                                    ],
                                    [
                                        'kind' => 'text_block',
                                        'caption' => 'Официальный представитель подопечного',
                                        'text' => 'Если Вы старше 18 лет и заполняете анкету самостоятельно, то дальше вы указываете контакты близкого человека, с которым Фонд может поддерживать связь. Если подопечный младше 18 лет, в этом случае заполняет анкету его законный представитель, который оформлял документы с Фондом'
                                    ],
                                    [
                                        'kind' => 'select',
                                        'required' => true,
                                        'elma_name' => 'main_ank_relation',
                                        'with_input' => false,
                                        'placeholder' => 'Кем вы приходитесь подопечному?',
                                        'name' => 'relation',
                                        'options' => [
                                            'Мама',
                                            'Папа',
                                            'Опекун',
                                            'Попечитель',
                                        ],
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'elma_name' => 'main_ank_rel_pass_series',
                                        'type' => 'text',
                                        'placeholder' => 'Серия паспорта представителя',
                                        'label' => '',
                                        'name' => 'rel_pass_series'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'elma_name' => 'main_ank_rel_pass_number',
                                        'type' => 'text',
                                        'placeholder' => 'Номер паспорта представителя',
                                        'label' => '',
                                        'name' => 'rel_pass_number'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'elma_name' => 'main_ank_rel_pass_issuance',
                                        'type' => 'text',
                                        'placeholder' => 'Когда выдан?',
                                        'label' => '',
                                        'name' => 'rel_pass_issuance'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'elma_name' => 'main_ank_rel_pass_authority',
                                        'type' => 'text',
                                        'placeholder' => 'Наименование органа, выдавшего документ',
                                        'label' => '',
                                        'name' => 'rel_pass_authority'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'elma_name' => 'main_ank_rel_address_act_pred',
                                        'type' => 'text',
                                        'placeholder' => 'Адрес фактического места жительства представителя',
                                        'label' => '',
                                        'name' => 'rel_address_act_pred'
                                    ],
                                    /*[
                                        'kind' => 'input',
                                        'required' => true,
                                        'elma_name' => 'main_ank_fio_pred',
                                        'type' => 'text',
                                        'placeholder' => 'ФИО',
                                        'label' => '',
                                        'name' => 'fio_pred'
                                    ],*/
                                    [
                                        'kind' => 'input',
//                                        'required' => true,
                                        'elma_name' => 'main_ank_phone1',
                                        'type' => 'phone',
                                        'placeholder' => 'Телефон',
                                        'label' => '',
                                        'name' => 'phone1'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'type' => 'phone',
                                        'elma_name' => 'main_ank_phone22',
                                        'placeholder' => 'Резервный телефон',
                                        'label' => '',
                                        'name' => 'phone2'
                                    ],
									[
                                        'kind' => 'text_block',
                                        'caption' => 'Адрес:',
                                        'text' => 'В этом окне просим вас ввести адрес регистрации по шаблону. Пожалуйста, очень внимательно заполняйте поле. Если будут допущены ошибки, мы не сможем доставить вам адресную помощь.
<br>
Как заполнять: область, город, улица, дом, корпус, квартира
<br>
Шаблон: Московская область, город Химки, ул. Мира, д.16, корп.1, кв.33'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'required' => true,
                                        'type' => 'address',
                                        'elma_name' => 'main_ank_address_reg_pod',
                                        'placeholder' => 'Адрес регистрации',
                                        'label' => '',
                                        'name' => 'address_reg_pod'
                                    ],
                                    [
                                        'kind' => 'radio',
                                        'question' => 'Указанный адрес регистрации совпадает с адресом проживания?',
                                        'name' => '',
                                        'items' => [
                                            'Да',
                                            'Нет',
                                        ],
                                        'condition_relation' => 'diff_act_address'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'elma_name' => 'main_ank_address_act_pod',
                                        'type' => 'address',
                                        'placeholder' => 'Адрес фактического проживания',
                                        'label' => '',
                                        'name' => 'address_act_pod',

                                        'condition' => [
                                            'condition_dependency' => 'diff_act_address',
                                            'require_value' => 'false',
                                        ]
                                    ],
                                    [
                                        'kind' => 'radio',
                                        'question' => 'Указанный адрес регистрации совпадает с почтовым адресом?',
                                        'name' => '',
                                        'items' => [
                                            'Да',
                                            'Нет',
                                        ],
                                        'condition_relation' => 'diff_post_address'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'elma_name' => 'main_ank_address_mail_pod',
                                        'type' => 'address',
                                        'placeholder' => 'Почтовый адрес',
                                        'label' => '',
                                        'name' => 'address_mail_pod',

                                        'condition' => [
                                            'condition_dependency' => 'diff_post_address',
                                            'require_value' => 'false',
                                        ]
                                    ],
                                    [
                                        'kind' => 'text_block',
                                        'caption' => 'Официальный представитель подопечного',
                                        'text' => 'Если Вы старше 18 лет и заполняете анкету самостоятельно, то дальше вы указываете контакты близкого человека, с которым Фонд может поддерживать связь. Если подопечный младше 18 лет, в этом случае заполняет анкету его законный представитель, который оформлял документы с Фондом'
                                    ],
                                    [
                                        'kind' => 'select',
                                        'required' => true,
                                        'elma_name' => 'main_ank_relation',
                                        'with_input' => false,
                                        'placeholder' => 'Кем вы приходитесь подопечному?',
                                        'name' => 'relation',
                                        'options' => [
                                            'Мама',
                                            'Папа',
                                            'Опекун',
                                            'Попечитель',
                                        ],
                                    ],
                                    /*[
                                        'kind' => 'input',
                                        'required' => true,
                                        'elma_name' => 'main_ank_fio_pred',
                                        'type' => 'text',
                                        'placeholder' => 'ФИО',
                                        'label' => '',
                                        'name' => 'fio_pred'
                                    ],*/
                                    [
                                        'kind' => 'input',
//                                        'required' => true,
                                        'elma_name' => 'main_ank_phone1',
                                        'type' => 'phone',
                                        'placeholder' => 'Телефон',
                                        'label' => '',
                                        'name' => 'phone1'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'type' => 'phone',
                                        'elma_name' => 'main_ank_phone22',
                                        'placeholder' => 'Резервный телефон',
                                        'label' => '',
                                        'name' => 'phone2'
                                    ],
                                    /*[
                                        'kind' => 'input',
                                        'type' => 'text',
                                        'elma_name' => 'main_ank_email',
                                        'placeholder' => 'Электронная почта',
                                        'label' => '',
                                        'required' => true,
                                        'name' => 'email'
                                    ],*/
                                    /*[
                                        'kind' => 'input',
                                        'type' => 'address',
                                        'elma_name' => 'main_ank_address_reg_pred',
                                        'required' => true,
                                        'placeholder' => 'Адрес регистрации',
                                        'label' => '',
                                        'name' => 'address_reg_pred'
                                    ],
                                    [
                                        'kind' => 'input',
                                        'elma_name' => 'main_ank_address_act_pred',
                                        'type' => 'address',
                                        'required' => true,
                                        'placeholder' => 'Адрес проживания',
                                        'label' => '',
                                        'name' => 'address_reg__pod'
                                    ],*/
                                    /*[
                                        'kind' => 'input',
                                        'type' => 'text',
                                        'placeholder' => 'Почтовый индекс',
                                        'label' => '',
                                        'required' => true,
                                        'name' => 'postal_code',
                                    ],*/
                                ],
                            ];

                            get_template_part('/template-parts/form-template', null, $form_settings); ?>
                        </section>
                    </div>
                    <div class="lk-form" data-form="2">
                        <section class="lk-form-container">

                            <div class="lk-form__tabs">
                                <span class="lk-form__tab" data-tab="1">Общая информация о пациенте и заболевании</span>
                                <span class="lk-form__tab" data-tab="2">Неврология</span>
                                <span class="lk-form__tab" data-tab="3">Ортопедия</span>
                                <span class="lk-form__tab" data-tab="4">Реабилитация</span>
                                <span class="lk-form__tab" data-tab="5">Эндокринология</span>
                                <span class="lk-form__tab" data-tab="6">Пульмонология</span>
                                <span class="lk-form__tab" data-tab="7">Гастроэнтерология</span>
                                <span class="lk-form__tab" data-tab="8">Кардиология</span>
                                <span class="lk-form__tab" data-tab="9">Хирургические вмешательства</span>
                                <span class="lk-form__tab" data-tab="10">Социальный/Возможности среды</span>
                                <span class="lk-form__tab" data-tab="11">Социально–психологический блок</span>
                            </div>

                            <div class="lk-form__tab_content" data-form="1">
                                <?php // Общая информация о пациенте и заболевании
                                $form_settings = [
                                    'caption' => 'Общая информация о пациенте и заболевании',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '1',
                                    'name' => 'common_info',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Bозраст',
                                            'with_input' => false,
                                            'required' => true,
                                            'question' => 'Возраст постановки диагноза миодистрофия Дюшенна/Беккера',
                                            'name' => 'age',
                                            'elma_name' => 'mank_diagnosis_age_2',
                                            'options' => [
                                                '1',
                                                '2',
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                                '7',
                                                '8',
                                                '9',
                                                '10',
                                                '11',
                                                '12',
                                                '13',
                                                '14',
                                                '15',
                                                '16',
                                                '17',
                                                '18',
                                                '19',
                                                '20',
                                            ]
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'required' => true,
                                            'name' => 'find_in',
                                            'question' => 'Где впервые заподозрили диагноз миодистрофия Дюшенна/Беккера?<br>*Вам необходимо выбрать учреждение из списка. Если перечисленные варианты Вам не подходят - указжите только свой ответ',
                                            'items' => [
                                                [
                                                    'label' => 'Поликлиника',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Региональное медицинское учреждение (больница, КДЦ и др)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Федеральное медицинское учреждение (НИКИ Педиатрии, НЦЗД, РДКБ и др)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'За границей',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_first_place_2',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'required' => true,
                                            'name' => 'research_place',
                                            'question' => 'Где проводилось генетическое исследование?',
                                            'items' => [
                                                [
                                                    'label' => 'МГНЦ имени Н.П. Бочкова',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Иностранная лаборатария',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Другая государственная лаборатория (указать)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Другая коммерческая лаборатория (указать)',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_gen_research_place_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'with_input' => false,
                                            'label_for_input' => '',
                                            'placeholder' => 'Какая мутация выявлена?',
                                            'required' => true,
                                            'name' => 'mutation',
                                            'options' => [
                                                'Делеция',
                                                'Дупликация',
                                                'Миссенс',
                                                'Нонсенс',
                                                'Мутация не найдена',
                                                'Затрудняюсь ответить',
                                            ],
                                            'elma_name' => 'mank_mutation_detected_2',
                                        ],
                                        [
                                            'kind' => 'train',
                                            'question' => 'Отметьте конкретный участок гена, где произошла мутация',
                                            'required' => true,
                                            'name' => 'train',
                                            'elma_name' => 'mank_gen_select',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Есть ли среди ваших родственников случаи заболевания миодистрофией Дюшенна/Беккера?',
                                            'required' => true,
                                            'name' => 'disease_parent',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                                'Не делали диагностику',
                                            ],
                                            'elma_name' => 'mank_family_illness_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'name' => 'disease_mother',
                                            'required' => true,
                                            'question' => 'Является ли мама ребенка носительницей мутации?',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                                'Не делали диагностику',
                                            ],
                                            'elma_name' => 'mank_mother_carrier_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'name' => 'is_another_sick_children',
                                            'required' => true,
                                            'question' => 'Есть ли еще в вашей семье дети с миодистрофией Дюшенна?',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_kids_illness_2',
                                        ],
                                        [
                                            'kind' => 'text_block',
                                            'caption' => 'Сопутсвующие диагнозы',
                                            'text' => 'Если у ребенка диагностированы другие заболевания кроме миодистрофии Дюшенна/Беккера, выберите их все в данном пункте'
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'city',
                                            'placeholder' => 'Выбор из МКБ',
                                            'label' => '',
                                            'required' => false,
                                            'name' => 'mkb',
                                            'elma_name' => 'mank_accompanying_diagnosis_2',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="2">
                                <?php // Неврология
                                $form_settings = [
                                    'caption' => 'Неврология',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '2',
                                    'name' => 'neurology',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'required' => true,
                                            'name' => 'neuro_last_visit',
                                            'question' => 'Когда вы последний раз были на приеме у невролога?',
                                            'options' => [
                                                'Один раз',
                                                'Два раза',
                                                'Более двух раз',
                                                'Не были',
                                            ],
                                            'elma_name' => 'mank_neuro_last_visit_2',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'question' => 'Укажите вес ребенка в кг <br> (важно, чтобы данные были актуальными на момент заполнения)',
                                            'placeholder' => 'кг',
                                            'label' => '',
                                            'required' => true,
                                            'name' => 'weight',
                                            'elma_name' => 'mank_weight_2',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'question' => 'Укажите рост ребенка в см <br>(важно, чтобы данные были актуальными на момент заполнения)',
                                            'placeholder' => 'см',
                                            'label' => '',
                                            'required' => true,
                                            'name' => 'height',
                                            'elma_name' => 'mank_height_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'with_input' => false,
                                            'label_for_input' => '',
                                            'required' => true,
                                            'placeholder' => 'Выбрать',
                                            'name' => 'motor_capabilities_now',
                                            'question' => 'Какаие двигательные возможности у сына на данный момент? <br>1. ходит сам 2. ходит сам (но тяжело) или с поддержкой 3. пользуется инвалидным креслом (скутером или подобным). способен удерживать тело, не нужен подголовник, активно пользуется руками, сохраняет самостоятельность(?) 4. использует кресло, требуется поддержка тела и головы. использует руки, но функциональность снижена - ЕСЛИ в каждом варинате (стадии) сделать несколько признаков и если для вас справедливо 3 из 4=х, выбираете этот вариант',
                                            'options' => [
                                                'Ходит сам',
                                                'Ходит сам (но тяжело) или с поддержкой ',
                                                'Пользуется инвалидным креслом (скутером или подобным), способен удерживать тело, не нужен подголовник, активно пользуется руками',
                                                'Использует кресло, требуется поддержка тела и головы. использует руки, но функциональность снижена',
                                            ],
                                            'elma_name' => 'mank_motor_abilities_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'required' => true,
                                            'name' => 'mank_neuro_lost_ability',
                                            'question' => 'В каком возрасте ваш сын потерял способность самостоятельной ходьбы?',
                                            'options' => [
                                                '6',
                                                '7',
                                                '8',
                                                '9',
                                                '10',
                                                '11',
                                                '12',
                                                '13',
                                                '14',
                                                '15',
                                                '16',
                                                '17',
                                            ],
                                            'elma_name' => 'mank_neuro_lost_ability',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'required' => true,
                                            'question' => 'Получает ли ребенок стероидную терапию (преднизолон/дефлазакорт)?',
                                            'name' => 'steroid_therapy',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_neuro_steroids_2',
                                        ],
                                        [
                                            'kind' => 'textarea',
                                            'placeholder' => 'Укажите схему приема и дозировку',
                                            'label' => '',
                                            'name' => 'steroid_therapy_amount',
                                            'elma_name' => 'mank_neuro_steroids_treatment_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Bозраст',
                                            'with_input' => false,
                                            'question' => 'С какого возраста начали применение терапии?',
                                            'name' => 'steroid_therapy_since',
                                            'options' => [
                                                '2',
                                                '3',
                                                '4',
                                                '5',
                                                '6',
                                                '7',
                                                '8',
                                                '9',
                                                '10',
                                                '11',
                                                '12',
                                                '13',
                                                '14',
                                                '15',
                                            ],
                                            'elma_name' => 'mank_neuro_treatment_start_age_2',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'question' => 'Наблюдаются ли побочные эффекты от стероидной терапии?',
                                            'name' => 'steroid_therapy_side_effects',
                                            'is_input_exist' => true,
                                            'items' => [
                                                [
                                                    'label' => 'Набор веса и ожирение',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => '"Луннообразное лицо"',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Повышенная волосатость',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Прыщи, грибковые кожные инфекции, бородавки',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Низкий рост',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Задержка полового созревания',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Неблагоприятные поведенческие изменения',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Подавление иммунитета',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Высокое кровяное давление',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Гастрит',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Язвенная болезнь',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Катаракта',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Остеопороз',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Изменение цвета мочи',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Другое (указать)',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_neuro_treatment_side_effects_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Есть ли у вас опыт иной (генной или клеточной) терапии?',
                                            'name' => 'mank_neuro_gen_therapy',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_neuro_gen_therapy',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'placeholder' => 'Вид применяемой терапии',
                                            'label' => 'Укажите, пожалуйста, вид применяемой терапии',
                                            'required' => false,
                                            'name' => 'mank_neuro_gen_therapy_type',
                                            'elma_name' => 'mank_neuro_gen_therapy_type'
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'placeholder' => 'Укажите месяц и год',
                                            'label' => 'Когда вы начали применение такой терапии? Укажите месяц и год',
                                            'required' => false,
                                            'name' => 'mank_neuro_gen_therapy_start',
                                            'elma_name' => 'mank_neuro_gen_therapy_start'
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Проводилось ли исследование мышечной силы ребенку?',
                                            'name' => 'muscle_strength',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_neuro_muscle_study_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Укажите балл мышечной силы рук при его наличии',
                                            'name' => 'mank_neuro_muscle_study_ball',
                                            'options' => [
                                                '1',
                                                '2',
                                                '3',
                                                '4',
                                                '5',
                                            ],
                                            'elma_name' => 'mank_neuro_muscle_study_ball',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'question' => 'Ребенок говорит о наличии у него болезненных ощущений? Если да, то о каких',
                                            'is_input_exist' => false,
                                            'required' => true,
                                            'name' => 'mank_pain_symptoms_2',
                                            'items' => [
                                                [
                                                    'label' => 'Боль в руках',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Боль в ногах',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Боль в спине',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Болит в груди',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Болит живот',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Не испытывает болезненные ощущения',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_pain_symptoms_2',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="3">
                                <?php // Ортопедия
                                $form_settings = [
                                    'caption' => 'Ортопедия',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '3',
                                    'name' => 'orthopedics',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Сколько раз за последний год вы были на приеме у ортопеда?',
                                            'required' => true,
                                            'name' => 'mank_orotho_last_visit_2',
                                            'options' => [
                                                'Один раз',
                                                'Два раза',
                                                'Более двух раз',
                                                'Не были',
                                            ],
                                            'elma_name' => 'mank_endo_last_visit_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'required' => true,
                                            'question' => 'Проводилась ли рентгенография грудного и поясничного отдела позвоночников в боковой проекции за последний год?',
                                            'name' => 'mank_orotho_xray_chest_2',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_orotho_xray_chest_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Есть ли у ребенка сколиоз?',
                                            'required' => true,
                                            'name' => 'is_scoliosis',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                                'Не знаю',
                                            ],
                                            'elma_name' => 'mank_orotho_scoliosis_2',
                                        ],
                                        [
                                            'kind' => 'textarea',
                                            'question' => 'Укажите степень и угол сколиоза при наличии (обычно указывается в выписке от ортопеда)',
                                            'placeholder' => 'Укажите степень и угол сколиоза',
                                            'label' => 'Укажите степень и угол сколиоза',
                                            'name' => 'scoliosis',
                                            'elma_name' => 'mank_orotho_scoliosis_details_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Ребёнок используете корсет?',
                                            'name' => 'is_corset',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_orothoscoliosis_corset_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Есть ли у вашего сына контрактуры?',
                                            'name' => 'is_contracture',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_orotho_contracture_2',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'name' => 'corset_kind',
                                            'question' => 'Перечислите, в каких именно местах контрактуры сформировались/ухудшились за последний год',
                                            'items' => [
                                                [
                                                    'label' => 'правая кисть/левая кисть',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'правый локоть/левый локоть',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'правое плечо/левое плечо',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'правая стопа/левая стопа',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'правое колено/левое колено',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'правое бедро/левое бедро',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_orotho_contracture_details_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Вы используете ортезы/тутора на голени/на кисти?',
                                            'name' => 'is_orthoses',
                                            'required' => true,
                                            'options' => [
                                                'Да, используем на руки',
                                                'Да, используем на ноги',
                                                'Да, используем на руки и на ноги',
                                                'Нет, не используем',
                                            ],
                                            'elma_name' => 'mank_orotho_orthosis_2',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="4">
                                <?php //Реабилитация
                                $form_settings = [
                                    'caption' => 'Реабилитация',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '4',
                                    'name' => 'reabilitation',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Сколько раз ребенок был консультирован физическим терапевтом (вопросы ТСР и физических упражнений\растяжек) за последний год?',
                                            'required' => true,
                                            'name' => 'mank_rehab_consult',
                                            'options' => [
                                                'Один раз',
                                                'Два раза',
                                                'Более двух раз',
                                                'Не были',
                                            ],
                                            'elma_name' => 'mank_rehab_consult',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Делаете ли вы с ребенком профилактические растяжки?',
                                            'required' => true,
                                            'name' => 'mank_rehab_stretching',
                                            'options' => [
                                                'Нет, не делаем',
                                                'Делаем редко, не чаще одного раза в месяц',
                                                'Делаем регулярно, 4-6 раз в неделю',
                                                'Ежедневно',
                                            ],
                                            'elma_name' => 'mank_rehab_stretching',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'required' => true,
                                            'name' => 'tcp_have',
                                            'question' => 'Какие технические средства реабилитации (ТСР) рекомендованы сыну?',
                                            'items' => [
                                                [
                                                    'label' => 'Опора для стояния/вертикализатор',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло–коляска активная (ребенок сам колеса крутит)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло коляска пассивная (предназначены для переевозки людей)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло–коляска с электроприводом',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Подьемник',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло-подставка в ванную',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Санитарное кресло-стул',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Медицинская функциональная кровать',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Ничего из пречисленного"',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_rehab_devices',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'required' => true,
                                            'name' => 'tcp_use',
                                            'question' => 'Какими средствами технической реабилитации (ТСР) пользуется ваш сын? ',
                                            'items' => [
                                                [
                                                    'label' => 'Опора для стояния/вертикализатор',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло–коляска активная (ребенок сам колеса крутит)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло коляска пассивная (предназначены для переевозки людей)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло–коляска с электроприводом',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Подьемник',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Кресло-подставка в ванную',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Санитарное кресло-стул',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Медицинская функциональная кровать',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Ничего из пречисленного"',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_rehab_devices_used',
                                        ],
                                    ]
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="5">
                                <?php // Эндокринология
                                $form_settings = [
                                    'caption' => 'Эндокринология',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '5',
                                    'name' => 'endocrinology',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Сколько раз за последний год вы были на приеме у эндокринолога?',
                                            'required' => true,
                                            'name' => 'endo_last_visit',
                                            'options' => [
                                                'Один раз',
                                                'Два раза',
                                                'Более двух раз',
                                                'Не были',
                                            ],
                                            'elma_name' => 'mank_endo_last_visit'
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Когда последний раз ребенок проходил денситометрию (диагностика плотности костной ткани)?',
                                            'required' => true,
                                            'name' => 'last_densitometry',
                                            'options' => [
                                                'Никогда не проходил',
                                                'Менее одного года назад',
                                                'Более одного года назад',
                                            ],
                                            'elma_name' => 'mank_endo_densio'
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Результат денситометрии',
                                            'name' => 'densitometry_result',
                                            'options' => [
                                                'Остеопороз не выявлен',
                                                'Оостеопороз выявлен, степень не указана',
                                                'Остеопороз/остеопения выявлен, степень (указать)',
                                            ],
                                            'elma_name' => 'mank_endo_densio_result'
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Проводилась ли вашему сыну оценка полового развития? 
<br>
пубертатного статуса (лучше полового развития-она так, кмк , называетс/пишется по шкале стадий Таннера?',
                                            'name' => 'is_sex_evolve_value',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                                'Затрудняюсь ответить',
                                            ],
                                            'elma_name' => 'mank_endo_pubert_test'
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Соответсвует половое развитие возрастной норме?',
                                            'name' => 'is_sex_evolve_norm',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                                'Затрудняюсь ответить',
                                            ],
                                            'elma_name' => 'mank_endo_pubert_test_result'
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Проводилось ли измерение роста',
                                            'name' => 'mank_endo_height_measure',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                                'Затрудняюсь ответить',
                                            ],
                                            'elma_name' => 'mank_endo_height_measure'
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="6">
                                <?php // Пульмонология
                                $form_settings = [
                                    'caption' => 'Пульмонология',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '6',
                                    'name' => 'pulmonology',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Сколько раз за последний год вы были на приеме у пульмонолога?',
                                            'required' => true,
                                            'name' => 'pulmo_last_visit',
                                            'options' => [
                                                'Один раз',
                                                'Два раза',
                                                'Более двух раз',
                                                'Не были',
                                            ],
                                            'elma_name' => 'mank_pulmo_last_visit_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => true,
                                            'question' => 'Сопровождает ли ребенка специалист по респираторной поддержке на регулярной основе?
<br><br>
Выберите подходящие варианты. Обычно это пульмонолог или врач-реаниматолог, но у вас может оказаться свой вариант ответа',
                                            'name' => 'is_specialist_support',
                                            'required' => true,
                                            'options' => [
                                                'Нет, т.к. в этом нет необходимости',
                                                'Нуждаемся, но нет специалиста',
                                                'Ребенка сопровождает пульмонолог',
                                                'Ребенка сопровождает врач-реаниматолог',
                                            ],
                                            'elma_name' => 'mank_pulmo_specialist_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'За последний год вы проходили исследование функции внешнего дыхания (ФВД)?',
                                            'name' => 'last_fvd',
                                            'required' => true,
                                            'options' => [
                                                'Нет',
                                                'Да, один раз',
                                                'Да, более одного раза',
                                            ],
                                            'elma_name' => 'mank_pulmo_breath_res_last_2',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'placeholder' => 'ФЖЕЛ',
                                            'required' => true,
                                            'question' => 'Введите показатели ФЖЕЛ (форсированная жизненная емкость легких)',
                                            'label' => 'fjel',
                                            'name' => '',
                                            'elma_name' => 'mank_pulmo_breath_res_FJEL_2',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'required' => true,
                                            'placeholder' => 'ЖЕЛ',
                                            'question' => 'Введите показатели ЖЕЛ (жизненная емкость легких)',
                                            'label' => '',
                                            'name' => 'jel',
                                            'elma_name' => 'mank_pulmo_breath_res_JEL_2',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'placeholder' => 'ПКС',
                                            'question' => 'Ведители показатели — ПКС (пиковая скорость кашля)',
                                            'label' => '',
                                            'required' => true,
                                            'name' => 'pks',
                                            'elma_name' => 'mank_pulmo_breath_res_PKS_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Проводилось ребенку исследование сна (полисомнография, кардиомониторинг, ночная пульсоксометрия и под.)',
                                            'required' => true,
                                            'name' => 'mank_pulmo_breath_dream_research',
                                            'options' => [
                                                'Нет',
                                                'Да, один раз',
                                                'Да, более одного раза',
                                            ],
                                            'elma_name' => 'mank_pulmo_breath_dream_research',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Наблюдалось ли падение сатурации ниже 95% , если есть информация за прошедший год?',
                                            'required' => true,
                                            'name' => 'mank_pulmo_saturation    ',
                                            'options' => [
                                                'Да',
                                                'Нет',
                                                'Затрудняюсь ответить',
                                            ],
                                            'elma_name' => 'mank_pulmo_saturation   ',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'question' => 'Жалуется ли ваш ребенок на (отметьте нужное)',
                                            'required' => true,
                                            'name' => 'problems_list',
                                            'items' => [
                                                [
                                                    'label' => 'Чувствует себя более уставшим, чем обычно, или сонным в течение дня',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Не хватает дыхания или с трудом заканчивает предложения',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Утренние головные боли (после пробуждения)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Проблемы со сном, часто просыпается, испытывает трудности с просыпанием или видит ночные кошмары',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'роснувшись, пытается отдышаться или чувствует, как колотится сердце',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'У ребенка проблемы с вниманием в течение дня дома или в школе',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Ничего из перечисленного',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_pulmo_symptoms_2',
                                        ],
                                        [
                                            'kind' => 'checkbox',
                                            'question' => 'Какие медицинские приборы вы используете?',
                                            'is_input_exist' => true,
                                            'required' => true,
                                            'name' => 'use_medical_devices',
                                            'items' => [
                                                [
                                                    'label' => 'Пульсоксиметр',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Мешок Амбу',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Аспиратор',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Откашливатель',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Ничего из перечисленного не используем"',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Другое (указать)',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_pulmo_med_devices_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Делаете ли вы дыхательную гимнастику с сыном?',
                                            'name' => 'breath_exercises',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_pulmo_gym',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'указать',
                                            'with_input' => true,
                                            'question' => 'Как именно делаете дыхательную гимнастику?',
                                            'required' => true,
                                            'name' => 'mank_pulmo_gym_fact',
                                            'options' => [
                                                'С мешком Амбу',
                                                'На откашливателе',
                                                'Используем ручные техники',
                                            ],
                                            'elma_name' => 'mank_pulmo_gym_fact',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Использует ли ваш сын аппарат вентиляции легких?',
                                            'name' => 'is_ivl',
                                            'required' => true,
                                            'options' => [
                                                'Не использует',
                                                'Да, использует НИВЛ',
                                                'Да, использует ИВЛ',
                                            ],
                                            'elma_name' => 'mank_pulmo_nivl_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => true,
                                            'question' => 'Сколько часов вентиляции требуется вашему сыну?',
                                            'name' => 'mank_pulmo_nivl_time',
                                            'required' => true,
                                            'options' => [
                                                'Дышит всю ночь',
                                                'Дышит немного ночью',
                                                'Дышит ночью и немного днем',
                                            ],
                                            'elma_name' => 'mank_pulmo_nivl_time',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Может ли сын быть на спонтанном дыхании (когда аппарат выключен)?',
                                            'name' => 'mank_pulmo_breath_ability',
                                            'required' => true,
                                            'options' => [
                                                'Не знаем',
                                                'Не может',
                                                'Может*',
                                            ],
                                            'elma_name' => 'mank_pulmo_breath_ability',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="7">
                                <?php // Гастроэнтерология
                                $form_settings = [
                                    'caption' => 'Гастроэнтерология',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '7',
                                    'name' => 'gastroenterology',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Сколько раз за последний год вы были на приеме у гастроэнтеролога?',
                                            'required' => true,
                                            'name' => 'gastro_last_visit',
                                            'options' => [
                                                'Один раз',
                                                'Два раза',
                                                'Более двух раз',
                                                'Не были',
                                            ],
                                            'elma_name' => 'mank_gastro_last_visit_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'required' => true,
                                            'name' => 'is_problems',
                                            'with_input' => true,
                                            'question' => 'Отметьте (если есть жалобы на) гастроэнтерологические проблемы ребенка?',
                                            'options' => [
                                                'Запоры',
                                                'Гастрит',
                                                'Язва желудка',
                                                'Отрыжка',
                                                'Запах изо рта',
                                                'Боли в животе',
                                            ],
                                            'elma_name' => 'mank_gastro_symptoms_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'is_input_exist' => true,
                                            'question' => 'Как питается сын в настоящий момент?',
                                            'required' => true,
                                            'name' => 'eat',
                                            'options' => [
                                                'Ест обычную пищу',
                                                'Используем блендированную пищу',
                                                'Используем лечебное питание',
                                            ],
                                            'elma_name' => 'mank_gastro_current_diet_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Наблюдается потеря веса за последний год?',
                                            'with_input' => false,
                                            'required' => true,
                                            'name' => 'weight_problem',
                                            'options' => [
                                                'Нет, потери веса не наблюдается',
                                                'Да, незначительно (указать насколько похудел - кг)',
                                                'Да, потеря веса значительна (указать, насколько похудел -кг)',
                                                'Затрудняюсь ответить',
                                            ],
                                            'elma_name' => 'mank_gastro_weight_loss_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'required' => true,
                                            'with_input' => true,
                                            'question' => 'Увеличилось ли время приема пищи?',
                                            'name' => 'gulp_problems',
                                            'options' => [
                                                'Нет, ест как и прежде',
                                                'Время приема пищи увеличилось, но незначительно',
                                                'Стало гораздо труднее принимать пищу, время значительно увеличилось',
                                            ],
                                            'elma_name' => 'mank_gastro_dinner_time_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'required' => true,
                                            'with_input' => false,
                                            'question' => 'Проводилось ли УЗИ органов брюшной полости за последний год?',
                                            'name' => 'mank_gastro_uzi',
                                            'options' => [
                                                'Нет',
                                                'Да, один раз',
                                                'Да, более одного раза',
                                            ],
                                            'elma_name' => 'mank_gastro_uzi',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="8">
                                <?php // Кардиология
                                $form_settings = [
                                    'caption' => 'Кардиология',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '8',
                                    'name' => 'cardiology',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Сколько раз за последний год вы были на приеме у кардиолога?',
                                            'required' => true,
                                            'name' => 'mank_cardio_last_visit_2',
                                            'options' => [
                                                'Один раз',
                                                'Два раза',
                                                'Более двух раз',
                                                'Не были',
                                            ],
                                            'elma_name' => 'mank_cardio_last_visit_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Получает ли ребенок кардиологическую терапию?',
                                            'required' => true,
                                            'name' => 'is_cardio_therapy',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_cardio_therapy_2',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'placeholder' => 'Если сын получал кардиологическую терапию раньше, а сейчас она отменена, укажите, пожалуйста, причину',
                                            'label' => 'Причина',
                                            'required' => false,
                                            'name' => 'mank_cardio_therapy_cancel',
                                            'elma_name' => 'mank_cardio_therapy_cancel'
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Когда проводилась УЗИ сердца (Эхо-КГ) последний раз?',
                                            'required' => true,
                                            'name' => 'heart_ultrasound',
                                            'options' => [
                                                '0-6 месяцев назад',
                                                '6-12 месяцев назад',
                                                'Более года назад',
                                                'Никогда',
                                            ],
                                            'elma_name' => 'mank_cardio_uzi_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'with_input' => false,
                                            'question' => 'Когда проводилось сердечно–сосудистая МРТ последний раз?',
                                            'required' => true,
                                            'name' => 'heart_mrt',
                                            'options' => [
                                                '0-6 месяцев назад',
                                                '6-12 месяцев назад',
                                                'Более года назад',
                                                'Никогда',
                                            ],
                                            'elma_name' => 'mank_cardio_mrt_2',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="9">
                                <?php // Хирургические вмешательства
                                $form_settings = [
                                    'caption' => 'Хирургические вмешательства',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '9',
                                    'name' => 'surgery',
                                    'form_fields' => [
                                        [
                                            'kind' => 'radio',
                                            'required' => true,
                                            'name' => 'is_surgery',
                                            'question' => 'Были ли у ребенка операции за последний год?',
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_surgery_state_2',
                                        ],
                                        [
                                            'kind' => 'input',
                                            'type' => 'text',
                                            'placeholder' => '',
                                            'question' => 'По какому поводу проводилось хирургическое вмешательство?',
                                            'label' => '',
                                            'name' => 'surgery_reason',
                                            'elma_name' => 'mank_surgery_state_fact_2',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="10">
                                <?php // Социальный/Возможности среды
                                $form_settings = [
                                    'caption' => 'Социальный/Возможности среды',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '10',
                                    'name' => 'social_env',
                                    'form_fields' => [
                                        [
                                            'kind' => 'checkbox',
                                            'required' => true,
                                            'name' => 'education_form',
                                            'question' => 'Форма обучения',
                                            'is_input_exist' => true,
                                            'items' => [
                                                [
                                                    'label' => 'Детский сад',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Очное обучение в школе',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Дистанционная форма (занимается с учителем и/или вместе с классом через интернет)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Заочная форма  (изучает дома сам, затем сдает экзамены)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Смешанная форма (очно-заочная, очно-дистанционная)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Домашнее обучение (учителя приходят на дом)',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Не обучается',
                                                    'name' => ''
                                                ],
                                                [
                                                    'label' => 'Другое (указать)',
                                                    'name' => ''
                                                ],
                                            ],
                                            'elma_name' => 'mank_social_studyform_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'question' => 'Насколько часто получется у вашего сына общаться со сверстниками?',
                                            'with_input' => true,
                                            'required' => true,
                                            'name' => 'conversation_frequent',
                                            'options' => [
                                                'Регулярно, проблем с общением не испытывает',
                                                'Бывают отдельные встречи, но не могу сказать, что общение удается поддерживать регулярно',
                                                'Сын почти ни с кем из сверстников не общается',
                                            ],
                                            'elma_name' => 'mank_social_connection_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'question' => 'Приспособлено ли место, где вы живете (квартира, дом)  для людей с инвалидностью ?',
                                            'with_input' => false,
                                            'name' => 'adapted_adapt',
                                            'required' => true,
                                            'options' => [
                                                'Да',
                                                'Нет (напишите, пожалуйста, что конкретно не приспособлено)',
                                                'Затрудняюсь ответить',
                                            ],
                                            'elma_name' => 'mank_social_adapt_2',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                            <div class="lk-form__tab_content" data-form="11">
                                <?php // Социально–психологический блок
                                $form_settings = [
                                    'caption' => 'Социально–психологический блок',
                                    'submit_button' => 'Продолжить',
                                    'tab' => '11',
                                    'name' => 'social_block',
                                    'form_fields' => [
                                        [
                                            'kind' => 'select',
                                            'placeholder' => 'Выбрать',
                                            'question' => 'Как вы оцениваете психологическое состояние сына?',
                                            'with_input' => false,
                                            'name' => 'state_valuation',
                                            'required' => true,
                                            'options' => [
                                                'Удовлетворительно',
                                                'Оно меня немного тревожит',
                                                'Я сильно беспокоюсь о его психологическом состоянии',
                                            ],
                                            'elma_name' => 'mank_psy_state_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Получает ли сын поддержку психолога в настоящий момент?',
                                            'name' => 'psychologist_support',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                            ],
                                            'elma_name' => 'mank_psy_support_2',
                                        ],
                                        [
                                            'kind' => 'radio',
                                            'question' => 'Как вы считаете, есть ли психологическое напряжение в вашей семье? ',
                                            'name' => 'family_psychology_problem',
                                            'required' => true,
                                            'items' => [
                                                'Да',
                                                'Нет',
                                                'Затрудняюсь отвеить',
                                            ],
                                            'elma_name' => 'mank_psy_pressure_2',
                                        ],
                                        [
                                            'kind' => 'select',
                                            'name' => 'psychologist_support_parent',
                                            'placeholder' => 'Выбрать',
                                            'question' => 'Получаете ли вы поддержку от психолога/психотерапевта?',
                                            'with_input' => false,
                                            'options' => [
                                                'Да, я нахожусь в терапии',
                                                'Нет, мне это не нужно',
                                                'Получаю, но мне этого не достаточно',
                                            ],
                                            'elma_name' => 'mank_psy_personal_support_2',
                                        ],
                                    ],
                                ];

                                get_template_part('/template-parts/form-template', null, $form_settings); ?>
                            </div>

                        </section>
                    </div>
                    <div class="lk-form" data-form="3">
                        <p>Форма 3</p>
                    </div>
                    <div class="lk-form" data-form="4">
                        <p>Форма 4</p>
                    </div>
                    <div class="lk-form" data-form="5">
                        <p>Форма 5</p>
                    </div>
                    <div class="lk-form" data-form="6">
                        <p>Форма 6</p>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- #main -->

<?php
get_footer();