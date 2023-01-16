<?php

declare(strict_types=1);

namespace App\Mail\Posts;

use Domain\Blogging\ValueObjects\PostValueObject;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewPost extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public PostValueObject $object,
    ) {
        //
    }


    public function build(): self
    {
        return $this->markdown('emails.posts.new-post');
    }
}
