<?php defined('_JEXEC') or die; ?>
<table>
	<tbody>
		<tr>
			<th style="width:30%; text-align: left;">
				<?php echo JText::_( 'JT_FORMULATOR_DEFAULT_FORM_NAME_LABEL' ); ?>:
			</th>
			<td><?php echo $form->getValue('name'); ?></td>
		</tr>
		<tr>
			<th style="width:30%; text-align: left;">
				<?php echo JText::_( 'JT_FORMULATOR_DEFAULT_FORM_EMAIL_LABEL' ); ?>
			</th>
			<td><?php echo $form->getValue('email'); ?></td>
		</tr>
		<tr>
			<th style="width:30%; text-align: left;">
				<?php echo JText::_( 'JT_FORMULATOR_DEFAULT_FORM_MESSAGE_LABEL' ); ?>
			</th>
			<td><?php echo $form->getValue('message'); ?></td>
		</tr>
	</tbody>
</table>
