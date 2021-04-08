<?php
class ErrorHandling {
  private $input;
  private $cssClassName;
  private $errorMessage;
  private $isValid = true;
}

public function_construct($cssClassName, $input, $errorMessage, $isValid) {
  $this->cssClassName = $cssClassName;
  $this->input = $input;
  $this->errorMessage = $errorMessage;
  $this->isValid = $isValid;
}

public function getCssClassName() {
  return $this->cssClassName;
}

public function getInput() {
  return $this->input;
}

public function getErrorMessage() {
  return $this->errorMessage;
}

public function isValid() {
  $this->isValid;
}

static public function checkParameter($queryName, $pattern, $errMsg) {
  $error = "";
  $errClass = "";
  $value = "";
  $isValid = true;

  if(empty($_POST[$queryName])) {
    $error = $errMsg;
    $errClass = "error";
    $isValid = false;
  }
  else {
    $value = $_POST[$queryName];
    if(!preg_match($pattern, $value)) {
      $error = $errMsg;
      $errClass = "error";
      $isValid = false;
    }
  }
  }
}

?>
