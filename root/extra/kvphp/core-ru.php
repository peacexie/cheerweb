<?php

// 语言包:cn

return array(

    // sdev/exdBase.php
    'exdb_mode' => '- режим извлечения -',
    'exdb_exop' => '- расширенные операции -',
    'exdb_rnote' => 'правило',
    'exdb_orgtag' => 'метка исходного содержимого ',
    'exdb_nres' => 'Результаты выполнения текущей партии:',
    'exdb_okn' => 'успешное выполнение статьи [{val}]',
    'exdb_next' => '{val} после выполнения следующей партии...',
    'exdb_rok' => 'Осуществление завершено.',
    'exdb_res' => 'Результаты:',
    'exdb_bugres' => 'результат отладки:',
    'exdb_orgdata' => 'первоначальное содержание',

    // dops/dopUser.php
    'du_gradeo' => '- уровень членства:',
    'du_userid' => 'имя десанта',
    'du_upass' => 'пароль',
    'du_gradet' => 'сорт',
    'du_empty' => 'не изменять пароль',
    'du_editng' => 'Ошибка изменения: дважды неверный пароль!',
    'du_editok' => 'изменение завершено',
    'du_erold' => 'Ошибка изменения: ошибка старого пароля',

    // dops/usrBase.php
    'usrb_ertimes' => 'ошибка пароля счёта: {val} раз!',
    'usrb_erunknow' => 'Неизвестная ошибка',

    // sdev/devApp.php
    'devapp_dferr' => 'неправильное имя каталога или файла',
    'devapp_dfnum' => 'каталог или имя файла не могут быть полными цифрами',
    'devapp_dfues' => 'каталог или имя файла уже используется',
    'devapp_dfext' => 'каталог или конфигурация уже существует',
    'devapp_dataerr' => 'неправильная модель данных',

    // sms 
    'sms_fail' => 'Проваливай!',
    'sms_errtel' => 'неправильно набран номер.',
    'sms_errmsg' => 'содержимое сообщения пустое',
    'sms_charge0' => 'системный остаток 0, пожалуйста, свяжитесь с администратором',
    'sms_charged' => 'системный дефицит, пожалуйста, свяжитесь с администратором',
    'sms_msenderr' => 'групповое поражение',

    //sdev/updBase.php
    'updbase_lock1' => 'заперты!обновить файл:',
    'updbase_tip1' => '1. сначала удалить и изменить путь < update >',
    'updbase_tip2' => 'или: изменить [done = update], обновить',
    'updbase_back' => '[возвращение]',
    'updbase_setdirerr' => 'Настройка каталога [{val}] ошибка',
    'updbase_verbig' => 'текущая версия выше или равно обновление пакета',
    'updbase_notwrite' => 'Возможно каталог [{val}] не может быть написан!',
    'updbase_compare' => '[контраст]',

    // sdev/devRun.php
    'devrun_tipr1' => 'Примечание: корневой каталог содержит пустые строки, а не / или',
    'devrun_tipr2' => 'Примечание: спереди, сначала, не сзади /',
    'devrun_upd' => 'Обновить',
    'devrun_fixpararm' => 'Примечание: только что изменен параметр: файл:',
    'devrun_file' => 'Документы:',
    'devrun_setpath' => 'Укажите путь:',
    'devrun_upding' => 'Rafraîchissement par point',
    'devrun_needenv' => 'требуется среда сервера',

    'devrun_my3a' => 'необходимо открыть [{val}] для расширения',
    'devrun_my3b' => 'или изменить файл:',
    'devrun_my3c' => 'настройки:',
    'devrun_my3d' => 'Выберите одно и включите соответствующее расширение',

    'devrun_gd2' => 'необходимо открыть расширение GD2, установите php.Ini:',
    'devrun_phpvbest' => 'Рекомендации',
    'devrun_phpver' => 'версия PHP',
    'devrun_notwrite' => 'невозможно писать',
    'devrun_extendset' => ' - не поддерживается расширение {val}: Пожалуйста, проверьте php.ini - ',
    'devrun_linkmysqlerr' => ' - Сервер не подключен - ',
    'devrun_tmfiles' => 'слишком много файлов, пожалуйста, установите сокращение каталога.',

    // sdev/devSetup.php
    'devsetup_deltip' => 'уже установлено!при повторной установке удалите:',
    'devsetup_dt1' => 'низший',
    'devsetup_dt2' => 'и',
    'devsetup_dt3' => 'Документация',
    'devsetup_donen' => '- установка этапа [{val} завершена -',
    'devsetup_nosetup' => '(еще не установлено)',
    'devsetup_chkenv' => 'Проверьте обстановку',
    'devsetup_chkdir' => 'Проверьте каталог',
    'devsetup_chkmysql' => 'Проверьте сервер баз данных Mysql',
    'devsetup_noframe' => 'Импорт структуры таблицы',
    'devsetup_runasright' => 'результат выполнения как справа...',

    // sdev/updInfo.php
    'updinfo_nowver' => 'текущая версия:',
    'updinfo_viewdown' => 'Загрузить официально',
    'updinfo_remver' => '(официальная версия: {val})',
    'updinfo_remerr' => '(официальный вариант: [ошибка получения данных])',
    'updinfo_allspace' => 'общее пространство',
    'updinfo_uesspace' => '[используется: {val} содержит документы и данные]',
    'updinfo_upd' => 'Обновить',
    'updinfo_dir' => 'Содержание',
    'updinfo_dbinfo' => 'база данных',
    'updinfo_st1day' => 'В тот же день',
    'updinfo_st3day' => '3 дня',
    'updinfo_st7day' => '7 дней',
    'updinfo_stall' => 'итого',

    'safcomm_vcode' => 'После щелчка на входной рамке, чтобы увидеть изображение, <br> без различия размера',
    'rule_uname' => 'инициалы, допустимые 3 - 16 байт <br> позволяют подчёркивать буквенные цифры',
    'rule_upass' => 'разрешить 6,15 байт',
    'ie_low' => 'ай - Ай - Ай - Ай - Ай!рекомендуется заменить браузер, например Chrome, Firefox, IE {val} +!',
    'cfg_close' => 'обновление сайта, временное закрытие!',
    'cfg_dggdcn' => 'Спасибо dg.Gd.Cn',

    'opt_first' => '- выберите -',
    'nul_orgdata' => 'исходные данные отсутствуют',
    'pub_title' => 'публиковать',
    'no_rank' => '- без звания -',
    'upd_comp' => 'контраст',
    'safcomm_vcoderr' => 'Ошибка идентификации кода!',
    'devbase_clsrepeat' => 'повторяющееся имя класса',

    'kid_minlen' => 'Введите {val} + символ!',
    'kid_keeped' => '[{val} сохранен в системе!',
    'kid_preused' => 'префикс [{val}] сохранен в системе!',
    'kid_ismodel' => '[{val} для системной модели (занято)!',

    'bcv_pic' => '[график]',
    'bcv_file' => '[прилагается]',
    'bcv_set' => 'Настройки',

    'msg_goto' => 'Я пойду.',
    'msg_jumpto' => '& автоматически...',
    'msg_or' => 'или',
    'msg_add' => 'прибавлять',
    'msg_edit' => 'Изменить',
    'msg_eg' => 'например:',

    'cupd_reprule' => 'Правило замены',
    'opay_order' => 'заказ',

    'vshow_uncheck' => 'Информация не существует или не проверена!',
    'vshow_1pagetag' => 'Каждая страница содержит только одну вкладку с раздельным листом. Проверьте следующие шаблоны:',

    'seal_defstr' => 'строка проверки печати',
    'seal_move' => 'Щёлкните по & Shift',
    'seal_mark' => 'специальная печать',

    'push_ok' => 'успешная подача:',
    'push_ng' => 'Ошибка загрузки:',

    'vop_parerr' => 'Неверный аргумент!',
    'vop_closemod' => 'Этот модуль выключен!',
    'vop_closecat' => 'Закрывайте ворота!',
    'vop_st301dir' => '301 прыжок без создания статического состояния',

    'vops_batres' => 'Результаты выполнения текущей партии:',
    'vops_dores' => 'успешное выполнение {val}',
    'vops_3secnext' => 'следующая партия через 3 секунды...',
    'vops_end' => 'Осуществление завершено.',
    'vops_res' => 'Результаты:',

    'dbdict_refresh' => 'Обновить',
    'dbdict_title' => 'словарь баз данных',
    'dbdict_table' => 'таблица данных',
    'dbdict_field' => 'поле',
    'dbdict_tab' => 'Таблица',
    'dbdict_extab' => '[расширение таблицы]',

    // tester
    'test_name' => 'китайское имя',
    'test_end' => 'конец теста',
    'start_title' => 'начальная страница',
    'view_times' => 'просматривать {val} раз',

    'home' => 'Первая страница',

    'uname' => 'Имя пользователя',
    'upass' => 'секретный код',
    'vcode' => 'идентификация',
    'submit' => 'представление',

    /*/ pager
    'page_First' => 'Первая страница',
    'page_Prev' => '上页',
    'page_Next' => '下页',
    'page_Last' => '尾页',
    'page_mkPage' => '{val}页',
    'page_mkRec' => '{val}记录',*/

    //stinc
    'stinc_closed' => 'подсказка закрыть сайт!',
    'stinc_cmore' => 'для получения дополнительной информации нажмите:',
    'stinc_findat' => 'поиск',
    'stinc_errun' => 'Ошибка запуска',
    'stinc_erdbsql' => 'Ошибка базы данных - Sql',
    'stinc_erbase' => 'Основные сведения',
    'stinc_ertrace' => 'Trace Information',
    'stinc_nycan' => 'Попробуйте...',
    'stinc_retry' => 'Попробуйте позже',
    'stinc_reback' => 'вернуться на страницу',
    'stinc_gohome' => 'вернуться на главную страницу',
    
    
);

