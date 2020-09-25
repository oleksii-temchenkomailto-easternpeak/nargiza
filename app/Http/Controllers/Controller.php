<?php

namespace App\Http\Controllers;

use App\Events\OrderCreated;
use App\Events\OrderCreate;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Validator;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('index');
    }

    public function test(Request $request)
    {
        OrderCreate::dispatch($request->all());
    }

    public function order(Request $request)
    {
        $validator = Validator::make($request->all(), array(
            'name' => 'required',
            'phone' => 'required',
            'skype' => 'sometimes|required',
        ));

        if ($validator->fails()) {
            $responce = [
                "into" => "#wpcf7-f54-o3",
                "status" => "validation_failed",
                "message" => "",
            ];
            $failedFields = array_keys($validator->failed());
            foreach ($failedFields as $field) {
                $responce["invalidFields"][] = [
                    "into" => "span.wpcf7-form-control-wrap.span-" . $field,
                    "message" =>"",
                    "idref" =>null
                ];
            }
            return response()->json($responce);
        }
        OrderCreate::dispatch($request->all());

        $responce = [
            "into" => "#wpcf7-f54-o3",
            "status" => "mail_sent",
            "message" => "\u0421\u043f\u0430\u0441\u0438\u0431\u043e \u0437\u0430 \u0412\u0430\u0448\u0435 \u0441\u043e\u043e\u0431\u0449\u0435\u043d\u0438\u0435. \u041e\u043d\u043e \u0443\u0441\u043f\u0435\u0448\u043d\u043e \u043e\u0442\u043f\u0440\u0430\u0432\u043b\u0435\u043d\u043e."
        ];
        return response()->json($responce);
    }

    public function subscribe()
    {
        dd(__FILE__ . ':' . __LINE__);///@TODO Don't forget to remove.
    }

    public function loadArticles(Request $request)
    {
        $bold = '[bold]';
        $data = [];
        $data[] = [
            'img' => '/lib/wp-content/uploads/2018/09/article-2.jpg',
            'img-big' => '/lib/wp-content/uploads/2018/09/article-2-big.jpg',
            'tags' => ['Вредные советы'],
            'title' => 'Как подружиться с депрессией',
            'author' => 'Ал-ас А.',
            'date' => '03.09.2018',
            'text' => 'Не занимайтесь своей жизнью, займитесь чьей-то. Жертвуйте собой ради кого-то, желательно, жертвуйте усердно, начисто забывая о себе.
    Не вздумайте выражать свои чувства. Никакие. Особенно злость. Это &#8212; нехорошо. Злятся только плохие люди.
    Всегда делайте то, что должны (а должны вы много) и что нужно (особенно кому-то другому!). Лучше при этом выбрать что-то глобальнее. Иметь денежный долг, кредит, ипотеку- это слишком мелко. Лучше будьте пожизненно должны что-нибудь вашей маме, мужу, коллективу, вашим детям.
    Не присваивайте себе своих достижений. Это мелко и недостойно. Критикуйте себя, будьте недовольны, неудовлетворены всем, что делаете. Будьте перфекционистом, требованиям которого невозможно соответствовать. Все, что вы уже достигли выбросите в корзину. Это вы уже сделали, зачем этим гордиться и радоваться, ведь можно сделать лучше. Нет предела совершенству, поэтому вы его никогда не достигнете, но всегда должны делать все, чтобы приближаться. Тратьте на это побольше сил, не жалейте себя.
    Почаще чувствуйте себя виноватым. Вы ведь можете нанести кому-то нечаянный вред? Не специально, конечно, но можете. Товарищу отказали сегодня. Он вас всегда просил встретить его ночью в аэропорту, и вы всегда соглашались. А сегодня отказались, потому что у вас грипп, и вы и так на работе еле сидите. Он вон как расстроился. А почему? Из-за вас! Почаще извиняйтесь за все. Вы же виноваты, даже если очень стараетесь все делать правильно.
    ' . $bold . 'Регулярно думайте о том, как вас оценивают другие люди. Сделайте так, чтобы они вами гордились! Соответствуйте.
    Берите на себя побольше ответственности. Отвечайте за все проекты на работе, за самочувствие соседки, за то, надел ли ваш муж с утра свежую рубашку, за настроение коллеги, за то, с кем спит ваша подруга&#8230;
    В общем, кто постарается, тот справится, так ведь?'
        ];
        $data[] = $data[0];
        $data[] = $data[0];
        $data[] = $data[0];

        $loadmore = (count($data) >= 4);
        $html = view('static-blocks/article', ['data' => $data, 'bold' => $bold])->render();
        return response()->json([
            'loadmore' => $loadmore,
            'html' => $html
        ]);
    }
}
