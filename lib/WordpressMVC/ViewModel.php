<?php

namespace WordpressMVC;

class ViewModel
{
    protected $template;

    private $params;
    public function __get ($field)
    {
        if (!array_key_exists($field, $this->params))
        {
            return null;
        }
        return $this->params[$field];
    }

    public function __construct ($params = array())
    {
        $this->params = $params;
    }

    public function setTemplate ($template)
    {
        $this->template = $template;
    }

    public function render ($return = false)
    {
        if (!file_exists($this->template))
        {
            return null;
        }

        ob_start();
        require_once($this->template);
        $contents = ob_get_clean();

        if ($return)
        {
            return $contents;
        }

        print $contents;
    }
}
