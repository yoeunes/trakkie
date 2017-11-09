<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artist extends Model
{
    use Hoardable, Completable;

    /**
     * An artist has many albums
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function albums()
    {
        return $this->hasMany(Album::class);
    }
}
