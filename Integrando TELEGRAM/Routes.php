Route::prefix('api_telegram')->group(function (){
        Route::get('/updated-activity', 'TelegramBotController@updatedActivity');
        Route::get('/telegram', 'TelegramBotController@sendMessage')->name('telegram');
        Route::post('/telegram/send-message', 'TelegramBotController@storeMessage')->name('telegram_1');
        Route::get('/telegram/send-photo', 'TelegramBotController@sendPhoto')->name('telegram_2');
        Route::post('/telegram/store-photo', 'TelegramBotController@storePhoto')->name('telegram_3');
        //Route::get('/telegram/updated-activity', 'TelegramBotController@updatedActivity');
    });
