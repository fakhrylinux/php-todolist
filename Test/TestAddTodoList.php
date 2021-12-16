<?php

require_once "../Model/TodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("France");
addTodoList("Hungary");
addTodoList("Finlad");

var_dump($todoList);