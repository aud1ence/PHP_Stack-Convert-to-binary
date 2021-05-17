<?php


class Stack
{
    public array $stack;

    public function __construct()
    {
        $this->stack = [];
    }

    public function convert($num): array
    {
        array_unshift($this->stack, $num % 2);
        while ($num != 1)
        {
            $num = floor($num /2);
            $result = $num % 2;
            array_unshift($this->stack ,$result) ;
        }
        return $this->stack;
    }

    public function toString(): string
    {
        return implode("", $this->stack);
    }
}