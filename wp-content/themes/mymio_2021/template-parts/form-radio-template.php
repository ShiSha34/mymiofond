<?php
$object = $args['object'];
$field_idx = $args['field_idx'];
$required = $object['required'];
$elmaName = $object['elma_name'];
$form_index = $args['form_index'];
$items = $object['items'];
$question = $object['question'];
$field_name = $object['name'] ? $object['name'] : $form_index . '_' . $field_idx;
$condition_relation = $object['condition_relation'];

if ($question) : ?>
    <p class="contact-form__form-field_note"><?= $question; ?></p>
<?php endif; ?>

<div class="contact-form__form-field radio">

    <?php foreach ($items as $key => $item) : ?>

        <input type="radio"
               value="<?= $item; ?>"
               data-elma="<?= $elmaName; ?>"
               <?php if ($required && ($key == 1)) : ?>
               data-req="true"
               <?php endif;?>
                <?php if ($condition_relation) : ?>
                  data-cond-relation="<?= $condition_relation; ?>"
                <?php endif; ?>
               name="<?= $field_name; ?>"
               id="<?= $form_index . '_' . $field_idx . '_' . $key; ?>"
               class="contact-form__input checkbox">
        <label for="<?= $form_index . '_' . $field_idx . '_' . $key; ?>"
               class="contact-form__label checkbox"><?= $item; ?></label>

    <?php endforeach; ?>

</div>
