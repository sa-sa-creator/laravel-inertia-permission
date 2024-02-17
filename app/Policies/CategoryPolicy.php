<?php

namespace App\Policies;

use App\Models\Category;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class CategoryPolicy
{
    use HandlesAuthorization;

    public function before(?User $user, $ability){
        if($user->is_admin){
           return true; 
        }

    }
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(?User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(?User $user, Category $category): bool
    {
        return true;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return true;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Category $category): bool
    {
        return $user->id === $category->by_user_id;
    }

    public function delete(User $user, Category $category): bool
    {
        return $user->id === $category->by_user_id;
    }


    public function restore(User $user, Category $category): bool
    {
        return $user->id === $category->by_user_id;
    }


    public function forceDelete(User $user, Category $category): bool
    {
        return $user->id === $category->by_user_id;
    }
}
