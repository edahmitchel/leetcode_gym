<?php

class ListNode
{
    public int|float|string|null $val;
    public object|null $next;

    public function __construct(int|float|string|null $value = 0, object|null $next = null)
    {
        $this->val = $value;
        $this->next = $next;
    }
}