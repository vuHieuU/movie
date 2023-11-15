<?php

namespace App\Jobs;

use App\Mail\BookTicket;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Contracts\Queue\ShouldBeUnique;

class sendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     */
    public $email;
    public $ticket;
    public function __construct($email,$ticket)
    {
        $this->email = $email;
        $this->ticket = $ticket;
    }

    /**
     * Execute the job.
     */
    public function handle(): void
    {
            Mail::to($this->email)->send(new BookTicket($this->ticket));
        
    }
}
