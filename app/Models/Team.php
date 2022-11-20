<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Team extends Model
{
    use HasFactory;


    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'size'
    ];

    public function add($user)
    {
        $this->guardAgainstTooManyMembers();

        $method = $user instanceof User ? 'save' : 'saveMany';
        $this->members()->$method($user);

        //   if($user instanceof User){
        //       $this->members()->save($user);
        //   }
        //   $this->members()->saveMany($user);
    }


    public function remove($users = null)
    {
        if ($users instanceof User) {
            return $users->leaveTeam();
        }
        // $users->each(function($user){
        //      $user->leaveTeam();
        // });
        $userIds = $users->pluck('id');
        $this->members()
        ->whereIn('id',$userIds)->update(['team_id'=>null]);
    }

    public function restart()
    {
        return $this->members()->update(['team_id' => null]);
    }

    /**
     * Get all of the members for the Team
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function members(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function count()
    {
        return $this->members()->count();
    }

    public function guardAgainstTooManyMembers()
    {
        if ($this->count() >= $this->size) {
            throw new \Exception;
        }
    }
}
