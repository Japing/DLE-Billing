<?php

return array
(
	# 0.7
	#
	'history_search_oper' => "Операция:",
	'history_transaction' => "Транзакция: ",
	'history_transaction_text' => "Описание платежа:",
	'history_search_oper_desc' => "Выберите тип транзакции: доход, расход или все операции",
	'history_search_sum' => "Сумма:",
	'history_search_sum_desc' => "Вы можете использовать один из символов сравнения: > <",
	'search_info' => "Показаны результаты поиска по вашему запросу <span style='float: right'><a href=''>Отмена поиска</a></span>",
	'history_max_remove_ok' => "Выбранные транзакции удалены",
	'invoice_all_payments' => "Все платежные системы",
	'invoice_search_sum_get' => "Сумма к получению:",
	'invoice_search_sum_get_desc' => "Фильтр поиска по значению &laquo;Зачислено&raquo;<br>Вы можете использовать один из символов сравнения: > <",
	'invoice_search_date_create' => "Дата и время создания квитанции:",
	'invoice_search_date_pay' => "Дата и время поступления оплаты:",
	'invoice_was_pay' => "Оплачен ",
	'pay_msgOk' => "Пополнен счёт через %s на %s %s",

	'null' => "Пусто",

	'date_from' => "от ",
	'date_to' => " до ",
	'help' => "Инструкция",

	'menu_1' => "Настройки",
	'menu_1_d' => "Настройка параметров модуля, используемая валюта, секретный ключ, уведомления пользователей",
	'menu_2' => "История движения средств",
	'menu_2_d' => "История расходов и доходов пользователей, поиск платежей по параметрам",
	'menu_3' => "Пользователи и группы",
	'menu_3_d' => "Поиск пользователей по логину и балансу, редактирование баланса пользователей и групп",
	'menu_4' => "Поступление средств",
	'menu_4_d' => "Просмотр и редактирование запросов пользователей на пополнение баланса через платежные системы",
	'menu_5' => "Статистика",
	'menu_5_d' => "Статистика дохода и расхода пользователей, статистика плагинов и платежных систем, сводка по доходу сайта",
	'menu_6' => "Каталог плагинов",
	'menu_6_d' => "Каталог плагинов и платежных систем, проверка актуальных версий",

	'tab_1' => "Панель управления",
	'tab_2' => "Платежные системы",
	'tab_3' => "Плагины",

	'logger_text_1' => "Дата и время",
	'logger_text_2' => "Тип",
	'logger_text_3' => "Сообщение",
	'logger_text_4' => "Содержимое",

	'logger_do_0' => "Получен запрос от платежной системы",
	'logger_do_1' => "Параметры платежа получены",
	'logger_do_3' => "Проверка секретного ключа провалена",
	'logger_do_4' => "Платежная система недоступна",
	'logger_do_5' => "Секретный ключ принят, платежная система доступна",
	'logger_do_6' => "Файл adm.settings.php платежной системы подключен",
	'logger_do_7' => "Номер квинанции не определён",
	'logger_do_8' => "Номер квинанции определён",
	'logger_do_9' => "Данные платежа проверены и приняты",
	'logger_do_9.1' => "Платеж запрещен файлом-обработчиков",
	'logger_do_10' => "Платеж зачислен",
	'logger_do_11' => "Ошибка зачисления платежа",
	'logger_do_12' => "Файл adm.settings.php платежной системы не подключен",
	'logger_do_14' => "Все операции завершены",
	'logger_do_14' => "Оповещение пользователя",

	'logger_do_15' => "Квитанци с указанным id не найдена",
	'logger_do_16' => "Квитанци с указанным id уже оплачена",
	'logger_do_17' => "Платежная система не соответствует указанной в квитанции",

	'statistics_dashboard_all' => "Всего средств в системе",
	'statistics_dashboard_today' => "пополнено сегодня",
	'statistics_dashboard_refund' => "Выведено из системы",
	'statistics_dashboard_comission' => "комиссия составила",
	'statistics_dashboard_to_refund' => "заявлено к выводу",
	'statistics_dashboard_pay' => "Пополнено через платежные системы",
	'statistics_dashboard_to_pay' => "ожидается к пополнению",
	'statistics_dashboard_transfer' => "Переведено между пользователями",
	'statistics_dashboard_search_user' => "Поиск по пользователям",
	'statistics_dashboard_all_refund' => "Все запросы вывода средств",
	'statistics_dashboard_invoices' => "Обработка квитанций",
	'statistics_dashboard_search_reansfer' => "Поиск переводов",
	'statistics_users_balance' => "текущий баланс",
	'statistics_users_refund' => "к выводу",
	'statistics_graph_get' => "Привлечено средств",
	'statistics_graph_plus' => "Доход пользователей",
	'statistics_graph_minus' => "Расход пользователей",
	'statistics_dashboard_yesterday_up' => "По сравнению со вчерашним днем (%s %s)",

	'catalog_get_update' => "Получить обновление",

	'users_group_stats' => array(
		"<td>Группа</td>",
		"<td>Пользователей</td>",
		"<td>Минимальный баланс</td>",
		"<td>Максимальный</td>",
		"<td>Всего на счетах</td>"
	),

	'payment_convert_text' => "Конвертация",
	'payment_convert_in' => "Интеграция",

	'payment_convert' => array(
		"<td width='50%'>Сайт</td>",
		"<td>Платежная система</td>"
	),

	# settings, url
	#
	'url' => "Изменить URL",
	'url_help' => "Укажите начальное значение части url - <b>start</b> и конечное - <b>end</b>. Например: для замены /billing.html/<u>log</u>/ на /billing.html/<u>history</u>/, укажите <b>log</b> - <b>history</b> ",

	# 0.5.6
	#
	'main_settings_1' => "Главные настройки",
	'main_settings_2' => "Расширенные настройки",
	'main_settings_3' => "Безопасность",
	'main_now' => "Сегодня в ",
	'main_rnow' => "Вчера в ",
	'main_next' => "Продолжить",
	'main_re' => "Повторить",
	'main_back' => "Вернуться назад",
	'main_report' => "Сообщить об ошибке",
	'main_log' => "Режим тестирования",
	'main_report_close' => "Больше не показывать",
	'main_error_controller' => "Файл плагина не найден",
	'main_error_metod' => "Функция плагина не найден",

	# main
	#
	'main_settings' => "Настройки",
	'main_settings_desc' => "Общие настройки модуля",
	'main_mail' => "Настройки уведомлений",
	'main_mail_desc' => "Редактирование шаблонов email и ЛС оповещения",
	'main_paysys' => "Платежные системы",
	'main_plugins' => "Плагины",
	'main_news' => "За сегодня",
	'main_users' => "пользователь,пользователя,пользователей",
	'main_users_plus' => "пополнили свой баланс суммарно на",
	'main_users_refund' => "запросили возврат средств суммарно на",

	# catalog
	#
	'catalog_er' => "Каталог недоступен",
	'catalog_er_title' => "URL адрес каталога не задан, либо недоступен",
	'catalog_er2_title' => "Ваш сервер не позволяет использовать Curl методы",
	'catalog_version_yes' => "Вы используете актуальную версия модуля - ",
	'catalog_verplug_ok' => "Установлено",
	'catalog_verplug_update' => "Доступно обновление v.",
	'catalog_version_no' => "<b>Внимание!</b> Вы используете устаревшую версию модуля. Актуальная версия - ",
	'catalog_tab1' => "Платежные системы",
	'catalog_tab2' => "Плагины",
	'catalog_free' => "Бесплатно",
	'catalog_doc' => "Документация",
	'catalog_forum' => "Форум",
	'catalog_autor' => "Автор",

	'settings_status' => "Включить:",
	'settings_status_desc' => "Включить личный кабинет для всех пользователей",
	'settings_page' => "Страница личного кабинета:",
	'settings_page_desc' => "Укажите название <a href=\"" . $PHP_SELF . "?mod=static\">существующей статической страницы</a> с личным кабинетом",
	'settings_currency' => "Наименование у.е.:",
	'settings_currency_desc' => "Отображается рядом с суммой. Формат настройки: рубль,рубля,рублей",
	'settings_summ' => "Сумма оплаты по умолчанию",
	'settings_summ_desc' => "Используется на странице пополнения баланса",
	'settings_redirect' => "Редирект на сайт платежной системы:",
	'settings_redirect_desc' => "После создания квитанции, пользователь будет автоматически перенаправлен на сайт платежной системы для оплаты счёта",
	'settings_paging' => "Результатов на страницу:",
	'settings_paging_desc' => "Количество записей на странице",
	'settings_admin' => "Логин администратора:",
	'settings_admin_desc' => "Будет использоваться как отправитель в служебных сообщениях пользователям",
	'settings_key' => "Ключ доступа платежной системы:",
	'settings_key_desc' => "Введите произвольный нобор букв и цифр, ключ используется для формировании result url.<br />Никому не сообщайте этот ключ",
	'settings_test' => "Режим тестирования:",
	'settings_test_desc' => "Включить <a href=\"" . $PHP_SELF."?mod=billing&m=log\">логирование входящих запросов</a>",
	'settings_field' => "Поле в БД с балансом пользователя:",
	'settings_field_desc' => "Название столбца в таблице " . PREFIX . "_users,  в которой хранится баланс пользователя",
	'settings_start' => "Указатель стартовой страницы:",
	'settings_start_desc' => "Главная страница личного кабинета: плагин/метод/параметр/значение<br />Например: log/main/page/1",
	'settings_format' => "Формат у.е.:",
	'settings_format_desc' => "В каком формате использователь средства при совершении транзакций",

	'settings_catalog' => "Каталог плагинов:",
	'settings_catalog_desc' => "URL сервера каталога плагинов",
	'settings_informers' => "Информеры:",
	'settings_informers_desc' => "Использовать следующие информеры в админ.панели",
	'settings_pdf_outputs' => array(
		'0'=> "Отключить",
		'1'=>"Вывести на экран",
		'2'=>"Вывести на экран и загрузить"
	),
	'mail_table' => array(
		"<td>Действие пользователя</td>",
		"<td>Сообщение в личную почту</td>",
		"<td>Сообщение на email</td>"
	),
	'mail_pay_ok' => "<p><b>Квитанция оплачена</b></p><p>Пользователь успешно завершил оплату на сайте платежной системы</p>",
	'mail_pay_new' => "<p><b>Новая квитанция</b></p><p>Пользователь начал процесс пополнения баланса</p>",
	'mail_balance' => "<p><b>Баланс изменён</b></p><p>Баланс пользователя на сайте был изменён (не платежной системой)</p>",

	'ok' => "Действие выполнено",
	'info' => "Системное сообщение",
	'error' => "Ошибка",
	'save' => "Сохранить",
	'save_settings' => "Настройки успешно сохранены!",
	'save_mail' => "Шаблоны оповещения сохранены!",
	'mail' => "Шаблоны оповещения сохранены!",
	'status' => "Статус",
	'remove' => "Удалить",
	'info_login' => "- информация по данному логину",
	'act' => "Выполнить",
	'apply' => "Применить",

	# catalog 0.5.6
	#
	'catalog_title' => "Каталог плагинов",
	'catalog_desc' => "Каталог плагинов и платежных систем, доступных для загрузки",

	# payments
	#
	'paysys_on' => "Включить приём платежей:",
	'paysys_save_ok' => "Настройки платежной системы успешно сохранены!",
	'paysys_fail_error' => "Файл платежной системы не найден!",
	'paysys_url' => "URL обработчика платежей:",
	'paysys_url_desc' => "На этот url приходят запросы с сайта платежной системы, при изменении статуса оплаты",
	'paysys_status_desc' => "Разрешить пользователям пополнять свой баланс с помощью данной платежной системы.",
	'paysys_name' => "Название в списке:",
	'paysys_name_desc' => "Название платежной системы",
	'paysys_convert' => "Цена 1 ед. данной валюты:",
	'paysys_convert_desc' => "Относительно валюты на сайте",
	'paysys_minimum' => "Минимальная сумма платежа:",
	'paysys_minimum_desc' => "Минимальная сумма платежа в валюте сайта",
	'paysys_max' => "Максимальная сумма платежа:",
	'paysys_max_desc' => "Максимальная сумма платежа в валюте сайта",
	'paysys_currency' => "Название валюты:",
	'paysys_currency_desc' => "Название валюты платежной системы",
	'paysys_format' => "Формат данных:",
	'paysys_format_desc' => "Например: 0.00",
	'paysys_icon' => "Иконка:",
	'paysys_icon_desc' => "Путь до иконки платежной системы. Например: ",
	'paysys_about' => "Краткое описание:",
	'paysys_about_desc' => "Краткое описание платежной системы",
	'pay_title' => "Пополнение баланса",
	'pay_status_on' => "Работает",
	'pay_status_off' => "Отключено",
	'pay_name' => "Система оплаты",

	# Invoice 0.7.1
	#
	'invoice_key' => "Квитанция: ",
	'invoice_payer_requisites' => "Реквизиты плательщика:",
	'invoice_payer_requisites_desc' => "Вы можете использовать символ <b>%</b> - вместо части запроса<br /><br />Например: <b>WMID3320%</b>",
	'invoice_payer_info' => "Дополнительная информация:",

	# Invoice 0.5.6
	#
	'invoice_info' => "Информация",
	'invoice_new' => "Привлечено средств",
	'invoice_payok' => "Оплачено",

	# unvoice 0.5.5
	#
	'invoice_title' => "Поступление средств",
	'invoice_desc' => "Просмотреть все квитанции пользователей",
	'invoice_ok' => "Квитанции обработаны",
	'invoice_all' => "Все",

	'invoice_summa' => "Сумма к оплате:",
	'invoice_summa_desc' => "Фильтр поиска по значению &laquo;Оплачено&raquo;<br>Вы можете использовать один из символов сравнения: > <",
	'invoice_ps' => "Платежная система:",
	'invoice_ps_desc' => "При необходимости выберите систему оплаты",
	'invoice_status' => "Состояние:",
	'invoice_status_desc' => "Выберите интересуюший вас статус квитанции",

	#'invoice_status_1' => "Любой",
	#'invoice_status_2' => "Оплачено",
	#'invoice_status_3' => "Не оплачено",

	'invoice_status_arr' => array(
		'' => "Все операции",
		'ok' => "Оплачено",
		'no' => "Не оплачено"
	),

	'invoice_str_payok' => "Оплачено",
	'invoice_str_get' => "Зачислено",
	'invoice_str_ps' => "Система оплаты",
	'invoice_str_status' => "Статус",

	'invoice_edit_1' => "Изменить статус на &laquo;Оплачено&raquo;",
	'invoice_edit_2' => "Изменить статус на &laquo;Не оплачено&raquo;",
	'invoice_edit_3' => "Изменить статус на &laquo;Оплачено&raquo; и зачислить средства",

	/* Search 0.5.5 */
	'search_pcode' => "Код плагина:",
	'search_pcode_desc' => "Если не нужно учитывать - оставьте поле пустым",
	'search_pid' => "ID операции плагина:",

	'search_tsd' => array(
		'' => "Все операции",
		'plus' => "Доход",
		'minus' => "Расход",
	),

	'search_type_operation' => array(
		'' => "Тип операции",
		'>' => "больше",
		'<' => "меньше",
		'=' => "равно",
		'!=' => "не равно"
	),

	'search_summa_desc' => "Фильтр поиска по значению суммы",
	'search_user' => "Пользователь:",
	'search_user_desc' => "Введите логин пользователя или его часть.<br />Вы можете использовать символ <b>%</b> - вместо части запроса<br /><br />Например: <b>mr_%</b> - пользователи, чей логин начинается с mr_",
	'search_comm' => "Комментарий:",
	'search_comm_desc' => "Вы можете использовать символ <b>%</b> - вместо части запроса",
	'search_date' => "Дата и время:",
	'search_date_desc' => "Фильтр поиска по дате",

	# history plugin
	#
	'transactions_title' => "История движения средств",
	'history_desc' => "Просмотреть историю движения средств",
	'history_for' => " для ",
	'history_code' => "ID плагина",
	'history_summa' => "Сумма",
	'history_date' => "Дата и время",
	'history_user' => "Пользователь",
	'history_balance' => "Остаток на балансе",
	'history_comment' => "Комментарий",
	'history_paging' => "Страницы",
	'history_no' => "Записей не найдено",
	'history_search' => "Поиск",
	'history_search_btn' => "Найти",
	'history_search_btn_null' => "Сбросить",

	# refund plugin
	#
	'refund_title' => "Возврат средств",
	'refund_back' => "Запрос на вывод средств #{remove_id} отменён администратором",
	'refund_act' => "Запросы вывода средств обработаны",
	'refund_summa' => "Сумма к выводу",
	'refund_commision_list' => "+ Комиссия учтена",
	'refund_requisites' => "Реквизиты",
	'refund_wait' => "Ожидается",
	'refund_act_ok' => "Выполнено",
	'refund_act_no' => "Отменить",
	'refund_status_desc' => "Включить плагин для всех пользователей",
	'refund_name_desc' => "Название плагина для меню пользователя",
	'refund_minimum' => "Минимальная сумма для вывода:",
	'refund_minimum_desc' => "В текущей валюте сайта",
	'refund_commision' => "Комиссия сайта:",
	'refund_commision_desc' => "Данный процент от суммы вывода будет удерживаться сайтом в качестве комиссии",
	'refund_field' => "Поле с реквизитами:",
	'refund_field_desc' => "Дополнительное <a href=\"{$PHP_SELF}?mod=userfields&xfieldsaction=configure\">поле профиля</a> пользователя с реквизитами для вывода",
	'refund_email' => "Email для повещения:",
	'refund_email_desc' => "Укажите email на который хотите получать уведомления о новом запросе на вывод средств",
	'refund_email_title' => "Новый запрос вывода средств на сайте",
	'refund_email_msg' => "Ваш пользователь создал запрос на вывод средств<br /><br />Больше информации в админ. панели: ",
	'refund_status_desc' => "Включить плагин для всех пользователей",

	'refund_se_summa' => "Сумма к выводу:",
	'refund_se_summa_desc' => "Фиьтр по сумме вывода<br>Вы можете использовать один из символов сравнения: > <",
	'refund_se_req' => "Реквизиты",
	'refund_se_req_desc' => "Вы можете использовать символ <b>%</b> - для составления маски запроса<br />Например: <b>R%</b> - запросы вывода на R-кошелёк (WebMoney)",
	'refund_se_status' => "Статус запроса:",
	'refund_se_status_desc' => "Выберите интересуюший вас статус запроса",

	'refund_search' => array(
		'' => "Любой",
		'wait' => "Ожидается",
		'ok' => "Выполнен",
	),

	'refund_informer_title' => "Новых запросов",
	'refund_informer' => "Ожидают вывода",

	# transfer plugin
	#
	'transfer_title' => "Перевод средств",
	'transfer_minimum' => "Минимальная сумма для перевода:",
	'transfer_minimum_desc' => "В текущей валюте сайта",

	# theme
	#
	'title' => "Баланс пользователя",
	'main' => "Панель управления",
	'desc' => "Управление модулем DLE-Billing",
	'support' => "<a href=\"https://dle-billing.ru/\" target=\"_blank\">официальный сайт</a>",
	'dev' => "	<ul class=\'settingsb\'>
					<li style=\'min-width:90px\'><a href=\'https://dle-billing.ru/\' target=\'_blank\'><i class=\'icon-home\'></i><br> Домашняя страница</a></li>
					<li style=\'min-width:90px\'><a href=\'https://dle-billing.ru/partner.html\' target=\'_blank\'><i class=\'icon-money\'></i><br>Партнерам</a></li>
					<li style=\'min-width:90px\'><a href=\'https://dle-billing.ru/doc/main.html\' target=\'_blank\'><i class=\'icon-magic\'></i><br>Документация</a></li>
					<li style=\'min-width:90px\'><a href=\'https://github.com/mr-Evgen/dle-billing-module\' target=\'_blank\'><i class=\'icon-github\'></i><br>Исходный код</a></li>
				</ul>",
	'dev_title' => "Разработка и поддержка",
	'more' => "Показать больше",
	'go_plugin' => "Перейти к плагину ",
	'no_plugin' => "Плагины не установлены!",
	'on' => "Вкл",
	'off' => "Выкл",
	'go_paysys' => "Перейти к настройкам платежной системы ",
	'no_paysys' => "Платежные системы не установлены!",
	'user_profily' => "Профиль на сайте",
	'user_history' => "История баланса",
	'user_refund' => "Запросы вывода",
	'user_balance' => "Изменить баланс",
	'user_edit_ap' => "Редактировать",
	'user_invoice' => "Квитанции",
	'user_stats' => "Общая статистика",

	'user_se_balance' => "Баланс:",
	'user_se_balance_desc' => "Используйте один из символов сравнения: > < =",

	# Users
	#
	'users_title' => "Пользователи",
	'users_groups_title' => "Группы пользователей",
	'users_title_full' => "Результаты поиска",
	'users_desc' => "Поиск пользователей, изменение баланса",
	'users_search' => "Найти пользователя",
	'users_label' => "Данные для поиска:",
	'users_label_desc' => "Введите логин ( email ) пользователя или его часть",
	'users_btn' => "Найти",
	'users_plus' => "Пополнить баланс",
	'users_login' => "Пользователи:",
	'users_login_desc' => "Укажите через запятую логины пользователей",
	'users_summa' => "Сумма:",
	'users_summa_desc' => "Введите сумму",
	'users_group' => "Изменить баланс группе:",
	'users_group_desc' => "Баланс будет изменен каждому пользователю выбранной группы",
	'users_stats_title' => "Админ. действия",
	'users_tanle_login' => "Пользователь",
	'users_tanle_email' => "Email",
	'users_tanle_group' => "Группа",
	'users_tanle_datereg' => "Дата регистрации",
	'users_tanle_balance' => "Баланс",
	'users_comm' => "Комментарий",
	'users_comm_desc' => "Введите описание платежа",
	'users_er_user' => "Не указан логин пользователя",
	'users_er_group' => "Не указана группа",
	'users_er_summa' => "Не указана сумма",
	'users_er_comm' => "Не указан комментарий",
	'users_ok_group' => "Баланс группы изменён",
	'users_ok' => "Баланс выбранных пользователей изменен",
	'users_ok_reserv' => "Баланс пользователя понижен",
	'users_minus' => "Понизить баланс",
	'users_edit' => "Изменить баланс",
	'users_edit_user' => "Изменить баланс пользователю",
	'users_edit_group' => "Изменить баланс группе",
	'users_edit_do' => "Действие:",
	'users_edit_do_desc' => "Выберите из придложенного списка",

	# Statistics
	#
	'statistics_title' => "Статистика",
	'statistics_title_desc' => "Статистика пополнения и расхода баланса пользователей",
	'stats_error_remove' => "Ошибка hash строки",
	'stats_ok_remove' => "Информация о платеже удалена",
	'stats_tr_balance' => "Пополнение баланса",
	'stats_tr_payhide' => "Оплата файла",
	'stats_remove' => "Удалить счёт",
	'stats_ome' => "раз.",

	# 0.5.6
	#
	'statistics_error_load' => "Ошибка загрузки файла статистики",
	'statistics_show' => "Показать",
	'statistics_info' => "Справка",
	'statistics_info_text' => "text",
	'statistics_interval' => "Указать: ",
	'statistics_info1' => "За указанный промежуток времени:",
	'statistics_info2' => "доход пользователей составил",
	'statistics_info3' => "расход ",
	'statistics_diagram_1' => "График расходов пользователей",
	'statistics_null' => "<p style='text-align: center; margin: 10px'>В указанные промежутки времени платежи не совершались.</p>",
	'statistics_minus' => "Расход",
	'statistics_plus' => "Доход",
	'statistics_pay' => "Пополнение через биллинг",
	'statistics_admin' => "Действие администратора",
	'statistics_d_end' => "Итого",
	'statistics_d_per' => " раз.",
	'statistics_d_title1' => "Расходы пользователей",
	'statistics_d_subtitle' => "За указанные промежуток времени — %s %s",
	'statistics_d_title2' => "Доходы пользователей",
	'statistics_users_error' => "Пользователь не найден",
	'statistics_users_21' => "До ",
	'statistics_users_9' => "Отправить сообщение на сайте",
	'statistics_users_10' => "Отправить email",

	# 0.5.5
	#
	'statistics_0' => "<i class='icon-money'></i><br />Расчетный доход",
	'statistics_0_title' => "Привлечено средств",
	'statistics_1' => "Общая статистика",
	'statistics_2' => "Используемые способы пополнения баланса",
	'statistics_2_tab_2' => "Объем привлеченных средств",
	'statistics_2_title' => "<i class='icon-bar-chart'></i><br />Платежные системы",
	'statistics_3' => "Объем расходов и доходов пользователей",
	'statistics_3_tab2' => "Классификация по плагинам",
	'statistics_3_title' => "<i class='icon-cogs'></i><br />Статистика плагинов",
	'statistics_4' => "Статистика пользователя",
	'statistics_4_title' => "<i class='icon-group'></i><br />Пользователи",
	'statistics_5_title' => "Сбросить статистику",
	'statistics_5' => "<i class='icon-trash'></i><br />Сбросить статистику",
	'statistics_6_title' => "Вернуться",
	'statistics_6' => "Главное меню",

	'statistics_new_1' => "Статистика движения средств",
	'statistics_new_1_graf' => "Рост доходов и расходов пользователей",

	'statistics_clean_1_ok' => "Очистка данных выполнена",
	'statistics_clean_info' => "<p><b>Внимание!</b></p>
									<p>Данные из <b>истории баланса</b> используются при составлении статистики.</p>
									<p>Перед очисткой данных настоятельно рекомендуем <a href=\"{$PHP_SELF}?mod=dboption\" style=\"border-bottom: 1px solid\">сделать резервную копию</a> базы данных.</p>",
	'statistics_clean_2' => "Отметить все",
	'statistics_clean_3' => "Очистить историю баланса:",
	'statistics_clean_3d' => "Очистить историю баланса для следующий плагинов",
	'statistics_clean_4' => "Удалить квитанции на оплату:",
	'statistics_clean_4d' => "Удалить квитанции на оплату со следующими статусами",
	#'statistics_clean_4_s1' => "Все",
	#'statistics_clean_4_s2' => "Оплачено",
	#'statistics_clean_4_s3' => "Не оплачено",

	'statistics_clean_invoice' => array(
		'' => "",
		'all' => "Все",
		'ok' => "Оплачено",
		'no' => "Не оплачено"
	),

	'statistics_clean_refund' => array(
		'' => "",
		'all' => "Все",
		'all' => "Выполнено",
		'ok' => "Ожидается"
	),

	'statistics_clean_balance' => array(
		'' => "",
		'1' => "Да",
	),

	'statistics_clean_5' => "Удалить запросы возврата средств:",
	'statistics_clean_5d' => "Удалить запросы возврата средств со следующими статусами",
	#'statistics_clean_5_s1' => "Выполнено",
	#'statistics_clean_5_s2' => "Ожидается",
	'statistics_clean_6' => "Обнулить баланс всех пользователей:",
	'statistics_clean_6d' => "Обнулить баланс всех пользователей",
	#'statistics_clean_6d_yep' => "Да",
	'statistics_billings_invoices_0' => "из",
	'statistics_billings_invoices_1' => "квитанций",
	'statistics_billings_invoices_summ' => "суммарно",

	'sectors' => array(
		'D' => "По дням",
		'M' => "По месяцам",
		'Y' => "По годам"
	),

	'months' => array(
		'1'		=>	"янв",
		'2'		=>	"фев",
		'3'		=>	"мар",
		'4'		=>	"апр",
		'5'		=>	"май",
		'6'		=>	"июн",
		'7'		=>	"июл",
		'8'		=>	"авг",
		'9'		=>	"сен",
		'10'	=>	"окт",
		'11'	=>	"ноя",
		'12'	=>	"дек",
	),

	'months_full' => array(
		'1'		=>	"Январь",
		'2'		=>	"Февраль",
		'3'		=>	"Март",
		'4'		=>	"Апрель",
		'5'		=>	"Май",
		'6'		=>	"Июнь",
		'7'		=>	"Июль",
		'8'		=>	"Август",
		'9'		=>	"Сентябрь",
		'10'	=>	"Октябрь",
		'11'	=>	"Ноябрь",
		'12'	=>	"Декабрь",
	),

	# upgrade
	#
	'upgrade_title' => "Обновление модуля до v.",
	'upgrade_wsql' => "Внимание, будут выполнены следующие SQL запросы:",
	'upgrade_ok' => "Модуль обновлен до версии ",

	# install
	#
	'currency' => "рубль,рубля,рублей",
	'cabinet' => "Личный кабинет",
	'install_ok' => "Модуль установлен",
	'install_ok_text' => "<div style='text-align: left'>
							<font color='green'><b>Модуль DLE-Billing установлен</b></font>.
							<br /><br />Теперь Вы можете перейти к <a href='?mod=billing'><u>админ.панели</u></a> модуля, либо в <a href='/billing.html'><u>личный кабинет</u></a> пользователя.
							<br /><br />
								<ul style='margin-left: 20px'>
									<li><a href='https://dle-billing.ru/doc/start.html' target='_blank'><u>Подготовка к работе</u> [doc]</a></li>
									<li>Подключить <a href='https://dle-billing.ru/platezhnye-sistemy/' target='_blank'><u>Платежные системы</u></a></li>
									<li>Установить <a href='https://dle-billing.ru/plugins/' target='_blank'><u>Плагины</u></a></li>
								</ul>
						</div>",
	'install_plugin' => "Плагин установлен",
	'install_plugin_desc' => "Первичные настройки плагина установлены. Вы можете вернуться к панеле управления плагином.",
	'install_bad' => "Установка не завершена",
	'install_next' => "Вы можете вернуться в <b><a href=\"\">гланое меню</a></b> модуля",
	'install_error' => "<p>Файл <b>.htaccess</b> закрыт для записи. Откройте этот файл и в самом конце добавьте:</p>",
	'install_error_config' => "<p>Не удалось сохранить настройки модуля. Создайте и сохраните файл <b>/engine/data/billing/config.php</b> с содержимым:</p>",
	'install' => "Установка модуля",
	'install_button' => "Я согласен",
	'license' => "<b>Пользовательское соглашение</b></p>
					<p><a href=\"http://opensource.org/licenses/mit-license.php\">The MIT License (MIT)</a></p>
					<p>Copyright (c) 2012 - 2017 mr_Evgen (https://dle-billing.ru/)</p>
					<p>Данная лицензия разрешает лицам, получившим копию данного программного обеспечения и сопутствующей документации (в дальнейшем именуемыми «Программное Обеспечение»), безвозмездно использовать Программное Обеспечение без ограничений, включая неограниченное право на использование, копирование, изменение, добавление, публикацию, распространение, сублицензирование и/или продажу копий Программного Обеспечения, также как и лицам, которым предоставляется данное Программное Обеспечение, при соблюдении следующих условий:</p>
					<p>Указанное выше уведомление об авторском праве и данные условия должны быть включены во все копии или значимые части данного Программного Обеспечения.</p>
					<p>ДАННОЕ ПРОГРАММНОЕ ОБЕСПЕЧЕНИЕ ПРЕДОСТАВЛЯЕТСЯ «КАК ЕСТЬ», БЕЗ КАКИХ-ЛИБО ГАРАНТИЙ, ЯВНО ВЫРАЖЕННЫХ ИЛИ ПОДРАЗУМЕВАЕМЫХ, ВКЛЮЧАЯ, НО НЕ ОГРАНИЧИВАЯСЬ ГАРАНТИЯМИ ТОВАРНОЙ ПРИГОДНОСТИ, СООТВЕТСТВИЯ ПО ЕГО КОНКРЕТНОМУ НАЗНАЧЕНИЮ И ОТСУТСТВИЯ НАРУШЕНИЙ ПРАВ. НИ В КАКОМ СЛУЧАЕ АВТОРЫ ИЛИ ПРАВООБЛАДАТЕЛИ НЕ НЕСУТ ОТВЕТСТВЕННОСТИ ПО ИСКАМ О ВОЗМЕЩЕНИИ УЩЕРБА, УБЫТКОВ ИЛИ ДРУГИХ ТРЕБОВАНИЙ ПО ДЕЙСТВУЮЩИМ КОНТРАКТАМ, ДЕЛИКТАМ ИЛИ ИНОМУ, ВОЗНИКШИМ ИЗ, ИМЕЮЩИМ ПРИЧИНОЙ ИЛИ СВЯЗАННЫМ С ПРОГРАММНЫМ ОБЕСПЕЧЕНИЕМ ИЛИ ИСПОЛЬЗОВАНИЕМ ПРОГРАММНОГО ОБЕСПЕЧЕНИЯ ИЛИ ИНЫМИ ДЕЙСТВИЯМИ С ПРОГРАММНЫМ ОБЕСПЕЧЕНИЕМ.</p>",
);

?>
