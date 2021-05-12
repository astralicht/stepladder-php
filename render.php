<?php

class App {

    function __construct($elements) {
        $doc = new DOMDocument();
        $doc->loadHTMLFile('app.php');

        $title = $doc->getElementsByTagName('title')->item(0);
        $title->textContent = $elements['title'];

        $body = $doc->getElementsByTagName('body');
        $body;

        $this->html = $doc->saveHTML();
    }

    function render() {
        return $this->html;
    }
    
}