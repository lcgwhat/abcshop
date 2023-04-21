<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class Demo implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $number;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($number, $delay)
    {
        $this->number = $number;
        echo '延迟'.$delay;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       echo csrf_token();
       echo '<br>';
        echo $this->number;
    }
}
