<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "studentrecords".
 *
 * @property integer $student_id
 * @property string $name
 * @property string $email
 * @property string $course_name
 * @property string $course_teacher
 * @property integer $student_no
 */
class studentrecords extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'studentrecords';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'course_name', 'course_teacher', 'student_no'], 'required'],
            [['student_no'], 'integer'],
            [['name', 'email', 'course_name', 'course_teacher'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'student_id' => 'Student ID',
            'name' => 'Name',
            'email' => 'Email',
            'course_name' => 'Course Name',
            'course_teacher' => 'Course Teacher',
            'student_no' => 'Student No',
        ];
    }
}
