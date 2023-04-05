<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Job extends Model
{
    protected $table = 'jobs';
    protected static $tbl = 'jobs';
    protected $primaryKey = 'job_id';

    protected $fillable = array(
        "job_id",
        "employer_id",
        "department_id",
        "title",
        "description",
        "is_static_allowed",
        "status",
        "created_at",
        "updated_at",
    );

    public static function getJob($column, $value)
    {
    	$job = Self::where($column, $value)->first();
    	return $job ? $job : emptyTableColumns(Self::$tbl);
    }

    public static function storeJob($data, $edit = null)
    {
        unset($data['job_id'], $data['_token']);
        if ($edit) {
            $data['updated_at'] = date('Y-m-d G:i:s');
            Self::where('job_id', $edit)->update($data);
        } else {
            $data['created_at'] = date('Y-m-d G:i:s');
            $data['status'] = 1;
            Self::insert($data);
        }
    }

    public static function remove($job_id)
    {
        Self::where(array('job_id' => $job_id))->delete();
    }

    public static function getAll($active = true)
    {
        $query = Self::whereNotNull('jobs.job_id');
        if ($active) {
            $query->where('status', 1);
        }
        $query->from(Self::$tbl);
        $result = $query->get();
        return $result ? $result->toArray() : array();
    }
}