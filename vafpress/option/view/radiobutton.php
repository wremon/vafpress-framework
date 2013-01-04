<tr class="vp-radiobutton<?php echo ($container_extra_classes) ? ' ' . $container_extra_classes : '' ?>" <?php echo VP_Util_Text::print_if_exists($validation, 'data-vp-validation="%s"'); ?> id="<?php echo $name; ?>">
	<td class="label">
		<label>
			<?php echo $label; ?>
			<?php VP_Util_Text::print_if_exists($description, '<div class="description">%s</div>'); ?>
		</label>
	</td>
	<td class="fields">
		<p>
			<?php foreach ($items as $item): ?>
			<label>
				<input <?php if($item->value == $value) echo "checked" ?> type="radio" name="<?php echo $name; ?>" value="<?php echo $item->value; ?>" />
				<span></span><?php echo $item->label; ?>
			</label>
			<?php endforeach; ?>
		</p>
		<div class="validation-msgs"><ul></ul></div>
	</td>
</tr>