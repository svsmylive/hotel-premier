<?php

use App\Models\Room;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->text('price')->nullable();
            $table->text('price_old')->nullable();
            $table->text('preview_description')->nullable();
            $table->text('detail_description')->nullable();
            $table->string('discount_percent')->nullable();
            $table->string('square')->nullable();
            $table->string('bed_size')->nullable();
            $table->string('persons')->nullable();

            $table->timestamps();
        });

        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->boolean('is_detail');

            $table->timestamps();
        });

        Schema::create('property_room', function (Blueprint $table) {
            $table->id();
            $table->foreignId('property_id');
            $table->foreignId('room_id');

            $table->timestamps();
        });

        $this->fillData();
    }

    private function fillData()
    {
        $data = [
            [
                'title' => 'Стандарт',
                'price' => 3240,
                'price_old' => 3600,
                'preview_description' => 'Однокомнатный номер с кроватью queen-size, подходит для комфортабельного проживания двух человек.',
                'detail_description' => 'Номер категории Стандарт подходит для комфортабельного проживания двух человек. При необходимости номер может быть оборудован дополнительным спальным местом для взрослого человека или ребенка от 8 лет (место оплачивается отдельно).',
                'discount_percent' => '-10%',
                'square' => 'от 20 м²',
                'bed_size' => '160*200',
                'persons' => 'до 2 человек',
            ],
            [
                'title' => 'Улучшенный стандарт',
                'price' => 4140,
                'price_old' => 4600,
                'preview_description' => '',
                'detail_description' => '',
                'discount_percent' => '-10%',
                'square' => null,
                'bed_size' => null,
                'persons' => null,
            ],
            [
                'title' => 'Стандарт-премиум',
                'price' => 4590,
                'price_old' => 5100,
                'preview_description' => '',
                'detail_description' => '',
                'discount_percent' => '-10%',
                'square' => null,
                'bed_size' => null,
                'persons' => null,
            ],
            [
                'title' => 'Студия',
                'price' => 8757,
                'price_old' => 9730,
                'preview_description' => '',
                'detail_description' => '',
                'discount_percent' => '-10%',
                'square' => null,
                'bed_size' => null,
                'persons' => null,
            ],
            [
                'title' => 'Люкс',
                'price' => 10665,
                'price_old' => 11850,
                'preview_description' => '',
                'detail_description' => '',
                'discount_percent' => '-10%',
                'square' => null,
                'bed_size' => null,
                'persons' => null
            ],
        ];

        foreach ($data as $room) {
            Room::query()->create($room);
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
