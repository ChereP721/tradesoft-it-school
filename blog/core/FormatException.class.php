<?php


class FormatException extends Exception {

    public function errorMessage()
    {
        $errorMsg = '<article class="section__article"><div class="section__article__post"><p>'.$this->getMessage().'</p></div></article>';
        return $errorMsg;
    }
}