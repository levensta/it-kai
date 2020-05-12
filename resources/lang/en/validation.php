<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute должен быть принят.',
    'active_url'           => 'У :attribute недействительный адрес',
    'after'                => ':attribute должна быть датой после :date.',
    'after_or_equal'       => ':attribute должна быть датой после или равен :date.',
    'alpha'                => ':attribute может содержать только буквы.',
    'alpha_dash'           => ':attribute может содержать только буквы, цифры и дефис.',
    'alpha_num'            => ':attribute может содержать только буквы и цифры.',
    'array'                => ':attribute должен быть массивом.',
    'before'               => ':attribute дожна быть датой до :date.',
    'before_or_equal'      => ':attribute должна быть датой до или равен :date.',
    'between'              => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file'    => ':attribute должен быть между :min и :max килобайт.',
        'string'  => ':attribute должен быть между :min и :max символов.',
        'array'   => ':attribute должен быть между :min and :max содержимого.',
    ],
    'boolean'              => 'У :attribute поле должно быть истинным или ложным.',
    'confirmed'            => ':attribute не совпадает',
    'date'                 => ':attribute не является действительной датой.',
    'date_format'          => ':attribute не соответствует формату :format.',
    'different'            => ':attribute и :other должны быть разными.',
    'digits'               => ':attribute должны быть :digits цифры.',
    'digits_between'       => ':attribute должен быть между :min and :max цифрами.',
    'dimensions'           => ':attribute имеет недопустимые размеры изображения.',
    'distinct'             => 'У :attribute поле имеет повторяющееся значение.',
    'email'                => 'У :attribute адрес эл. почты должен быть действительным.',
    'exists'               => 'selected :attribute is invalid.',
    'file'                 => ':attribute должен быть файлом.',
    'filled'               => 'У :attribute поле должно иметь значение.',
    'image'                => ':attribute должен быть изображением',
    'in'                   => 'Выбранный :attribute недействительны',
    'in_array'             => ':attribute поле не существует :other.',
    'integer'              => ':attribute должен быть целым числом.',
    'ip'                   => ':attribute должен быть действительный IP-адрес.',
    'json'                 => ':attribute must be a valid JSON string.',
    'max'                  => [
        'numeric' => ':attribute не может быть больше чем :max.',
        'file'    => ':attribute не может быть больше чем :max килобайт.',
        'string'  => ':attribute не может быть больше чем :max символов.',
        'array'   => ':attribute не может быть больше чем :max содержимого.',
    ],
    'mimes'                => ':attribute должен быть файлом типа: :values.',
    'mimetypes'            => ':attribute должен быть файлом типа: :values.',
    'min'                  => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file'    => ':attribute должен быть не менее :min kilobytes.',
        'string'  => ':attribute должен быть не менее :min символов.',
        'array'   => ':attribute должен быть не менее :min содержимого.',
    ],
    'not_in'               => 'Выбранный :attribute недействителен.',
    'numeric'              => ':attribute должен быть числом.',
    'present'              => 'У :attribute поле должно присутствовать.',
    'regex'                => 'У :attribute неверный формат.',
    'required'             => 'У :attribute поле, обязательное для заполнения.',
    'required_if'          => 'У :attribute поле, обязательное для заполнения, где :other это :value.',
    'required_unless'      => 'У :attribute поле обязательно для заполнения, если :other это в :values.',
    'required_with'        => 'У :attribute поле обязательно для заполнения, когда :values присутствуют.',
    'required_with_all'    => 'У :attribute поле обязательно для заполнения, когда :values присутствуют.',
    'required_without'     => 'У :attribute поле обязательно для заполнения, когда :values не существуют.',
    'required_without_all' => 'У :attribute поле атрибута является обязательным, если ни одно из :values отсуствует.',
    'same'                 => ':attribute и :other должны совпадать.',
    'size'                 => [
        'numeric' => 'У :attribute должен быть размер :size.',
        'file'    => ':attribute должен быть размера: :size килобайт.',
        'string'  => ':attribute должен быть размера: :size символов.',
        'array'   => ':attribute должен содержать :size предметов.',
    ],
    'string'               => ':attribute должен быть строкой.',
    'timezone'             => ':attribute must be a valid zone.',
    'unique'               => 'Данный :attribute уже занят.',
    'uploaded'             => ':attribute не удалось загрузить.',
    'url'                  => 'У :attribute неверный формат.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'attributes' => [
        'password' => 'Пароль',
        'current_password' => 'текущий пароль',
        'new_password' => 'новый пароль',
        'new_password_confirmation' => 'повтор нового пароля',
        'name' => 'Имя',
        'role' => 'Роль',
        'title' => 'Название',
        'description' => 'Описание',
        'published' => 'Публикация',
        'permission' => 'Права',
        'option_text' => 'Вариант ответа',
        'correct' => 'Корректность',
        'question' => 'Вопрос',
        'question_image' => 'Изображение к вопросу',
        'score' => 'Балл',
        'tests' => 'Тесты',
        'option_text_' => 'Вариант ответа',
        'correct_' => 'Корректность',
        'slug' => 'Название ссылки',
        'lesson_image' => 'Изображение к уроку',
        'short_text' => 'Короткое описание',
        'full_text' => 'Текст к уроку',
        'downloadable_files' => 'Загружаемые файлы',
        'free_lesson' => 'Бесплатный урок',
        'teachers' => 'Преподаватели',
        'price' => 'Цена',
        'course_image' => 'Изображение к курсу',
        'start_date' => 'Дата старта',
    ],

];
