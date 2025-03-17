<?php

class Record {
    private $id;
    private $name;
    private $data;

    public function __construct($id, $name, $data) {
        $this->id = $id;
        $this->name = $name;
        $this->data = $data;
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getData() {
        return $this->data;
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function displayRecord() {
        echo "ID: " . $this->id . "<br>";
        echo "Name: " . $this->name . "<br>";
        echo "Data: " . $this->data . "<br>";
    }
}

$record = new Record(1, "Sample Record", "Some sample data");
$record->displayRecord();

?>
