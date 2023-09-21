<?php

class bankAccount{
    public string $deposit;
    public string $withdraw;

    private array $log = [];
    

    public function __construct(public $balance, public string $accountNumber)
    {
        $this->log[]="Uw bankaccount nummer is: " . $this->accountNumber;
        $this->log[]="Uw huidige saldo is: €" . number_format($this->balance ,2);

    }
    public function withdraw($amount){
        if($this->balance - $amount >= 0){
            $this->balance -= $amount;
            $this->log[]="Uw heeft €" . $amount . " opgenomen. Uw huidige saldo is: €" . number_format($this->balance ,2);
        }else{
            $this->log[]="U heeft onvoldoende saldo om €" . $amount . " Op te nemen.";
        }
        
    }
    public function deposit($amount){
        $this->balance += $amount;
        $this->log[]="U heeft €" . number_format($amount ,2) . " op uw bankrekening gezet. Uw huidige saldo is: €" . number_format($this->balance ,2);
    }
    function setAccountNumber($accountNumber){
        if($accountNumber != $this->accountNumber){
            $this->log[]="Uw bankaccount nummer is gewijzigd in: " . $accountNumber;
        }
    }
    function getAccountNumber(){
        
    }
  
    function getBalance()
    {
        
    }
    function setBalance(){
        
    }

    function replies()
    {
        return implode("\n" , $this->log);
    }
}

$john = new bankAccount(10, 1249821);
$john->deposit(30);
$john->withdraw(45);
$john->setAccountNumber(1249821);

echo $john->replies();
?>

