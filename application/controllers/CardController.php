<?php

class CardController extends Controller
{
    public function index()
    {
        $card = CardModel::getCard();

        $view = new View('index');
        $view->setVariable('title', $card['title']);
        $view->setVariable('text', $card['text']);

        return $view->render();
    }

    public function edit()
    {
        $card = CardModel::getCard();

        $view = new View('edit');
        $view->setVariable('title', $card['title']);
        $view->setVariable('text', $card['text']);

        return $view->render();
    }

    public function update()
    {
        $card = [
            'title' => $this->params['title'],
            'text' => $this->params['text']
        ];

        CardModel::setCard($card);

        return $this->redirect('index');
    }
}
