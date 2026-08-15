// Цели Яндекс.Метрики для модуля бронирования TravelLine.
//
// Модуль отрисовывается в iframe на домене tlintegration, поэтому повесить
// onsubmit/onclick на его кнопки с нашей страницы нельзя. Вместо этого слушаем
// события, которые TravelLine присылает родительской странице через postMessage.

(function () {
    var COUNTER_ID = 99236087;

    // Шаги бронирования TravelLine: search -> room -> preview -> payment -> complete.
    var GOAL_BY_STEP = {
        // Переход к тарифам после кнопки «Выбрать» в карточке номера.
        room: 'vibrat',
        // Бронирование подтверждено.
        complete: 'bron',
    };

    var TL_ORIGIN = /^https:\/\/[a-z0-9.-]+\.tlintegration\.(ru|com)$/;
    var TL_PREFIX = '!TL!';

    var sent = {};

    var reachGoal = function (goal) {
        if (!goal || sent[goal] || typeof window.ym !== 'function') {
            return;
        }
        sent[goal] = true;
        window.ym(COUNTER_ID, 'reachGoal', goal);
    };

    var parseMessage = function (raw) {
        if (typeof raw !== 'string' || raw.indexOf(TL_PREFIX) !== 0) {
            return null;
        }
        var start = raw.indexOf('{');
        if (start === -1) {
            return null;
        }
        try {
            var payload = JSON.parse(raw.slice(start));
            return payload && payload.data && payload.data._event ? payload.data : null;
        } catch (error) {
            return null;
        }
    };

    window.addEventListener('message', function (event) {
        if (!TL_ORIGIN.test(event.origin)) {
            return;
        }

        var data = parseMessage(event.data);
        if (!data) {
            return;
        }

        if (data._event === 'bookingStepChanged') {
            reachGoal(GOAL_BY_STEP[data.step]);
        } else if (data._event === 'bookingSuccess') {
            reachGoal('bron');
        } else if (data._event === 'trackUserAction' && data.action === 'select-room') {
            reachGoal('vibrat');
        }
    });
})();
