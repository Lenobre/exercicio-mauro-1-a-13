<?php

$name = (isset($_POST["name"])) ? trim($_POST["name"]) : null;
$birthday = (isset($_POST["birthday"])) ? $_POST["birthday"] : null;
$course = (isset($_POST["course"])) ? $_POST["course"] : null;

if ($name === null || $name === "")
  echo "O nome informado é inválido";

if ($birthday === null)
  echo "A data de nascimento informada é inválida";

$allowedCourses = ["Curso 1", "Curso 2", "Curso 3"];
if ($course === null || !in_array($course, $allowedCourses))
  echo "O curso informado é inválido";

require_once("./Student.php");

session_start();

$student = new Student($name, $birthday, $course);
$_SESSION["student"] = serialize($student);


header("location: http://localhost/mauro/aluno/profile.php");
