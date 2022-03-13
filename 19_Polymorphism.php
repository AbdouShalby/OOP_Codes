<?php

/*
 * Polymorphism
 * - Have Methods Without Body Code
 */

interface DBConnects {
    public function getUsers();
    public function getArticles();
    public function showStats();
}

class MySQL implements DBConnects {
    public function getUsers(){
        echo "SELECT * FROM users";
    }
    public function getArticles(){
        echo "SELECT * FROM articles";
    }
    public function showStats(){
        echo "SELECT * FROM stats";
    }
}

class Oracle implements DBConnects {
    public function getUsers(){
        echo "HELLO FROM users";
    }
    public function getArticles(){
        echo "HELLO FROM articles";
    }
    public function showStats(){
        echo "HELLO FROM stats";
    }
}

$row = new MySQL();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo "<pre>"; print_r($row); echo "</pre>";

$row = new Oracle();
$row->getUsers();
$row->getArticles();
$row->showStats();
echo "<pre>"; print_r($row); echo "</pre>";