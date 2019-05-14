<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{

    protected $guarded = [];

    public function profileImage()
    {
        $imagePath = $this->image ?  $this->image : 'profile/HKj5MlU7okXmLVfv7rznxuRcRRRbD5XyO48nfBcf.jpeg';
        return '/storage/'. $imagePath;
    }

    public function followers()
    {
        return $this->belongsToMany(User::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
