<?php

namespace App\Orchid\Screens\News;

use App\Models\News;
use App\Orchid\Layouts\News\NewsEditLayout;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Orchid\Screen\Action;
use Orchid\Screen\Actions\Button;
use Orchid\Screen\Screen;
use Orchid\Support\Color;
use Orchid\Support\Facades\Layout;
use Orchid\Support\Facades\Toast;

class NewsEditScreen extends Screen
{
    /**
     * @var News
     */
    public $news;

    /**
     * Fetch data to be displayed on the screen.
     *
     * @return array
     */
    public function query(News $news): iterable
    {
        $news->load('imagePreview');

        return [
            'news' => $news
        ];
    }

    /**
     * The name of the screen displayed in the header.
     */
    public function name(): ?string
    {
        return $this->news->exists ? 'Редактирование новости' : 'Создание новости';
    }

    /**
     * Display header description.
     */
    public function description(): ?string
    {
        return '';
    }

    public function layout(): iterable
    {
        return [
            Layout::block(NewsEditLayout::class)
                ->title(__('Новость'))
                ->description(__('Форма создания новости'))
                ->vertical()
                ->commands(
                    Button::make(__('Save'))
                        ->type(Color::BASIC)
                        ->icon('bs.check-circle')
                        ->canSee($this->news->exists)
                        ->method('save')
                ),
        ];
    }

    public function save(News $news, Request $request): RedirectResponse
    {
        $data = $request->input('news');
        $attachment = $data['attachment'] ?? null;

        Toast::info(__('Успешно!'));
        if (!$news->id) {
            $news = News::create($data);
        } else {
            $news->update($data);
        }

        if ($attachment) {
            $news->attachment()->sync($attachment);
        }

        Toast::info(__('Сохранено успешно'));

        return redirect()->route('platform.systems.news');
    }

    /**
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     *
     */
    public function remove(News $news): RedirectResponse
    {
        $news->delete();

        Toast::info(__('Удалено успешно'));

        return redirect()->route('platform.systems.news');
    }

    /**
     * The screen's action buttons.
     *
     * @return Action[]
     */
    public function commandBar(): iterable
    {
        return [
            Button::make(__('Сохранить'))
                ->icon('bs.check-circle')
                ->method('save'),
            Button::make(__('Удалить'))
                ->icon('bs.trash3')
                ->confirm(__('Подтверждение удаления'))
                ->method('remove')
                ->canSee($this->news->exists),
        ];
    }
}
