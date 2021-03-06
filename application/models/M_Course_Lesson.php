<?php

use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Database\Capsule\Manager as DB;

class M_Course_Lesson extends Eloquent
{
    protected $table = 'course_lesson';
    const CREATED_AT = 'lsn_timecreated';
    const UPDATED_AT = 'lsn_timemodified';
    protected $primaryKey = 'lsn_id';

    public function course()
    {
        return $this->belongsTo('M_Course', 'crs_id');
    }

    public function insert($data)
    {
        $lesen = new M_Course_Lesson;
        $lesen->lsn_name = $data['lsn_name'];
        $lesen->lsn_intro = $data['lsn_intro'];
        $lesen->crs_id = $data['crs_id'];

        return $lesen->save();
    }

    public function update($data, $lsn_id)
    {
        $updateLesen = M_Course_Lesson::where('lsn_id',$lsn_id)->first();
        $updateLesen->lsn_name = $data['lsn_name'];
        $updateLesen->lsn_intro = $data['lsn_intro'];

        return $updateLesen->save();
    }

}

?>