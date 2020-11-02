<?php
class Student {
    public $id;
    public $first_name;
    public $last_name

    public function getFullName() {
        return $this->first_name.' '.$this->last_name
    }
}

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=school", $username, $password)
    $stmt = $dbh->query("SELECT * FROM students");
    $stmt->setFetchMode(PDO::FETCH_INTO, new Student);
    foreach($stmt as $student) {
        echo $student->getFullName().'<br />';
    } 
    $dbh = null;
} catch(PDOException $e) {
    echo $e->getMessage();
}
