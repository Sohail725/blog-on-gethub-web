<?php
namespace App\Jobs;

use App\Models\Post;
use App\Models\Subscriber;
use App\Mail\PostPublished;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Queue\SerializesModels;
use App\Http\Controllers\PostController;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;

class SendPostNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    protected $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function handle()
    {
        $subscribers = Subscriber::orderBy('id')->get();
        foreach ($subscribers as $subscriber) {
            // Generate the unsubscribe URL
            $unsubscribeUrl = route('unsubscribe', ['email' => Crypt::encryptString($subscriber->email)]);

            // Generate the post details URL
            $postDetailsUrl = action([PostController::class, 'show'], ['id' => $this->post->id]);

            // Send the email with both URLs
            Mail::to($subscriber->email)->send(new PostPublished($this->post, $unsubscribeUrl, $postDetailsUrl, $subscriber));
        }
    }
}
