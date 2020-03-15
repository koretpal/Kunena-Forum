<?php
/**
 * Kunena Component
 *
 * @package         Kunena.Administrator.Template
 * @subpackage      Prune
 *
 * @copyright       Copyright (C) 2008 - 2020 Kunena Team. All rights reserved.
 * @license         https://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link            https://www.kunena.org
 **/
defined('_JEXEC') or die();

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Language\Text;
use Kunena\Forum\Libraries\Install\KunenaVersion;
use Kunena\Forum\Libraries\Route\KunenaRoute;

?>

<div id="kunena" class="container-fluid">
	<div class="row">
		<div id="j-main-container" class="col-md-12" role="main">

			<div class="card card-block bg-faded p-2">
				<form action="<?php echo KunenaRoute::_('administrator/index.php?option=com_kunena&view=tools') ?>"
					  method="post" id="adminForm"
					  name="adminForm">
					<input type="hidden" name="task" value="prune"/>
					<?php echo HTMLHelper::_('form.token'); ?>

					<fieldset>
						<legend><?php echo Text::_('COM_KUNENA_A_PRUNE'); ?></legend>
						<table class="table table-bordered table-striped">
							<tr>
								<td colspan="2"><?php echo Text::_('COM_KUNENA_A_PRUNE_DESC') ?></td>
							</tr>
							<tr>
								<td width="20%"><?php echo Text::_('COM_KUNENA_A_PRUNE_NOPOSTS') ?></td>
								<td>
									<div class="input-append">
										<input class="col-md-3" type="text" name="prune_days" value="30"/>
										<span class="add-on"><?php echo Text::_('COM_KUNENA_A_PRUNE_DAYS') ?></span>
									</div>
								</td>
							</tr>
							<tr>
								<td><?php echo Text::_('COM_KUNENA_PRUNE_DELETEORTRASH') ?></td>
								<td><?php echo $this->listtrashdelete ?></td>
							</tr>
							<tr>
								<td><?php echo Text::_('COM_KUNENA_A_PRUNE_NAME') ?></td>
								<td><?php echo $this->forumList ?></td>
							</tr>
							<tr>
								<td><?php echo Text::_('COM_KUNENA_A_PRUNE_CONTROL_OPTIONS') ?></td>
								<td><?php echo $this->controloptions ?></td>
							</tr>
							<tr>
								<td><?php echo Text::_('COM_KUNENA_A_PRUNE_KEEP_STICKY') ?></td>
								<td><?php echo $this->keepSticky ?></td>
							</tr>
						</table>
					</fieldset>
				</form>
			</div>
		</div>
	</div>
	<div class="pull-right small">
		<?php echo KunenaVersion::getLongVersionHTML(); ?>
	</div>
</div>
