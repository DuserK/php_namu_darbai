<?php


class KibirasNePo1 extends Kibiras3 {
    

    public function pridetiAkmeni(): void
    {
        $this->akmenuKiekis += rand(2, 5);
    }


}