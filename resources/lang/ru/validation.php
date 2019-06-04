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

    'accepted' => ':attribute долженбыть принят.',
    'active_url' => ':attribute не является url адресом.',
    'after' => ':attribute долженбыть датой после :date.',
    'after_or_equal' => ':attribute долженбыть дайто после или равен :date.',
    'alpha' => ':attribute может содержать только буквы.',
    'alpha_dash' => ':attribute может содержать только буквы, цифры, тире и подчеркивания.',
    'alpha_num' => ':attribute может содержать только буквы и цифры.',
    'array' => ':attribute должен быть массивом.',
    'before' => ':attribute должно быть дата до :date.',
    'before_or_equal' => ':attribute должна быть дата до или равна :date.',
    'between' => [
        'numeric' => ':attribute должен быть между :min и :max.',
        'file' => ':attribute должен быть между :min и :max килобайт.',
        'string' => ':attribute долженбыть между :min и :max символов.',
        'array' => ':attribute должен содержать от :min и :max элементов.',
    ],
    'boolean' => ':attribute поле должно быть да или нет.',
    'confirmed' => ':attribute подтверждение не совпадает.',
    'date' => ':attribute недействительная дата.',
    'date_equals' => ':attribute должна быть дата, равная :date.',
    'date_format' => ':attribute не соответствует формату :format.',
    'different' => ':attribute и :other должен быть другим.',
    'digits' => ':attribute долженбыть :digits цифры.',
    'digits_between' => ':attribute долженбыть между :min и :max цифрами.',
    'dimensions' => ':attribute имеет неверные размеры изображения.',
    'distinct' => ':attribute поле имеет повторяющееся значение.',
    'email' => ':attribute адрес эл. почты должен быть действительным.',
    'ends_with' => ':attribute должен заканчиваться одним из следующих: :values',
    'exists' => 'Выбранный :attribute  недействителен.',
    'file' => ':attribute должен быть файл.',
    'filled' => ':attribute поле должно иметь значение.',
    'gt' => [
        'numeric' => ':attribute должно быть больше чем :value.',
        'file' => ':attribute должно быть больше чем :value килобайт.',
        'string' => ':attribute должно быть больше чем :value персонажей.',
        'array' => ':attribute должно иметь больше, чем :value элементов.',
    ],
    'gte' => [
        'numeric' => ':attribute должно быть больше или равно :value.',
        'file' => ':attribute должно быть больше или равно :value килобайт.',
        'string' => ':attribute должно быть больше или равно :value персонажей.',
        'array' => ':attribute должно иметь :value значений или больше.',
    ],
    'image' => ':attribute должно быть изображение.',
    'in' => 'Выбранный :attribute недействителен.',
    'in_array' => ':attribute не существует в :other.',
    'integer' => ':attribute должно быть целым числом.',
    'ip' => ':attribute должен быть действительный IP-адрес.',
    'ipv4' => ':attribute должен быть действительным адресом IPv4.',
    'ipv6' => ':attribute должен быть действительным адресом IPv6.',
    'json' => ':attribute должна быть допустимой строкой JSON.',
    'lt' => [
        'numeric' => ':attribute должно быть меньше чем :value.',
        'file' => ':attribute должно быть меньше чем :value килобайт.',
        'string' => ':attribute должно быть меньше чем :value персонажей.',
        'array' => ':attribute должно быть меньше чем :value элементов.',
    ],
    'lte' => [
        'numeric' => ':attribute должно быть меньше или равно :value.',
        'file' => ':attribute должно быть меньше или равно :value килобайт.',
        'string' => ':attribute должно быть меньше или равно :value персонажей.',
        'array' => ':attribute не должно иметь больше чем :value элементов.',
    ],
    'max' => [
        'numeric' => ':attribute не может быть больше чем :max.',
        'file' => ':attribute не может быть больше чем :max килобайт.',
        'string' => ':attribute не может быть больше чем :max персонажей.',
        'array' => ':attribute не может иметь больше, чем :max элементов.',
    ],
    'mimes' => ':attribute должен быть файл типа: :values.',
    'mimetypes' => ':attribute должен быть файл типа: :values.',
    'min' => [
        'numeric' => ':attribute должен быть не менее :min.',
        'file' => ':attribute должен быть не менее :min килобайт.',
        'string' => ':attribute должен быть не менее :min персонажей.',
        'array' => ':attribute должен иметь по крайней мере :min элементов.',
    ],
    'not_in' => 'Выбранный :attribute недействителен.',
    'not_regex' => ':attribute неверный формат.',
    'numeric' => ':attribute должен быть числом.',
    'present' => ':attribute поле должно присутствовать.',
    'regex' => ':attribute неверный формат.',
    'required' => ':attribute обязательное для заполнения.',
    'required_if' => ':attribute обязательно для заполнения, когда: :other равен :value.',
    'required_unless' => ':attribute обязательным, если :other находится в :values.',
    'required_with' => ':attribute обязательно для заполнения, когда :values присутствует.',
    'required_with_all' => ':attribute обязательно для заполнения, когда :values присутствует.',
    'required_without' => ':attribute обязательно для заполнения, когда :values отсутствуют.',
    'required_without_all' => ':attribute обязательно для заполнения, когда ни один из :values присутствует.',
    'same' => ':attribute и :other должен соответствовать.',
    'size' => [
        'numeric' => ':attribute должно быть :size.',
        'file' => ':attribute должно быть :size килобайт.',
        'string' => ':attribute должно быть :size персонажей.',
        'array' => ':attribute должен содержать :size элементов.',
    ],
    'starts_with' => ':attribute должен начинаться с одного из следующих: :values',
    'string' => ':attribute должен быть строкой.',
    'timezone' => ':attribute должна быть действительной зоной.',
    'unique' => ':attribute уже занят.',
    'uploaded' => ':attribute не удалось загрузить.',
    'url' => ':attribute неверный формат.',
    'uuid' => ':attribute должен быть действительным UUID.',

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
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
