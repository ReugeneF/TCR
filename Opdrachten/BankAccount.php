<?php

class bankAccount{
    public function __construct(public $balance, public string $accountNumber)
    {

    }

}

$john = new bankAccount(10, 1249821);
?>

