<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$language = JFactory::getLanguage();
$language->load('mod_pvfooter', JPATH_ADMIN);

$document = &JFactory::getDocument();
$document->addStyleSheet(JPATH_MODULE . DIRECTORY_SEPARATOR . 'style.css');

?>
<table class="pf-footer">
    <tr>
        <td><a href="/"><?=JText::_('HOME');?></a></td>
        <td><a href="<?=JText::_('PATH CONTACT US');?>"><?=JText::_('CONTACT US');?></a></td>
        <td><a href="<?=JText::_('PATH VOTERAPP');?>"><?=JText::_('VOTERAPP');?></a></td>
        <td><a href="<?=JText::_('PATH BALLOTBOXAPP');?>"><?=JText::_('BALLOTBOXAPP');?></a></td>
        <td><a href="<?=JText::_('PATH RIGHT TO KNOW POLICY');?>" target="_blank" rel="noreferer"><?=JText::_('RIGHT TO KNOW POLICY');?></a></td>
    </tr>
</table>