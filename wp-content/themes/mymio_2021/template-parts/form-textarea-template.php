<?php
$object = $args['object'];
$field_type = $object['type'];
$required = $object['required'];
$field_name = $object['name'];
$elmaName = $object['elma_name'];
$placeholder = $object['placeholder'];
$label = $object['label'] ? $object['label'] : $object['placeholder'];

$question = $object['question'];

if ($question) : ?>
  <p class="contact-form__form-field_note"><?= $question; ?></p>
<?php endif; ?>

<div class="contact-form__form-field">
    <textarea name="<?= $field_name; ?>"
              data-elma="<?= $elmaName; ?>"
              id="<?= $field_name; ?>"
              <?php if ($required) : ?>
              data-req="true"
              <?php endif;?>
              placeholder="<?= $placeholder ?>"
              class="contact-form__input"></textarea>
    <label for="<?= $field_name; ?>" class="contact-form__label"><?= $label; ?></label>
</div>
