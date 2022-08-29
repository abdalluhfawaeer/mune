<?php

return [
    'InvalidName' => 'الاسم غير صالح.',
    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما تكون قيمة :other تساوي :value',
    'active_url' => ':attribute ليس رابط صالح.',
    'after' => 'يجب انت تكون قيمة :attribute أكبر من :date.',
    'after_or_equal' => 'يجب انت تكون قيمة :attribute أكبر من او تساوي :date.',
    'alpha' => 'يجب ان يحتوي :attribute على حروف فقط.',
    'alpha_dash' => 'يجب ان يحتوي :attribute على حروف, ارقام, شرطات وشرطات تحت السطر فقط.',
    'alpha_num' => 'يجب ان يحتوي :attribute على حروف و ارقام فقط.',
    'array' => 'يجب ان تكون قيمة :attribute مصفوفة.',
    'before' => 'يجب انت تكون قيمة :attribute اقل من :date.',
    'before_or_equal' => 'يجب انت تكون قيمة :attribute اقل من او تساوي :date.',
    'between' => [
        'numeric' => 'يجب ان تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب ان تكون قيمة :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب ان تكون قيمة :attribute بين :min و :max حروف.',
        'array' => 'يجب ان تكون قيمة :attribute بين :min و :max عناصر.',
    ],
    'boolean' => 'يجب انت تكون قيمة :attribute خطأ او صح.',
    'confirmed' => 'تأكيد :attribute غير مطابق.',
    'current_password' => 'كلمة المرور الحالية غير صحيحة.',
    'date' => 'قيمة :attribute ليست تاريخ صالح.',
    'date_equals' => 'قيمة :attribute يجب ان تكون تاريخ يساوي :date.',
    'date_format' => 'صيغة :attribute لا تطابق الصيغة :format.',
    'declined' => 'يجب رفض :attribute.',
    'declined_if' => 'يجب رفض :attribute عندما تكون قيمة :other تساوي :value.',
    'different' => ':attribute و :other يجب ان يكونا مختلفين.',
    'digits' => 'يجب ان يكون عدد خانات :attribute يساوي :digits خانات.',
    'digits_between' => 'يجب ان يكون عدد خانات :attribute بين :min و :max.',
    'dimensions' => ':attribute لها أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي حقل :attribute على قيمة مكررة.',
    'email' => 'يجب أن تكون :attribute عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن تنتهي :attribute بأحد القيم التالية :values.',
    'enum' => 'قيمة :attribute المحددة غير صالحة.',
    'exists' => 'قيمة :attribute المحددة غير صالحة.',
    'file' => 'يجب أن تكون :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي حقل :attribute على قيمة.',
    'gt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من :value.',
        'file' => 'يجب أن يكون حجم :attribute أكبر من :value كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف :attribute أكبر من :value حرف.',
        'array' => 'يجب أن يكون عدد عناصر :attribute أكبر من :value عنصر.',
    ],
    'gte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أكبر من او يساوي :value.',
        'file' => 'يجب أن يكون حجم :attribute أكبر من او يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف :attribute أكبر من او يساوي :value حرف.',
        'array' => 'يجب أن يكون عدد عناصر :attribute أكبر من او يساوي :value عنصر.',
    ],
    'image' => 'يجب أن تكون قيمة :attribute صورة.',
    'in' => 'قيمة :attribute المحددة غير صالحة.',
    'in_array' => 'قيمة :attribute غير موجود في :other.',
    'integer' => 'يجب أن تكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن تكون :attribute عنوان معرف صالح.',
    'ipv4' => 'يجب أن تكون :attribute عنوان معرف(4) صالح.',
    'ipv6' => 'يجب أن تكون :attribute عنوان معرف(6) صالح.',
    'json' => 'يجب أن تكون :attribute قيمة جيسون صالحة.',
    'lt' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أقل من :value.',
        'file' => 'يجب أن يكون حجم :attribute أقل من :value كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف :attribute أقل من :value حرف.',
        'array' => 'يجب أن يكون عدد عناصر :attribute أقل من :value عنصر.',
    ],
    'lte' => [
        'numeric' => 'يجب أن تكون قيمة :attribute أقل من او يساوي :value.',
        'file' => 'يجب أن يكون حجم :attribute أقل من او يساوي :value كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف :attribute أقل من او يساوي :value حرف.',
        'array' => 'يجب أن يكون عدد عناصر :attribute أقل من او يساوي :value عنصر.',
    ],
    'mac_address' => 'يجب أن تكون :attribute عنوان ماك صالح.',
    'max' => [
        'numeric' => 'يجب ان لا تكون قيمة :attribute أكبر من :max.',
        'file' => 'يجب ان لا يكون حجم :attribute أكبر من :max كيلوبايت.',
        'string' => 'يجب ان لا يكون عدد حروف :attribute أكبر من :max حرف.',
        'array' => 'يجب ان لا يكون عدد عناصر :attribute أكبر من :max عنصر.',
    ],
    'mimes' => 'يجب أن تكون :attribute ملفًا من النوع :values.',
    'mimetypes' => 'يجب أن تكون :attribute ملفًا من النوع :values.',
    'min' => [
        'numeric' => 'يجب ان لا تكون قيمة :attribute أقل من :max.',
        'file' => 'يجب ان لا يكون حجم :attribute أقل من :max كيلوبايت.',
        'string' => 'يجب ان لا يكون عدد حروف :attribute أقل من :max حرف.',
        'array' => 'يجب ان لا يكون عدد عناصر :attribute أقل من :max عنصر.',
    ],
    'multiple_of' => 'يجب ان تكون قيمة :attribute تساوي ضعف :value.',
    'not_in' => 'قيمة :attribute المحددة غير صالحة.',
    'not_regex' => 'صيغة :attribute المحددة غير صالحة.',
    'numeric' => 'يجب ان تكون قيمة :attribute رقماً.',
    'password' => 'كلمة المرور غير صالحة.',
    'present' => 'يجب أن يكون حقل :attribute موجودًا.',
    'prohibited' => 'حقل :attribute محظور.',
    'prohibited_if' => 'حقل :attribute محظور عندما تكون :other هي :value.',
    'prohibited_unless' => 'حقل :attribute محظور الا عندما تكون :other هي :value.',
    'prohibits' => 'يحظر حقل :attribute وجود الآخرين.',
    'regex' => 'صيغة :attribute المحددة غير صالحة.',
    'required' => 'حقل :attribute مطلوب.',
    'required_array_keys' => 'جيب ان يحتوي :attribute القيم: :values.',
    'required_if' => 'حقل :attribute مطلوب عندما تكون :other هي :value.',
    'required_unless' => 'حقل :attribute مطلوب الا عندما تكون :other هي :value.',
    'required_with' => 'يكون حقل :attribute مطلوبًا عندما تكون قيمة :values موجودة.',
    'required_with_all' => 'يكون حقل :attribute مطلوبًا عندما تكون قيم :values موجودة.',
    'required_without' => 'يكون حقل :attribute مطلوبًا عندما لا تكون قيمة :values موجودة.',
    'required_without_all' => 'يكون حقل :attribute مطلوبًا عندما لا تكون قيم :values موجودة.',
    'same' => 'يجب أن يتطابق :attribute و :other.',
    'size' => [
        'numeric' => 'يجب ان يكون حجم :attribute يساوي :size.',
        'file' => 'يجب ان يكون حجم :attribute يساوي :size كيلوبايت.',
        'string' => 'يجب ان يكون حجم :attribute يساوي :size حرض.',
        'array' => 'يجب ان يكون حجم :attribute يساوي :size عنصر.',
    ],
    'starts_with' => 'يجب أن تبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن تكون :attribute سترينج.',
    'timezone' => 'يجب أن تكون :attribute منطقة زمنية صالحة.',
    'unique' => 'تم استخدام :attribute بالفعل.',
    'uploaded' => 'فشل تحميل :attribute.',
    'url' => ':attribute ليس رابط صالح.',
    'uuid' => 'يجب ان تكون قيمة :attribute معرف (uuid) صالح.',

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