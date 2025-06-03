<?php

return [
    'accepted' => ':attribute を承認してください。',
    'active_url' => ':attribute は有効なURLではありません。',
    'after' => ':attribute には :date より後の日付を指定してください。',
    'alpha' => ':attribute にはアルファベットのみ使用できます。',
    'alpha_dash' => ':attribute には英数字・ハイフン・アンダースコアのみ使用できます。',
    'alpha_num' => ':attribute には英数字のみ使用できます。',
    'array' => ':attribute は配列でなければなりません。',
    'before' => ':attribute には :date より前の日付を指定してください。',
    'between' => [
        'numeric' => ':attribute は :min から :max の間で指定してください。',
        'file' => ':attribute は :min KBから :max KBの間で指定してください。',
        'string' => ':attribute は :min 文字から :max 文字の間で指定してください。',
        'array' => ':attribute は :min 個から :max 個の間で指定してください。',
    ],
    'confirmed' => ':attribute の確認が一致しません。',
    'email' => ':attribute は有効なメールアドレス形式で指定してください。',
    'required' => ':attribute は必須です。',
    'unique' => 'その :attribute はすでに使用されています。',
    'integer' => ':attribute は整数で指定してください。',
    'max' => [
        'string' => ':attribute は :max 文字以内で指定してください。',
    ],
    'min' => [
        'string' => ':attribute は少なくとも :min 文字必要です。',
    ],
    'exists' => '選択された :attribute は無効です。',
    // ...必要に応じて追加可能
    'attributes' => [
        'email' => 'メールアドレス',
        'password' => 'パスワード',
        'product_name' => '商品名',
        'vendor_code' => '業者コード',
    ],
];
