<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CollegeInfo extends Model
{
    use HasFactory;

    protected $table = 'college_infos'; // Make sure this matches your table name
    protected $fillable = ['title',  'image', 'description' , 'institute_name',  'also_known_as', 'institute_type', 'established', 'location', 'websitetitle', 'websitelink', ];

    public function getStateAttribute()

    {
        // Split the location by comma and take the last part (state)
        $parts = explode(',', $this->location);
        
        // Return the trimmed last part (state) if it exists
        return isset($parts[1]) ? trim($parts[1]) : null;
    }


    public function getCityAttribute()
    {
        // Get the last word from the title as the city
        return last(explode(' ', $this->title));
    }


    public function getInstituteTypeAttribute()
{
    // Assuming institute_type is a column in the college_info table
    return $this->attributes['institute_type'] ?? null; // Return institute_type or null if not set
}

    public function internationalRankings()
    {
        return $this->hasMany(InternationalRanking::class);
    }

    public function branches()
    {
        return $this->hasMany(Branch::class);
    }
   
   
    public function courses()
{
    return $this->hasMany(Course::class);
}

    public function pdf()
    {
        return $this->hasOne(CollegePdf::class);
    }


    public function overview()
    {
        return $this->hasOne(CollegeOverview::class, 'college_info_id');
    }

    public function connectivity()
    {
        return $this->hasMany(Connectivity::class);
    }
    
    // public function alsoKnownAs()
    // {
    //     return $this->hasMany(AlsoKnownAs::class, 'college_info_id');
    // }

    public function fees()
    {
        return $this->hasMany(Fee::class);
    }

public function hostelfee(){

    return $this->hasMany(HostelFee::class, 'college_info_id');

}


public function feewavers(){

    return $this->hasMany(FeeWavers::class);
    
}


public function placement(){

    return $this->hasMany(Placement::class);

}


public function branchplacement(){

    return $this->hasMany(BranchPlacement::class);

}


public function medianpackegeoffer(){

    return $this->hasMany(MedianPackageOffered::class);

}

public function averagepackagedoffer(){
    return $this->hasMany(AveragePackegeOfferd::class);

}

public function toprecruite(){

    return $this->hasMany(TopRecruiter::class);

}


public function pastrecruit(){

return $this->hasMany(PastRecruiter::class);


}

// public function website(){

//     return $this->hasOne(Website::class);
    
// }





public function nearbycollege(){

return $this->hasMany(NearbyCollege::class);


}


public function exploremorecollege(){

return $this->hasMany(ExploreMoreCollege::class);

}


public function cutoff(){
    return $this->hasMany(Cutoff::class);
}

public function similarcollege(){
    return $this->hasMany(SimilarCollege::class);
}


public function cutoffs()
{
    return $this->hasMany(AdmissionRecord::class, 'college_id');
}


public function admissionmode()
{
    return $this->hasMany(Admissionmode::class, 'college_info_id');
}


    // public function fee()
    // {
    //     return $this->hasOne(InstituteFee::class, 'college_info_id');
    // }

    /**
     * Search for colleges based on name or course.
     *
     * @param string $query
     * @return \Illuminate\Database\Eloquent\Collection
     */
    public static function search($query)
    {
        return self::where('title', 'LIKE', '%' . $query . '%')
                    ->orWhere('institute_name', 'LIKE', '%' . $query . '%')
                    ->get();
    }


}



