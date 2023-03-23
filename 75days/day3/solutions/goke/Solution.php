<?php

require "ListNode.php";

class Solution
{
    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists(ListNode $list1, ListNode $list2): ListNode
    {
        if (!$list1) return $list2;
        if (!$list2) return $list1;
        if ($list1->val <= $list2->val) {
            $head = new ListNode($list1->val);
            $list1 = $list1->next;
        }
        else {
            $head = new ListNode($list2->val);
            $list2 = $list2->next;
        }
        $nextNode = new ListNode();
        if ($list1 || $list2) $head->next = $nextNode;
        else $head->next = null;

        while ($list1 != null || $list2 != null) {
            if ($list1 && $list2) {
                if ($list1->val <= $list2->val) {
                    $nextNode->val = $list1->val;
                    $list1 = $list1->next;
                }
                else {
                    $nextNode->val = $list2->val;
                    $list2 = $list2->next;
                }
            }
            elseif ($list1 && !$list2) {
                $nextNode->val = $list1->val;
                $list1 = $list1->next;
            }
            else {
                $nextNode->val = $list2->val;
                $list2 = $list2->next;
            }

            if ($list1 || $list2) $nextNode->next = new ListNode();
            else $nextNode->next = null;
            $nextNode = $nextNode->next;
        }
        return $head;
    }

    /**
     * @param ListNode $head
     * @return ListNode
     */
    function reverseList(ListNode $head): ListNode
    {
        if (!$head || $head->next == null) return $head;
        $currNode = $head;
        $prevNode = null;
        $nextNode = $currNode->next;
        while($currNode != null){
            $currNode->next = $prevNode;
            $prevNode = $currNode;
            $currNode = $nextNode;
            $nextNode = $nextNode->next;
        }
        return $prevNode;
    }
}
