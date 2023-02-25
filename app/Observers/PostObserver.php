<?php

namespace App\Observers;

use App\Models\Post;

class PostObserver
{
    public function created(Post $post)
    {
        $this->calculateAndUpdateReadDuration($post);
    }

    public function updated(Post $post)
    {
        $this->calculateAndUpdateReadDuration($post);
    }

    private function calculateAndUpdateReadDuration(Post $post)
    {
        $post->updateQuietly([
            'mins_read' => $this->calculateReadDuration($post->text),
        ]);
    }

    private function calculateReadDuration(...$text): string
    {
        $totalWords = str_word_count(implode(' ', $text));
        $minutesToRead = round($totalWords / 200);

        return (int) max(1, $minutesToRead);
    }
}
