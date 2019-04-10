<?php

class CardModel extends Model
{
    public static function getCard()
    {
        $card = self::get('card');

        if ($card == null) {
            $card = self::createCard();
        }

        return $card;
    }

    public static function setCard($card)
    {
        self::set('card', $card);
    }

    public static function createCard()
    {
        return [
            'title' => '',
            'text' => ''
        ];
    }
}
