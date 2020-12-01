<?php

class TplRender {

  private $data = [];

  /*
   *  Магический метод для отлавливания обращений к не публичным свойствам
   * */

  public function __get($name)
    {
        if (isset($this->data[$name])) return $this->data[$name];
        return;
    }

    /*
     *  Магический метод для установления значения не публичного свойства
     * */

  public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }

  public function displayTemplate($template)
    {
        $template = 'inc'.DIRECTORY_SEPARATOR.$template.'.tpl.php';
        ob_start();
        include ($template);
        echo ob_get_clean();
    }
}