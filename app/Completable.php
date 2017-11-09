<?php

namespace App;

trait Completable
{
    /**
     * Fetch all completions for the model.
     *
     * @return \Illuminate\Database\Eloquent\Relations\MorphMany
     */
    public function completions()
    {
        return $this->morphMany(Completion::class, 'completable');
    }
    /**
     * Scope a query to records completed by the given user.
     *
     * @param  \Illuminate\Database\Eloquent\Builder $query
     * @param  User                                  $user
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCompletedBy($query, User $user)
    {
        return $query->whereHas('completions', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });
    }
    /**
     * Determine if the model is completed by the given user.
     *
     * @param  User $user
     * @return boolean
     */
    public function isCompletedBy(User $user)
    {
        return $this->completions()
            ->where('user_id', $user->id)
            ->exists();
    }
    /**
     * Have the authenticated user complete the model.
     *
     * @return void
     */
    public function complete()
    {
        $this->completions()->save(
            new Completion(['user_id' => auth()->id()])
        );
    }
}
