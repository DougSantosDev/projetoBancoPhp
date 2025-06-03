<?php
class Account {
    private $number;
    private $balance;

    public function __construct($number) {
        $this->number = $number;
        $this->balance = 0;
    }

    public function getNumber() { return $this->number; }
    public function getBalance() { return $this->balance; }

    public function deposit($amount) { $this->balance += $amount; }
    public function withdraw($amount) {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
        }
    }
}
