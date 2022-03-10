<?php
$object = $args['object'];
$is_input_exist = $object['with_input'];
$placeholder = $object['placeholder'];
$required = $object['required'];
$elmaName = $object['elma_name'];
$field_name = $object['name'];
$input_label = null;
$options = $object['options'];
if ($is_input_exist) {
  $input_label = $object['label_for_input'] ? $object['label_for_input'] : $placeholder;
}
$question = $object['question'];

if ($question) : ?>
  <p class="contact-form__form-field_note"><?= $question; ?></p>
<?php endif; ?>

<div class="contact-form__form-field">
  <div class="select">
    <select name="<?= $field_name; ?>"
            data-elma="<?= $elmaName; ?>"
            <?php if ($required) : ?>
              data-req="true"
            <?php endif;?>
            data-placeholder="<?= $placeholder; ?>"
            id="<?= $field_name; ?>">
      <option value=""></option>
      <?php foreach ($options as $option) : ?>
      <option value="<?= $option; ?>"><?= $option; ?></option>
      <?php endforeach;

      if ($is_input_exist) : ?>
      <option value="Другое">Другое (указать)</option>
      <?php endif; ?>
    </select>
  </div>
  <?php if ($is_input_exist) : ?>
  <div class="select-input">
    <input type="text"
           class="select-input__input">
    <label class="contact-form__label"><?= $input_label; ?></label>
  </div>
  <?php endif; ?>
</div>