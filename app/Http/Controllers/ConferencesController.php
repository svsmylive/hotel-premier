<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConferencesRequest;
use Illuminate\Support\Facades\Http;

class ConferencesController
{
    public function store(StoreConferencesRequest $request)
    {
        $data = $request->validated();

        try {
            $message = $this->getMessage($data);

            $apiKey = config('telegram.api_key');
            $chatId = config('telegram.chat_id_krasnodar');

            Http::post("https://api.telegram.org/bot{$apiKey}/sendMessage", [
                'chat_id' => $chatId,
                'text' => $message,
            ]);
        } catch (\Throwable $msg) {
            logger()->error($msg->getMessage());
        }

        return response()->json(['success' => true]);
    }

    public function getMessage(array $data): string
    {
        $data = [
            'type' => $data['type'] ?? '',
            'name' => $data['name'] ?? '',
            'date' => $data['date'] ?? '',
            'guest_count' => $data['guest_count'] ?? '',
            'phone' => $data['phone'] ?? '',
            'additional_info' => $data['additional_info'] ?? '',
        ];

        $messageOut = 'Бронирование конференц зала Hotel premier' . "\n";
        $messageOut .= 'Имя : ' . $data['name'] . "\n";
        $messageOut .= 'Тип конференц зала : ' . $data['type'] . "\n";
        $messageOut .= 'Дата' . $data['date'] . "\n";
        $messageOut .= 'Кол-во гостей : ' . $data['guest_count'] . "\n";
        $messageOut .= 'Телефона' . $data['phone'] . "\n";
        $messageOut .= 'Доп информация : ' . $data['additional_info'] . "\n";

        return $messageOut;
    }
}
