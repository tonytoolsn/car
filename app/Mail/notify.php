<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class notify extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    protected $params;
    public function __construct($params)
    {
        $this->params=$params;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
         return $this->subject('勁璿重機出租(官方信件請勿回復)')  //主題
                    ->view('emails.notify')  //信件視圖
                    ->with(['params'=>$this->params]);
    }
}
