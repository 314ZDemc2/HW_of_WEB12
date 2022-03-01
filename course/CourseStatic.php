<?php

class CourseStatic{
    private static $course;

    /**
     * @return ICourse PrivatClassCourse
     */
    public static function getCourse(){
        if(self::$course == null){
            self::$course = new BankGovUaCourse();
        }

        return self::$course;
    }
}