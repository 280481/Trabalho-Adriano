<?php 

class Observer1 implements InterfaceObserver {

    private $id = 50;

    public function notify($id)
    {
        if($this->id == $id) {
            echo " PEDIDO " . $this->id . " PEDIDO EFETUADO <br>";
        }
    }

}