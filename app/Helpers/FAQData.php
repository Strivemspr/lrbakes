<?php

namespace App\Helpers;

class FAQData {
    public $questions;

    function __construct() {
        $this->questions = [
            (object) [
                'question' => 'Do you accept returns or exchanges?',
                'answer' => 'Answer Number 1 Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor.'
            ],
            (object) [
                'question' => 'Where’s my refund?',
                'answer' => 'Answer Number 2 Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor.'
            ],
            (object) [
                'question' => 'Do you have any promotions or discounts?',
                'answer' => 'Answer Number 3 Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim praesent elementum facilisis leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor.'
            ],
        ];
    }

    public function get_questions() {
        return $this->questions;
    }
}

