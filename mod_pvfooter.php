<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$language = JFactory::getLanguage();
$language->load('mod_pvfooter', JPATH_ADMIN);

?>
<style>
    ul.pv-footer li {
        list-style: none;
    }
    ul.pv-footer {
        display: inline-block;
    }
}
</style>
<div class="pv-footer">
    <ul>
        <li><a href="/"><?=JText::_('HOME');?></a></li>
        <li><a href="<?=JText::_('PATH CONTACT US');?>"><?=JText::_('CONTACT US');?></a></li>
        <li><a href="<?=JRoute::_('index.php?option=com_voterapp&tmpl=component');?>"><?=JText::_('VOTERAPP');?></a></li>
        <li><a href="<?=JRoute::_('index.php?option=com_ballotboxapp');?>"><?=JText::_('BALLOTBOXAPP');?></a></li>
        <li><a href="<?=JText::_('PATH RIGHT TO KNOW POLICY');?>" target="_blank" rel="noreferer"><?=JText::_('RIGHT TO KNOW POLICY');?></a></li>
    </ul>
</table>