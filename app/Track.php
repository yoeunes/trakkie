<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{
    use Hoardable, Completable;

    /**
     * A track belongs to an album.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function album()
    {
        return $this->belongsTo(Album::class);
    }
}
