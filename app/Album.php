<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Album extends Model
{
    use Hoardable, Completable;

    /**
     * An album belongs to an artist.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function artist()
    {
        return $this->belongsTo(Artist::class);
    }

    /**
     * An album has many tracks
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tracks()
    {
        return $this->hasMany(Track::class);
    }
}
