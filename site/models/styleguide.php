<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
// import the Joomla modellist library
jimport('joomla.application.component.modellist');


class StyleGuideModelStyleGuide extends JModelList
{
    
    public function getContent()
    {
        $db    = JFactory::getDBO();
        $query = $db->getQuery(true);
        $query->select('*');
        $query->from('#__styleguide');

        $db -> setQuery($query);
        return  $db -> loadAssoc();

    }


}
