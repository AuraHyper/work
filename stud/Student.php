<?php
class Student extends \Entities\Human
{
    private bool $expelled=false;
    private ?DateTime $expDate=null;
public function __construct(string $firstName, string $lastName, DateTime $birthDate, string $gender,private string $group,private DateTime $assignmentDate)
{
\College\Entities\Human::__construct($firstName,$lastName,$birthDate,$gender);
}
public function getGroup():string{
    return $this->group;
}
public function getAssignmentDate(){
    return $this->assignmentDate;
}
public function Expel(bool $status,DateTime $exp):void{
$this->expelled=$status;
$this->expDate=$exp;
}
public function status(){
    if ($this->expelled==false){
        return 'Студент числится в группе' . ' ' . $this->getGroup();
    }
return 'Студент отчислен' . ' ' . $this->expDate->format('Y-m-d');
}
}