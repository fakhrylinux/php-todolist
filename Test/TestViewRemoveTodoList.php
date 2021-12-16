<?php

require_once "../Model/TodoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Japan");
addTodoList("Australia");
addTodoList("Canada");
addTodoList("England");
addTodoList("Sweden");
addTodoList("New Zealand");

showTodoList();

viewRemoveTodoList();

showTodoList();
