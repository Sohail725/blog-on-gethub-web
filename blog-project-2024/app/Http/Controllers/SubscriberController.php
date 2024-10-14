<?php

namespace App\Http\Controllers;

use App\Models\EmailOpen;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Crypt;

class SubscriberController extends Controller
{
    public function unsubscribe($email)
    {
        try {
            // Decrypt email if encrypted before sending
            $decryptedEmail = Crypt::decryptString($email);
        } catch (\Exception $e) {

            return view('backend.error')->with('message', 'Failed to unsubscribe. Please contact support.');
        }

        // Find the subscriber by decrypted email and delete them
        $subscriber = Subscriber::where('email', $decryptedEmail)->first();
        if ($subscriber) {
            $subscriber->delete();
        } else {
            Log::warning('Subscriber with email ' . $decryptedEmail . ' not found.');
        }

        // Return the unsubscribe success view
        return view('backend.unsubscribe_success');
    }

    public function trackEmailOpen(Request $request)
    {
        $postId = $request->query('post_id');
        $subscriberId = $request->query('subscriber_id');

        // Log the open event if it hasn't been recorded
        if ($postId && $subscriberId) {
            EmailOpen::firstOrCreate(
                [
                    'post_id' => $postId,
                    'subscriber_id' => $subscriberId,
                ],
                ['opened_at' => now()]
            );
        }

        // Redirect to the actual post details page
        return redirect()->route('post.details', ['id' => $postId]);
    }
}
