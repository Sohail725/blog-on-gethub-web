<?php
namespace App\Mail;

use App\Models\Post;
use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Support\Facades\Log;
use Illuminate\Queue\SerializesModels;

class PostPublished extends Mailable
{
    use Queueable, SerializesModels;

    public $post;
    public $unsubscribeUrl;
    public $postDetailsUrl;
    public $subscriber;

    public function __construct(Post $post, $unsubscribeUrl, $postDetailsUrl, Subscriber $subscriber)
    {
        $this->post = $post;
        $this->unsubscribeUrl = $unsubscribeUrl;
        $this->postDetailsUrl = $postDetailsUrl;
        $this->subscriber = $subscriber;
    }

    public function build()
    {
        // Generate tracking URL that includes post and subscriber IDs
        $trackingUrl = route('track.email.open', [
            'post_id' => $this->post->id,
            'subscriber_id' => $this->subscriber->id,
        ]);

        return $this->view('emails.post_published')
                    ->subject($this->post->post_name)
                    ->with([
                        'post' => $this->post,
                        'unsubscribeUrl' => $this->unsubscribeUrl,
                        'postDetailsUrl' => $this->postDetailsUrl,
                        'subscriber' => $this->subscriber,
                        'trackingUrl' => $trackingUrl,
                    ]);
    }
}
