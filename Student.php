<?php
//strict
class Student {

  private  $firstName;
  private  $lastName;
  private  $grade;

  public function __construct(string $firstName, string $lastName, string $grade )
  {
      $this->firstName = $firstName;
      $this->lastName = $lastName;
      $this->grade = $grade;
  }

  public function show_student()
  {
    print $this->firstName . "\n";
    print $this->lastName . "\n";
    print $this->grade . "\n";
  }

  public function set_grade(?string $grade) {
    $this->grade = $grade;
  }

}

 ?>
