<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Japan");
addTodoList("South Korea");
addTodoList("Singapore");
addTodoList("Canada");
addTodoList("Germany");
addTodoList("New Zealand");

viewShowTodoList();