<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_User extends Eloquent
{
    protected $table = 'users';
    const CREATED_AT = 'usr_timecreated';
    const UPDATED_AT = 'usr_timemodified';
    protected $primaryKey = 'usr_id';
    

    public function course_enrol_details()
    {
        return $this->hasMany('M_Course_Enrol_Detail', 'end_id');
    }

    public function course_assignment_submissions()
    {
        return $this->hasMany('M_Course_Assignment_Submission', 'sub_id');
    }

    public function course_assesment_question_answer_of_students()
    {
        return $this->hasMany('M_Course_Assesment_Question_Answer_Of_Student', 'ast_id');
    }

    public function insert_user($data)
    {
        $user = new M_User;
        $user->usr_kode = $data['usr_kode'];
        $user->usr_username = $data['usr_username'];
        $user->usr_firstname = $data['usr_firstname'];
        $user->usr_lastname = $data['usr_lastname'];
        $user->usr_password = $data['usr_password'];
        $user->usr_email = $data['usr_email'];
        $user->usr_picture = $data['usr_picture'];
        $user->usr_gpa = $data['usr_gpa'];
        $user->usr_level = $data['usr_level'];
        $user->usr_jk = $data['usr_jk'];
        return $user->save();
    }
    
    public function update_user($data,$usr_id)
    {
        $userUpdate =M_user::where('usr_id','=',$usr_id)->first();
        //dd(userUpdate);
        $userUpdate->usr_kode = $data['usr_kode'];
        $userUpdate->usr_username = $data['usr_username'];
        $userUpdate->usr_firstname = $data['usr_firstname'];
        $userUpdate->usr_lastname = $data['usr_lastname'];
        if(!empty($data['usr_password'])){
            $userUpdate->usr_password = $data['usr_password'];
        }
        $userUpdate->usr_email = $data['usr_email'];
        $userUpdate->usr_picture = $data['usr_picture'];
        $userUpdate->usr_gpa = $data['usr_gpa'];
        $userUpdate->usr_level = $data['usr_level'];
        $userUpdate->usr_jk = $data['usr_jk'];
        return $userUpdate->save();
    }
    
}

?>