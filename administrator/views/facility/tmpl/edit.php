<?php
/**
 * @version     2.0
 * @package     com_facilities
 * @copyright   Copyright (C) 2011. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 * @author      Created by com_combuilder - http://www.notwebdesign.com
 */

// no direct access
defined('_JEXEC') or die;

JHtml::_('behavior.tooltip');
JHtml::_('behavior.formvalidation');
?>
<script type="text/javascript">
	Joomla.submitbutton = function(task)
	{
		if (task == 'facility.cancel' || document.formvalidator.isValid(document.id('facility-form'))) {
			Joomla.submitform(task, document.getElementById('facility-form'));
		}
		else {
			alert('<?php echo $this->escape(JText::_('JGLOBAL_VALIDATION_FORM_FAILED'));?>');
		}
	}
</script>

<form action="<?php echo JRoute::_('index.php?option=com_facilities&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="facility-form" class="form-validate">
	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?php echo JText::_('COM_FACILITIES_LEGEND_FACILITY'); ?></legend>
			<ul class="adminformlist">

            
			<li><?php echo $this->form->getLabel('id'); ?>
			<?php echo $this->form->getInput('id'); ?></li>

            
			<li><?php echo $this->form->getLabel('name'); ?>
			<?php echo $this->form->getInput('name'); ?></li>

            
			<li><?php echo $this->form->getLabel('streetaddress'); ?>
			<?php echo $this->form->getInput('streetaddress'); ?></li>

            
			<li><?php echo $this->form->getLabel('hoursofoperation'); ?>
			<?php echo $this->form->getInput('hoursofoperation'); ?></li>

            
			<li><?php echo $this->form->getLabel('businesshoursphone'); ?>
			<?php echo $this->form->getInput('businesshoursphone'); ?></li>

            
			<li><?php echo $this->form->getLabel('email'); ?>
			<?php echo $this->form->getInput('email'); ?></li>

            
			<li><?php echo $this->form->getLabel('longitude'); ?>
			<?php echo $this->form->getInput('longitude'); ?></li>

            
			<li><?php echo $this->form->getLabel('latitude'); ?>
			<?php echo $this->form->getInput('latitude'); ?></li>

            
			<li><?php echo $this->form->getLabel('maplink'); ?>
			<?php echo $this->form->getInput('maplink'); ?></li>

            

            <li><?php echo $this->form->getLabel('state'); ?>
                    <?php echo $this->form->getInput('state'); ?></li><li><?php echo $this->form->getLabel('checked_out'); ?>
                    <?php echo $this->form->getInput('checked_out'); ?></li><li><?php echo $this->form->getLabel('checked_out_time'); ?>
                    <?php echo $this->form->getInput('checked_out_time'); ?></li>

            </ul>
		</fieldset>
	</div>


	<input type="hidden" name="task" value="" />
	<?php echo JHtml::_('form.token'); ?>
	<div class="clr"></div>
</form>