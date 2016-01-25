<?php
/**
 * Created by PhpStorm.
 * User: zhangshaobo
 * Date: 15/11/2
 * Time: 15:04
 */
class HeartCareViewHeartCare extends JViewLegacy
{
    protected $state;
    protected $items;
    protected $pagination;
    protected $txtData;
    protected $doctorSay;

    function display($tpl = null)
    {
        $app		= JFactory::getApplication();
        $params		= $app->getParams();

        // Get some data from the models
        $this->state		= $this->get('State');
        $this->items		= $this->get('Items');
        $this->pagination	= $this->get('Pagination');
        $this->txtData      = $this->get('TxtData');
        $this->doctorSay    = $this->get('DoctorSay');

        // Check for errors.
        if (count($errors = $this->get('Errors'))) {
            JError::raiseError(500, implode("\n", $errors));
            return false;
        }

        parent::display($tpl);
    }

}