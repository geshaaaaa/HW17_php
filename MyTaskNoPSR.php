<?php
class mytasknopsr // Клас повинен мати ту ж назву що й файл, клас повинен починатись з великої літери та мати StudlyCaps
{
            private string $taskName; // Код повинен мати 4 пробіли з кожного нового рядка, а не просту табуляцію
            private integer $taskPriority; // В коді потрібно вказувати скорочену назву змінних (int замість integer)
            private integer  $id; // В коді потрібно вказувати скорочену назву змінних (int замість integer)
    public function __construct($id,$taskPriority,$taskName) // відсутність типу параметрів, параметри маються мати відступ після коми
            {
                $this->setId($id); // зайва табуляція
                $this->setTaskPriority($taskPriority); // зайва табуляція
                $this->setTaskName($taskName); // зайва табуляція
            }
    public function setId($id){ //Відкриваюча дужка повинна бути під методом, немає типу параметру
             $this->id = $id; // зайва табуляція
    }

    public function setTaskName($taskName){  //Відкриваюча дужка повинна бути під методом, немає типу повертаємого значення, немає типу параметру
    if (empty($taskName)) {
            throw new Exception("Task name cannot be empty.     "); //не повинно бути пробілів або пробільних символів в кінці рядка, зайва табуляція
        }
        $this->taskName=$taskName; // Немає пробілу між операторами
    }
    public function setTaskPriority($taskPriority)
    {
            if ($taskPriority < 0) // зайва табуляція
        {   throw new Exception("Priority cannot be negative."); // не потрібний перенос фігурної дужки
        }
            $this->taskPriority=$taskPriority; // Немає пробілу між операторами, зайва табуляція
    }
}
?> // Тег ?> повинен опускатися, якщо файл містить тільки php