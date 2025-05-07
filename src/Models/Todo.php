<?php

namespace Todoist\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Todo extends Model
{
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owned_by');
    }
}
