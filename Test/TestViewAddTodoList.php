<?php

require_once "../View/ViewAddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Japan");
addTodoList("Canada");
addTodoList("Finland");

viewAddTodoList();
showTodoList();
viewAddTodoList();
showTodoList();