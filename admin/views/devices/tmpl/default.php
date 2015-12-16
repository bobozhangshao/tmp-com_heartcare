<?php
/**
 * Created by PhpStorm.
 * User: zhangshaobo
 * Date: 15/12/14
 * Time: 19:54
 */

defined('_JEXEC') or die('Restricted access');

JHtml::_('formbehavior.chosen', 'select');

$listOrder = $this->escape($this->filter_order);
$listDirn  = $this->escape($this->filter_order_Dir);
?>
<form action="index.php?option=com_heartcare&view=devices" method="post" id="adminForm" name="adminForm">
    <div class="row-fluid">
        <div class="span6">
            <?php echo JLayoutHelper::render('joomla.searchtools.default', array('view' => $this)); ?>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
        <tr>
            <th width="1%"><?php echo JText::_('COM_HEARTCARE_NUM'); ?></th>
            <th width="2%"><?php echo JHtml::_('grid.checkall'); ?></th>
            <th width="7%"><?php echo JHtml::_('grid.sort','COM_HEARTCARE_HEALTHDATA_DEVICE_ID','device_id', $listDirn, $listOrder); ?></th>
            <th width="15%"><?php echo JHtml::_('grid.sort','COM_HEARTCARE_HEALTHDATA_DEVICE_TYPE','device_type', $listDirn, $listOrder); ?></th>
            <th width="25%"><?php echo JHtml::_('grid.sort','COM_HEARTCARE_HEALTHDATA_DEVICE_REGISTER_TIME','register_time', $listDirn, $listOrder); ?></th>
            <th width="20%"><?php echo JHtml::_('grid.sort','COM_HEARTCARE_NAME','name', $listDirn, $listOrder); ?></th>
            <th width="20%"><?php echo JHtml::_('grid.sort','COM_HEARTCARE_USERNAME','username', $listDirn, $listOrder); ?></th>
            <th width="10%"><?php echo JHtml::_('grid.sort','COM_HEARTCARE_USER_ID','user_id', $listDirn, $listOrder); ?></th>
        </tr>
        </thead>

        <tfoot>
        <tr>
            <td colspan="7">
                <?php echo $this->pagination->getListFooter(); ?>
            </td>
        </tr>
        </tfoot>

        <tbody>
        <?php if(!empty($this->items)) : ?>
            <?php foreach($this->items as $i => $row) :
                $link = JRoute::_('index.php?option=com_heartcare&task=device.edit&id='.$row->id);
                ?>
                <tr>
                    <td><?php echo $this->pagination->getRowOffset($i); ?></td>
                    <td><?php echo JHtml::_('grid.id', $i, $row->device); ?></td>
                    <td><a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_HEARTCARE_EDIT_DEVICE_INFO'); ?>" ><?php echo $row->device_id; ?></a></td>
                    <td><a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_HEARTCARE_EDIT_DEVICE_INFO'); ?>" ><?php echo $row->device_type; ?></a></td>
                    <td><a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_HEARTCARE_EDIT_DEVICE_INFO'); ?>" ><?php echo $row->register_time; ?></a></td>
                    <td><?php echo $row->name; ?></td>
                    <td><?php echo $row->username; ?></td>
                    <td><?php echo $row->user_id; ?></td>
                </tr>
            <?php endforeach; ?>
        <?php endif; ?>
        </tbody>
    </table>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="filter_order" value="<?php echo $listOrder; ?>"/>
    <input type="hidden" name="filter_order_Dir" value="<?php echo $listDirn; ?>"/>
    <?php echo JHtml::_('form.token'); ?>
</form>

