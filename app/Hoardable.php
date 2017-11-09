<?php

namespace App;

trait Hoardable
{
    /**
     * Fetch all hoards for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function hoardes()
    {
        return $this->morphMany(Hoard::class, 'hoardable');
    }
    /**
     * Scope a query to records hoarded by the given user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  User                                  $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeHoardedBy($query, User $user)
    {
        return $query->whereHas('hoardes', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });
    }
    /**
     * Determine if the model is hoarded by the given user.
     *
     * @param  User $user
     * @return boolean
     */
    public function isHoardedBy(User $user)
    {
        return $this->hoardes()
            ->where('user_id', $user->id)
            ->exists();
    }
    /**
     * Have the authenticated user hoard the model.
     *
     * @return void
     */
    public function hoard()
    {
        $this->hoardes()->save(
            new Hoard(['user_id' => auth()->id()])
        );
    }
}
