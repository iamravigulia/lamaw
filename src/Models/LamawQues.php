<?php
namespace Edgewizz\Lamaw\Models;

use Illuminate\Database\Eloquent\Model;

class LamawQues extends Model{
    public function answers(){
        return $this->hasMany('Edgewizz\Lamaw\Models\LamawAns', 'question_id');
    }
    protected $table = 'fmt_lamaw_ques';
}