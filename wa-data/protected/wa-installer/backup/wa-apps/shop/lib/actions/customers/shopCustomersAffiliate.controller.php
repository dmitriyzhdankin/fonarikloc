<?php

/**
 * Accepts data from affiliation transactions editor at customer info page.
 */
class shopCustomersAffiliateController extends waJsonController
{
    public function execute()
    {
        $contact_id = waRequest::post('contact_id', 0, 'int');
        $amount = (float) str_replace(',', '.', waRequest::post('amount', '0'));
        $comment = trim(waRequest::post('comment', ''));

        if (!$contact_id || !$amount) {
            return;
        }

        $atm = new shopAffiliateTransactionModel();
        $atm->applyBonus($contact_id, $amount, null, ifempty($comment));
    }
}

