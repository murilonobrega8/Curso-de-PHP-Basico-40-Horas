<?php

echo "Olá, Mundo!\n";

class Main
{
    private $name;

    public function __construct()
    {
        echo "Hello World!\n";
    }

    /**
     * Teste
     *
     * @param string $name
     * @return void
     */
    public function teste(string $name): void
    {
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}
