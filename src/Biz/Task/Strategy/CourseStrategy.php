<?php

namespace Biz\Task\Strategy;


interface CourseStrategy
{
    //任务的api
    public function createTask($field);

    public function updateTask($id, $fields);

    public function deleteTask($task);

    public function canLearnTask($task);

    public function publishTask($task);

    public function unpublishTask($task);

    /**
     * 任务列表管理页面
     * @return page path
     */
    public function getTasksRenderPage();

    //课时的api
    public function findCourseItems($courseId);

    public function sortCourseItems($courseId, array $itemIds);


}