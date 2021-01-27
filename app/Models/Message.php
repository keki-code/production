@@ -1,17 +1,20 @@
<?php

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
class Message extends Model
{
    use HasFactory;
    protected $fillable = [
        'from_id',
        'to_id',
        'message_body'
    ];

    public function sender() { return $this->belongsTo(User::class, 'from_id'); }
    public function receiver() { return $this->belongsTo(User::class, 'to_id'); }
}