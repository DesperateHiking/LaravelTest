<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Test extends Model
{
    protected $table = 'posts';

    public function complete()
    {
        $this->completed = true;
        $this->save();
    }
}
