<?php
$object = $args['object'];
$field_idx = $args['field_idx'];
$form_index = $args['form_index'];
$items = $object['items'];
$elmaName = $object['elma_name'];
$form_name = $args['form_name'];
$_name = $object['name'] ? $form_name . '_' . $object['name'] : '';
$required = $object['required'];
$question = $object['question'];
$is_input_exist = $object['is_input_exist'];
$input_label = $object['input_label'];

if ($question) : ?>
    <p class="contact-form__form-field_note"><?= $question; ?></p>
<?php endif; ?>

<div class="contact-form__form-field check">

<?php foreach ($items as $key => $item) :
    $field_name = $item['name'];
    $label = $item['label'];
    $condition_relation = $item['condition_relation'];
    ?>

    <input type="checkbox"
           id="<?= $field_name ? $field_name : $form_index . '_' . $field_idx . '_' . $key; ?>"
           <?php if ($condition_relation) : ?>
           data-cond-relation="<?= $condition_relation; ?>"
           <?php endif; ?>
           value="<?= $label; ?>"
           class="contact-form__input checkbox">
    <label for="<?= $field_name ? $field_name : $form_index . '_' . $field_idx . '_' . $key; ?>"
           class="contact-form__label checkbox"><?= $label; ?></label>

<?php endforeach; ?>

    <?php if ($is_input_exist) : ?>
      <div class="checkbox-input">
        <input type="text"
               class="select-input__input">
        <label class="contact-form__label">Указать</label>
      </div>
    <?php endif; ?>

    <input type="hidden"
           data-elma="<?= $elmaName; ?>"
          <?php if ($required) : ?>
          data-req="true"
          <?php endif;?>
           name="<?= $_name; ?>">

</div>
