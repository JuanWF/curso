<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\Employer;

class Job extends Model    
{
    use HasFactory;
    protected $table = 'job_listings';

            //['title' => 'director','salary'=>'$100.000', 'id' => 1],
            //['title' => 'manager','salary'=>'$80.000', 'id' => 2],
            //['title' => 'developer','salary'=>'$60.000','id' => 3],
            //protected $guarded = [];
    protected $fillable = ['employer_id','title', 'salary'];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
