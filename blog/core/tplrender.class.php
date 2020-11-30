<?php

class TplRender {

  private $data = [];

  public function __get($name) {
    if (isset($this->data[$name])) return $this->data[$name];
    return;
  }

  public function __set($name, $value) {
    $this->data[$name] = $value;
  }

  public function delete($name) {
    unset($this->data[$name]);
  }

  public function displayTemplate($template) {
    $template = 'inc'.DIRECTORY_SEPARATOR.$template.'.tpl.php';
    ob_start();
    include ($template);
    echo ob_get_clean();
  }
}