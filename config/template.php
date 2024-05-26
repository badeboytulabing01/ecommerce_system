<?php

class TemplateLoader {
    private $template_files = array();

    public function addTemplateFile($filename) {
        $this->template_files[] = $filename;
    }

    public function headfile() {
        foreach ($this->template_files as $file) {
            require_once("template/head{$file}.php");
        }
    }

    public function bottomfile() {
        foreach ($this->template_files as $file) {
            require_once("template/bottom{$file}.php");
        }
    }

    public function navigation(){
        foreach($this->template_files as $file){
           require_once("template/navbar{$file}.php");

        } 
    }

    public function footer(){
        foreach($this->template_files as $file){
            require_once("template/footer{$file}.php");
        }
    }

    public function modal(){
        foreach($this->template_files as $file){
            require_once("template/modal{$file}.php");
        }
    }

    public function banner(){
        foreach($this->template_files as $file){
            require_once("template/banner{$file}.php");
        }
    }

 /*    public function session(){
        foreach($this->template_files as $file){
            require_once("connection/banner{$file}.php");
        }
    } */







}

// Example usage
$templateLoader = new TemplateLoader();
$templateLoader->addTemplateFile(''); // Add the filenames here
?>
