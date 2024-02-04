<?php


class MyTaskPSR
{
    private string $taskName;
    private int $taskPriority;
    private int $id;
    private StatusOfTask $status;

    public function __construct(int $id, int $taskPriority, string $taskName, StatusOfTask $status = StatusOfTask::notDone)
    {
        $this->setId($id);
        $this->setTaskPriority($taskPriority);
        $this->setTaskName($taskName);
        $this->setStatus($status);
    }


    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }


    /**
     * @param string $taskName
     */

    public function setTaskName(string $taskName): void
    {
        if (empty($taskName)) {
            throw new Exception("Task name cannot be empty.");
        }
        $this->taskName = $taskName;
    }

    /**
     * @param int $taskPriority
     */
    public function setTaskPriority(int $taskPriority): void
    {
        if ($taskPriority < 0) {
            throw new Exception("Priority cannot be negative.");
        }
        $this->taskPriority = $taskPriority;
    }

    /**
     * @param StatusOfTask $status
     */
    public function setStatus(StatusOfTask $status): void
    {
        $this->status = $status;
    }

}