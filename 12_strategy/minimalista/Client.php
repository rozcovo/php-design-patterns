<?php
ini_set('display_erros', 1);
error_reporting(E_ALL);

class Client {

    public function insertData() {
        $context = new Context(new DataEntry());
        $context->algorithm();
    }

    public function findData() {
        $context = new Context(new SearchData());
        $context->algorithm();
    }

    public function showAll() {
        $context = new Context(new DisplayData());
        $context->algorithm();
    }

    public function changeDAta() {
        $context = new Context(new UpdateData());
        $context->algorithm();
    }

    public function killer() {
        $context = new Context(new DeleteRecord());
        $context->algorithm();
    }
}
?>