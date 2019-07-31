<?php 

class Observer3 implements InterfaceObserver {

    public function notify($id)
    {
        echo "PEDIDO " . $id . " NÃO É MEU <br>";
    }

}