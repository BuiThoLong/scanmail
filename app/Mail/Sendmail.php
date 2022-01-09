<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Carbon;
class Sendmail extends Mailable
{
    use Queueable, SerializesModels;

    public $resortName, $name, $address, $numberPhone, $email, $totalPrice;
    public function __construct($resortName, $name, $address, $numberPhone, $email, $totalPrice)
    {
        $this->resortName = $resortName;
        $this->name = $name;
        $this->address = $address;
        $this->numberPhone = $numberPhone;
        $this->email = $email;
        $this->totalPrice = $totalPrice;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('builongmmo@gmail.com', 'HAPPYDAY')
        ->subject("Cảm ơn Anh/Chị đã đặt phòng của chúng tôi" . Carbon::now('Asia/Ho_Chi_Minh')->format('Y-m-d H:i:s'))
        ->markdown('mail.sendBooking', compact('resortName','name','address','numberPhone','email','totalPrice'));
    }
} 