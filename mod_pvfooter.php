<?php
//no direct access
defined('_JEXEC') or die('Direct Access to this location is not allowed.');

$language = JFactory::getLanguage();
$language->load('mod_pvfooter', JPATH_ADMIN);

?>
<style>
    div.pv-footer {
        background-color: #8C887D;
        width: 100%;
        height: 34px;
    }
    .pv-footer ul li {
        text-decoration: none;
        font-color: #fff;
        list-style: none;
        font-weight: normal;
        vertical-align: middle;
        display: inline-block;
        margin-right: 2em;
        margin-left: 2em;
    }
    .pv-footer ul {
        width:auto;
        margin-right: auto;
        margin-left: auto;
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